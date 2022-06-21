<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tugas;
use App\Datatables\Admin\Master\TugasDataTable;

class TugasController extends Controller
{
    public function index(TugasDataTable $dataTable)
    {
        return $dataTable->render('pages.admin.master.tugas.index');
    }

    public function create()
    {
        //$jenis_mapel = Mapel::pluck('nama', 'id');
        return view('pages.admin.master.tugas.add-edit');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'filename' => 'required',
        //     'filename.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        // ]);
        // if ($request->hasfile('filename')) {
        //     $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('filename')->getClientOriginalName());
        //     $request->file('filename')->move(public_path('file'), $filename);
        //      Tugas::create(
        //             [
        //                 'file' =>$filename
        //             ]
        //         );
        //     echo'Success';
        // }else{
        //     echo'Gagal';
        // }

        try {
            $request->validate([
                'judul' => 'required|min:2'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            Tugas::create($request->all());
        } catch (\Throwable $th) {
            dd($th);
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.tugas.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = Tugas::findOrFail($id);
        //$jenis_mapel= Mapel::pluck('nama','id');
        return view('pages.admin.master.tugas.add-edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'judul' => 'required|min:2'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = Tugas::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('admin.master-data.tugas.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            Tugas::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }

    public function upload(){
		{
            return view('upload');
        }
	}


    public function proses_upload(Request $request)
    {
        // $request->validate([
        //     'filename' => 'required',
        //     'filename.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        // ]);
        // if ($request->hasfile('filename')) {
        //     $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('filename')->getClientOriginalName());
        //     $request->file('filename')->move(public_path('file'), $filename);
        //      Tugas::create(
        //             [
        //                 'file' =>$filename
        //             ]
        //         );
        //     echo'Success';
        // }else{
        //     echo'Gagal';
        // }

    }
}
