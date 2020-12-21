<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $teacher = new Teacher;
        // $teacher->nama = $request->nama;
        // $teacher->nip = $request->nip;
        // $teacher->email = $request->email;
        // $teacher->jurusan = $request->jurusan;

        // $teacher->save();

        // Teacher::create([
        //     'nama' => $request->nama,
        //     'nip' => $request->nip,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan
        // ]);

        $request->validate([
            'nama' => 'required',
            'nip' => 'required|size:9'
        ]);

        Teacher::create($request->all());
        return redirect('/teachers')->with('status', 'Data Teacher Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        return view('teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required|size:9'
        ]);
        
        Teacher::where('id', $teacher->id)
                ->update([
                    'nama' => $request->nama,
                    'nip' => $request->nip,
                    'email' => $request->email,
                    'jurusan' => $request->jurusan
                ]);
        return redirect('/teachers')->with('status', 'Data Teacher Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        Teacher::destroy($teacher->id);
        return redirect('/teachers')->with('status', 'Data Teacher Berhasil Dihapus!');
    }
}
