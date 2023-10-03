<?php 
use App\Models\mahasiswa;
?>

@extends('layouts.app')

@section('title','Mahasiswa')
    
@section('content')
    
    
    <div>
        <h1 style="text-align: center">DATA MAHASISWA</h1>
    </div>

    <div>
        <table class="table table-bordered">
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
                    <?php 
                        $mahasiswas = mahasiswa::all();
                        foreach ($mahasiswas as $mahasiswa ) {
                            echo '<tr>';
                                echo '<td>';
                                echo $mahasiswa->id;
                                echo '</td>';
                                echo '<td>';
                                echo $mahasiswa->studentID;
                                echo '</td>';
                                echo '<td>';
                                echo $mahasiswa->nama;
                                echo '</td>';
                                echo '<td>';
                                echo $mahasiswa->jurusan;
                                echo '</td>';
                                echo '<td>';
                                echo $mahasiswa->tahunMasuk;
                                echo '</td>';
                            echo '</tr>';
                            # code...
                        }
                        
                    ?>
                    <th scope="row">Mata Kuliah Pagi</th>
                    <td>-</td>
                    <td>Agama Dunia<br>Jam 09.00-12.30 AM</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                <tr>
                    <th scope="row">Mata Kuliah Malam</th>
                    <td>-</td>
                    <td>Pemrograman Aplikasi Bisnis <br> Jam 17.30-21.00 PM</td>
                    <td>Manajemen Strategis Perusahaan <br> Jam 17.30-20.10 PM</td>
                    <td>Pemasaran Digital <br> Jam 17.30-20.10 PM</td>
                </tr>
            </tbody>
        </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection   
