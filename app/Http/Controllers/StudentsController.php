<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));

        // debug apakah database nya terbaca
        // return Student::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return 'create data';
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // mencoba apkah inputan pada method create sudah 
        // dapat dibaca
        // debug aja
        // return $request;

        // cara 1:
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->nim = $request->nim;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;

        // $student->save();


        // cara ke2:
        // Student::create([
        //     'nama' => $request->nama,
        //     'nim' => $request->nim,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan

        // ]);

        // cek data validasinya
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:10',
            'email' => 'required',
            'jurusan' => 'required'
        ]);

        // cara ke3:
        Student::create($request->all());

        // sekalian buat flash messange
        return redirect('/students')->with('status', 'Data Has Been Add');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        // return $student;
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        // return $student;
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        // return  $request;

        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:10',
            'email' => 'required',
            'jurusan' => 'required'
        ]);

        Student::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'nim' => $request->nim,
                'email' => $request->email,
                'jurusan' => $request->jurusan,
            ]);

        return redirect('/students')->with('status', 'Data Has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        // return $student;
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data Has Been Deleted!');

        // gunakan cara soft delete ketiak data ingin di hapus dari user 
        // tapi di database masih ada
    }
}
