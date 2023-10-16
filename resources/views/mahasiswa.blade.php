<?php 
use App\Models\mahasiswa;
?>

@extends('layouts.app2')
@section('br1','Selamat Datang')
@section('br2','Selamat Datang')

@section('title','Mahasiswa')

@section('content')
    
    
    <div>
        <h1 style="text-align: center">DATA MAHASISWA</h1>
    </div>

    <div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">StudentID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Tahun Masuk</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    
                        @foreach ($mahasiswas as $mahasiswa ) 
                             <tr>
                                 <td> {{$mahasiswa->id}} </td>
                                 <td> {{$mahasiswa->studentID}} </td>
                                 <td> {{$mahasiswa->nama}} </td>
                                 <td> {{$mahasiswa->jurusan}} </td>
                                 <td> {{$mahasiswa->tahunMasuk}} </td>
                             </tr>
                            
                        @endforeach
                        
                </tr>

            </tbody>
        </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection   
