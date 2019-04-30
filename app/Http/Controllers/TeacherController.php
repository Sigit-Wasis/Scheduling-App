<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use DataTables;

class TeacherController extends Controller
{
    public function json()
    {
        $teachers = Teacher::select(['id', 'code', 'name_id', 'name_ar', 'nip', 'gender']);
        return Datatables::of($teachers)
        ->addColumn('action', function ($teachers){
            return '<a href="teacher/'.$teachers->id.'/edit" class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o"></i> Edit</a> <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelete'.$teachers->id.'"><i class="fa fa-trash-o"></i> Delete</a>';
        })
        ->make(true);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();

    	return view('Teacher.index', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $pesan = [
            'required' => ':attribute harus diisi',
            'filled'   => ':attribute harus dipilih',
            'max'      => ':attribute maksimal 20 karakter',
        ];

        $request->validate([
        'code'    => 'required',
        'name_id' => 'required',
        'name_ar' => 'required',
        'nip'     => 'required|max:20',
        'gender'  => 'filled',
        ], $pesan);

    	Teacher::create($request->all());

    	return redirect('/teacher')->with('success', 'Data berhasil di tambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
    	return view('Teacher.edit',compact('teacher'));
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
        $teacher = Teacher::findOrFail($id);

        $pesan = [
            'required' => ':attribute harus diisi',
            'filled'   => ':attribute harus dipilih',
            'max'   => ':attribute maksimal 20 karakter',
        ];

        $request->validate([
        'code'    => 'required',
        'name_id' => 'required',
        'name_ar' => 'required',
        'nip'     => 'required|max:20',
        'gender'  => 'filled'
        ], $pesan);

        $teacher = Teacher::findOrFail($id);

    	$teacher->update($request->all());
    	return redirect('/teacher')->with('success', 'Data berhasil di edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $teacher = Teacher::findOrFail($id);

    	$teacher->delete();
	
    	return redirect('/teacher')->with('success', 'Data berhasil di hapus!');
    }
}
