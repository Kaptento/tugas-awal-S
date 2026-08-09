<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
 public function index()
    {
        $title = 'Sistem Sekolah - Daftar Guru';
        $teachers = [
    [
      'id' => 1,
      'nip' => '198501012024',
      'name' => 'Budi Santoso',
      'gender' => 'Laki-Laki',
      'subject' => 'Akuntansi Dasar',
      'phone' => '081234560001',
      'status' => 'Aktif',
    ],
    [
      'id' => 2,
      'nip' => '198703152024',
      'name' => 'Siti Aminah',
      'gender' => 'Perempuan',
      'subject' => 'Jaringan Komputer',
      'phone' => '081234560002',
      'status' => 'Aktif',
    ]
];
 return view('teachers.index', [
            'title' => $title,
            'teachers' => $teachers,
        ]);

    }

    public function show(string $id)
    {
        return "Menampilkan detail guru dengan ID : {$id}";
    }

    public function create()
    {
        return "Menampilkan halaman untuk tambah data guru";
    }

    public function edit(string $id)
    {
        return "Menampilkan halaman edit guru";
    }

    public function store(Request $request)
    {
        return "Melakukan penambahan data guru baru";
    }

    public function update(Request $request, string $id)
    {
        return "Melakukan perubahan data guru";
    }

    public function destroy(string $id)
    {
        return "Menghapus data guru";
    }
}

