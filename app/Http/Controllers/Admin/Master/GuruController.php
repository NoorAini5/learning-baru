<?php

namespace App\Http\Controllers\Admin\Master;

use App\Datatables\Admin\Master\GuruDataTable;
use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(GuruDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.master.guru.index');
    }
    public function create()
    {
        return view('pages.admin.master.guru.add-edit');
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
            Guru::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.guru.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = Guru::findOrFail($id);
        return view('pages.admin.master.guru.add-edit', ['data' => $data]);
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
            $data = Guru::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.guru.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            Guru::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
