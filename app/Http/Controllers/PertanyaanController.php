<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class PertanyaanController extends Controller
{
    public function create()
    {
        return view('pertanyaan.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|unique:pertanyaan|max:255',
            'isi' => 'required',
        ]);
        $query =  DB::table('pertanyaan')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
        ]);
        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil diajukan');
    }
    public function index()
    {
        $pertanyaan = DB::table('pertanyaan')->get(); //select*from posts
        //dd($posts);
        return view('pertanyaan.index', compact('pertanyaan'));
    }
    public function show($id)
    {
        $post = DB::table('pertanyaan')->where('id', $id)->first();
        //dd($post);
        return view('pertanyaan.show', compact('post'));
    }
    public function edit($id)
    {
        $post = DB::table('pertanyaan')->where('id', $id)->first();
        //dd($post);
        return view('pertanyaan.edit', compact('post'));
    }

    public function update($id, Request $request)
    {
        /*$request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required'
        ]);
        */

        $query = DB::table('pertanyaan')
            ->where('id', $id)
            ->update([
                'judul' => $request['judul'],
                'isi' => $request['isi']
            ]);
        //dd($post);
        return redirect('/pertanyaan')->with('success', 'Data telah berhasil di update');
    }
    public function destroy($id)
    {
        $query = DB::table('pertanyaan')->where('id', $id)->delete();
        return redirect('/pertanyaan')->with('successs', 'post berhasil dihapus');
    }
}
