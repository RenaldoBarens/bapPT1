<?php 
use App\Models\matakuliah;
?>

@extends('layouts.app')

@section('title','Mata Kuliah')
    
@section('content')
    
    
    <div>
        <h1 style="text-align: center">DATA MATA KULIAH</h1>
    </div>

    <div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Kode Mata Kuliah</th>
                    <th scope="col">Nama</th>
                    <th scope="col">SKS</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    
                        @foreach ($matakuliahs as $matakuliah ) 
                             <tr>
                                 <td> {{$matakuliah->id}} </td>
                                 <td> {{$matakuliah->kode_mataKuliah}} </td>
                                 <td> {{$matakuliah->nama_mataKuliah}} </td>
                                 <td> {{$matakuliah->sks}} </td>
                             </tr>
                            
                        @endforeach
                        
                </tr>

            </tbody>
        </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection   
