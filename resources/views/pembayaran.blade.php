<?php 
use App\Models\Pembayaran;
?>

@extends('layouts.app2')
@section('br1','Selamat Datang')
@section('br2','Selamat Datang')

@section('title','Pembayaran')
    
@section('content')
    
    
    <div>
        <h1 style="text-align: center">DATA PEMBAYARAN</h1>
    </div>

    <div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">StudentID</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Payment Date</th>
                    <th scope="col">Payment Method</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    
                        @foreach ($pembayarans as $pembayaran ) 
                             <tr>
                                 <td> {{$pembayaran->id}} </td>
                                 <td> {{$pembayaran->studentID}} </td>
                                 <td> {{$pembayaran->Amount}} </td>
                                 <td> {{$pembayaran->Payment_date}} </td>
                                 <td> {{$pembayaran->Payment_method}} </td>
                             </tr>
                            
                        @endforeach
                        
                </tr>

            </tbody>
        </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection   
