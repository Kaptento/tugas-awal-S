<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class StudentController extends Controller
{
    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Siswa';
        $stundents = [
            [
                'id' => 1,
                'nis' => '1001',
                'name' => 'Jarwo',
                'class' => 'XII TKJ 2',
                'major' => 'TKJ'
            ],
            [
                'id' => 2,
                'nis' => '1002',
                'name' => 'Adit',
                'class' => 'XII TKJ 1',
                'major' => 'TKJ'
            ],
        ];
        return view('students.index', [
            'title' => $title,
            'students' => $stundents,
 
        ]);
    }
    public function show(string $id)
    {
        $title = 'Sistem Sekolah - Info Siswa';
        return view('students.show', [
            'title'=> $title
        ]);
    }
    public function create()
    {
        $title = 'Sistem Sekolah - Menambah Siswa';
        return view ('students.create', [
            'title'=> $title
        ]);
    }
    public function edit(string $id)
    {
        $title = 'Sistem Sekolah - mengubah data Siswa';
        return view ('students.edit', [
            'title'=> $title
        ]);
    }
    public function store()
    {
        return "Menampilkan halaman penambahan data siswa";
    }
    public function update(string $id)
    {
        return "Melakukan perubahan data siswa";
    }
    public function delete(string $id)
    {
        return "menghapus data siswa";
    }
}   