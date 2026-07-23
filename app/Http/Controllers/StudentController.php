<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "Ini adalah halaman daftar siswa";
    }

    public function show(string $id)
    {
        return "Menampilkan detail siswa dengan ID : {$id}";
    }

    public function create()
    {
        return "ini adalah halaman untuk tambah data siswa";
    }

    public function edit(string $id)
    {
        return "ini adalah halaman untuk edit data  siswa dengan ID: {$id}";
    }

    public function store(Request $request)
    {
        return "ini adalah halaman untuk menambah data siswa baru";
    }

    public function update(Request $request, string $id)
    {
        return "mengubah data siswa dengan ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "menghapus data siswa dengan ID: {$id}";
    }
}

