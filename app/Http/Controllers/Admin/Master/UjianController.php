<?php

namespace App\Http\Controllers\Admin\Master;

use App\Datatables\Admin\Master\UjianDataTable;
use App\Http\Controllers\Controller;
use App\Models\Ujian;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    public function index(UjianDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.master.ujian.index');
    }
    public function create()
    {
        return view('pages.admin.master.ujian.add-edit');
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'judul' => 'required|min:3'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            Ujian::create($request->all());
        } catch (\Throwable $th) {
            dd($th);
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.ujian.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = Ujian::findOrFail($id);
        return view('pages.admin.master.ujian.add-edit', ['data' => $data]);
    }
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'judul' => 'required|min:3'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = Ujian::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.ujian.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            Ujian::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
