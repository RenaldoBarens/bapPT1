<?php 
use App\Models\JadwalKuliah;
?>

@extends('layouts.app2')
@section('br1','Selamat Datang')
@section('br2','Selamat Datang')

@section('title','Jadwal Kuliah')
    
@section('content')
    
    
    <div>
        <h1 style="text-align: center">DATA JADWAL PERKULIAHAN</h1>
    </div>

    <div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Kode Mata Kuliah</th>
                    <th scope="col">Kode Term</th>
                    <th scope="col">Kode Dosen</th>
                    <th scope="col">Day</th>
                    <th scope="col">Jam Mulai</th>
                    <th scope="col">Jam Selesai</th>
                    <th scope="col">Ruangan</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    
                        @foreach ($jadwalkuliahs as $jadwalkuliah ) 
                             <tr>
                                 <td> {{$jadwalkuliah->id}} </td>
                                 <td> {{$jadwalkuliah->Kode_matakuliah}} </td>
                                 <td> {{$jadwalkuliah->Kode_term}} </td>
                                 <td> {{$jadwalkuliah->Kode_dosen}} </td>
                                 <td> {{$jadwalkuliah->day}} </td>
                                 <td> {{$jadwalkuliah->Jam_mulai}} </td>
                                 <td> {{$jadwalkuliah->Jam_selesai}} </td>
                                 <td> {{$jadwalkuliah->ruangan}} </td>

                             </tr>
                            
                        @endforeach
                        
                </tr>

            </tbody>
        </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection   
