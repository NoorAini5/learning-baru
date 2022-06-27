<?php

namespace App\Http\Controllers\user\siswa;

use App\Datatables\Admin\Master\MateriDataTable;
use App\Http\Controllers\Controller;
use App\Models\JawabanDiskusi;
use Illuminate\Http\Request;

class JawabanDiskusiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            // dd($request->all());

            $file = $request->file('nama_file');
                $nama_file = $file->getClientOriginalName();
                $file->move('materi', $nama_file);
                $validatedData['nama_file'] = $nama_file;
                $validatedData['isi'] = $request->isi;
                $validatedData['mapel'] = $request->mapel;
                $validatedData['judul'] = $request->judul;

                JawabanDiskusi::create($validatedData);
            return redirect(route('admin.master-data.tugas.index'))->withToastSuccess('Data tersimpan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        {
            try {
                $request->validate([
                    'judul' => 'required|min:2'
                ]);
            } catch (\Throwable $th) {
                return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
            }

            try {
                $data = JawabanDiskusi::findOrFail($id);
                $data->update($request->all());
            } catch (\Throwable $th) {
                return back()->withInput()->withToastError('Something went wrong');
            }

            return redirect(route('admin.master-data.tugas.index'))->withToastSuccess('Data tersimpan');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
