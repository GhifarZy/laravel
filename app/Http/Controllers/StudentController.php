<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\Studentt;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = \App\Models\Studentt::all();
        return view('mahasiswa/student', ['student' => $mahasiswa]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // cara ke 1
        // $student = new Studentt;

        // $student->nama = $request->nama;
        // $student->nrp = $request->nrp;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;

        // $student->save();

        //cara ke 2
        // Studentt::create([

        //     'nama' => $request->nama,
        //     'nrp' => $request->nrp,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan,

        // ]);

        //cara ke 3
        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:10',
            'email' => 'required',
            'jurusan' => 'required',
        ]);
        Studentt::create($request->all());
        return redirect('/student')->with('status', 'Data berhasil di simpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Studentt  $studentt
     * @return \Illuminate\Http\Response
     */
    public function show(Studentt $studentt)
    {
        return view('mahasiswa/show', ['student' => $studentt]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Studentt  $studentt
     * @return \Illuminate\Http\Response
     */
    public function edit(Studentt $studentt)
    {
        return view('edit', ['student' => $studentt]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Studentt  $studentt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Studentt $studentt)
    {
        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:10',
            'email' => 'required',
            'jurusan' => 'required',
        ]);
        Studentt::where('id', $studentt->id)
            ->update([

                'nama' => $request->nama,
                'nrp' => $request->nrp,
                'email' => $request->email,
                'jurusan' => $request->jurusan,

            ]);
        return redirect('/student')->with('status', 'Data berhasil di diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Studentt  $studentt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Studentt $studentt)
    {
        Studentt::destroy($studentt->id);
        return redirect('/student')->with('status', 'Data berhasil di dihapus!');

    }
}
