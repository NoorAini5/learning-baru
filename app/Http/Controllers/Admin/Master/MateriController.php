<?php

namespace App\Http\Controllers\Admin\Master;

use App\Datatables\Admin\Master\MateriDataTable;
use App\Http\Controllers\Controller;
use App\Models\Materi;
use App\Models\Mapel;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index(MateriDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.master.materi.index');
    }
    public function create()
    {
        $jenis_mapel = Mapel::pluck('nama', 'id');
        return view('pages.admin.master.materi.add-edit', ['jenis_mapel'=> $jenis_mapel]);
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required|min:3'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            Materi::create($request->all());
        } catch (\Throwable $th) {
            dd($th);
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.materi.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = Materi::findOrFail($id);
        $jenis_mapel= Mapel::pluck('nama','id');
        return view('pages.admin.master.materi.add-edit', ['data' => $data, 'jenis_mapel'=> $jenis_mapel]);
    }
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'nama' => 'required|min:3'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = Materi::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.materi.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            Materi::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
