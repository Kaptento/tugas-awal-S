<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
     public function index()
    {
        return "Ini adalah halaman daftar major";
    }

    public function show(string $id)
    {
        return "Menampilkan detail major dengan ID : {$id}";
    }

    public function create()
    {
        return "Menampilkan halaman untuk tambah data major";
    }

    public function edit(string $id)
    {
        return "Menampilkan halaman edit major";
    }

    public function store(Request $request)
    {
        return "Melakukan penambahan data major baru";
    }

    public function update(Request $request, string $id)
    {
        return "Melakukan perubahan data major";
    }

    public function destroy(string $id)
    {
        return "Menghapus data major";
    }
}

