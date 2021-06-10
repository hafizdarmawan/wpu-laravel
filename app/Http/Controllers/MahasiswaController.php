<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student;
class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Student::all();
        // return view("mahasiswa/index",["maha" => $mahasiswa]);
        return view("mahasiswa/index",compact("mahasiswa"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("mahasiswa/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama"      => 'required',
            "nrp"       => 'required',
            "email"     => 'required',
            "jurusan"   => 'required'
        ]);


        $mahasiswa = Student::create([
            "nama"      => $request->nama,
            "nrp"       => $request->nrp,
            "email"     => $request->email,
            "jurusan"   => $request->jurusan
        ]);

        // Student::create($request->all());

       return redirect('/mahasiswa')->with("status","Data Berhasil Ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        // dd($mahasiswa);
        return view("mahasiswa/detail",compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Student::find($id);
        // dd($data);
        return view("mahasiswa/edit",['data' => $data]);
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
         $request->validate([
            "nama"      => 'required',
            "nrp"       => 'required',
            "email"     => 'required',
            "jurusan"   => 'required'
        ]);
        
        Student::where('id',$id)->update([
            "nama"     => $request->nama,
            "nrp"      => $request->nrp,
            "email"     => $request->email,
            "jurusan"     => $request->jurusan,
        ]);

        return redirect('/mahasiswa')->with("status","Data Berhasil Mengubah");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        
        Student::destroy($student->id);
        return redirect('/mahasiswa')->with("status","Data Berhasil Dihapus");
    }
}
