<?php

namespace App\Http\Controllers\Admin\Master;

use App\Datatables\Admin\Master\SiswaDataTable;
use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    public function index(SiswaDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.master.siswa.index');
    }
    public function create()
    {
        return view('pages.admin.master.siswa.add-edit');
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
            Siswa::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.siswa.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = Siswa::findOrFail($id);
        return view('pages.admin.master.siswa.add-edit', ['data' => $data]);
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
            $data = Siswa::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.siswa.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            Siswa::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
