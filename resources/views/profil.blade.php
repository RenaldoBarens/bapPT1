@extends('layouts.app2')
@section('br1','Selamat Datang')
@section('br2','Selamat Datang')

@section('title','Profil')
    
@section('content')
    
    
    <div>
        <h1 style="text-align: center">BIODATA</h1>
        <p>Nama : Renaldo Barens</p>
        <p>NIM : 03081190017</p>
        <p>Intake : 2019</p>
        <p>Prodi : Sistem Informasi</p>
        <p>Kaprodi: Okky Barus</p>
        <p>Mata Kuliah : </p>
    </div>

    <div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Senin</th>
                    <th scope="col">Selasa</th>
                    <th scope="col">Rabu</th>
                    <th scope="col">Kamis</th>
                    <th scope="col">Jumat</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <th scope="row">Mata Kuliah Pagi</th>
                    <td>-</td>
                    <td>Agama Dunia<br>Jam 09.00-12.30 AM</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                <tr>
                    <th scope="row">Mata Kuliah Malam</th>
                    <td>-</td>
                    <td>Pemrograman Aplikasi Bisnis <br> Jam 17.30-21.00 PM</td>
                    <td>Manajemen Strategis Perusahaan <br> Jam 17.30-20.10 PM</td>
                    <td>-</td>
                    <td>Pemasaran Digital <br> Jam 17.30-20.10 PM</td>
                </tr>
            </tbody>
        </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection   
