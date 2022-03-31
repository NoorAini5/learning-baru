<?php

namespace App\Http\Controllers\Admin\Master;

use App\Datatables\Admin\Master\MapelDataTable;
use App\Http\Controllers\Controller;
use App\Models\Mapel;
use App\Models\Kelas;
use App\Models\Guru;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index(MapelDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.master.mapel.index');
    }
    public function create()
    {
        $jenis_kelas = Kelas::pluck('nama', 'id');
        $jenis_guru = Guru::pluck('nama', 'id');
        return view('pages.admin.master.mapel.add-edit', ['jenis_kelas'=> $jenis_kelas],['jenis_guru'=> $jenis_guru]);
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
            Mapel::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.mapel.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = Mapel::findOrFail($id);
        $jenis_kelas= Kelas::pluck('nama','id');
        $jenis_guru= Guru::pluck('nama','id');
        return view('pages.admin.master.mapel.add-edit', ['data' => $data]);
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
            $data = Mapel::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.mapel.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            Mapel::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
