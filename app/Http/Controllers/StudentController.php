<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class StudentController extends Controller
{
    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Siswa';
        $students = [
            [
                'id' => 1,
                'nis' => '2024001',
                'name' => 'Budi Ariyanto',
                'class' => 'XII AKL 1',
                'major' => 'RPL',
            ],
            [
                'id' => 2,
                'nis' => '2024002',
                'name' => 'Juan',
                'class' => 'XI AKL 2',
                'major' => 'AKL',
            ],
        ];
        

        return view('students.index', [
            'title' => $title,
            'students' => $students,
        ]);
    }
    public function show(string $id)
    {
        $title = 'Sistem Sekolah - Detail Siswa';
        return view('students.show', [
            'title'=> $title
        ]);
    }
    public function create()
    {
        $title = 'Sistem Sekolah - Tambah Siswa';

        return view('students.create', [
            'title' => $title,
        ]);
    }
    public function edit(string $id)
    {
        $title = 'Sistem Sekolah - Edit Siswa';

        return view('students.edit', [
            'title' => $title,
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