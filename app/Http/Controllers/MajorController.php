<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
     public function index()
    {
        return "Ini adalah halaman daftar jurusan";
    }

    public function show(string $id)
    {
        return "Menampilkan detail jurusan dengan ID : {$id}";
    }

    public function create()
    {
        return "Menampilkan halaman untuk tambah data jurusan";
    }

    public function edit(string $id)
    {
        return "Menampilkan halaman edit jurusan";
    }

    public function store(Request $request)
    {
        return "Melakukan penambahan data jurusan baru";
    }

    public function update(Request $request, string $id)
    {
        return "Melakukan perubahan data jurusan";
    }

    public function destroy(string $id)
    {
        return "Menghapus data jurusan";
    }
}

