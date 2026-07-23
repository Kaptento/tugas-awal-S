<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
public function index()
    {
        return "Ini adalah halaman daftar guru";
    }

    public function show(string $id)
    {
        return "Menampilkan detail guru dengan ID : {$id}";
    }

    public function create()
    {
        return "ini adalah halaman untuk tambah data guru";
    }

    public function edit(string $id)
    {
        return "ini adalah halaman untuk edit data  guru dengan ID: {$id}";
    }

    public function store(Request $request)
    {
        return "ini adalah halaman untuk menambah data guru baru";
    }

    public function update(Request $request, string $id)
    {
        return "mengubah data guru dengan ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "menghapus data guru dengan ID: {$id}";
    }    

}
