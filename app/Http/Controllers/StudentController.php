<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sistem sekolah - Daftar Siswa";
        $students = [
            [
                "id" => 1,
                "nis" => "1001",
                "name" => "Andi",
                "class" => "12 TKJ 2",
                "major" => "TKJ"
            ],
            [
                "id" => 2,
                "nis" => "1002",
                "name" => "Budi",
                "class" => "12 TKJ 1",
                "major" => "TKJ"
            ],
        ];
        return view('students.index', [
            'title' => $title,
            'students' => $students
        ]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function show(string $id)
    {
        return view('students.show');
    }

    public function edit(string $id)
    {
        return view('students.edit');
    }

    public function store(Request $request)
    {
        return "Melakukan penambahan data siswa baru";
    }

    public function update(Request $request, string $id)
    {
        return "Melakukan perubahan data siswa";
    }

    public function destroy(string $id)
    {
        return "Menghapus data siswa";
    }
}

