<?php 
use App\Models\ProgramStudi;
?>

@extends('layouts.app2')
@section('br1','Selamat Datang')
@section('br2','Selamat Datang')

@section('title','Program Studi')
    
@section('content')
    
    
    <div>
        <h1 style="text-align: center">DATA PROGRAM STUDI</h1>
    </div>

    <div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Deskripsi</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    
                        @foreach ($programstudis as $programstudi ) 
                             <tr>
                                 <td> {{$programstudi->id}} </td>
                                 <td> {{$programstudi->Nama}} </td>
                                 <td> {{$programstudi->Deskripsi}} </td>
                             </tr>
                            
                        @endforeach
                        
                </tr>

            </tbody>
        </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection   
