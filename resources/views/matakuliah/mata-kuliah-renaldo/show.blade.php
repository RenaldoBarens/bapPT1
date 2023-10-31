@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">MataKuliahRenaldo {{ $matakuliahrenaldo->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/matakuliah/mata-kuliah-renaldo') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/matakuliah/mata-kuliah-renaldo/' . $matakuliahrenaldo->id . '/edit') }}" title="Edit MataKuliahRenaldo"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('matakuliah/matakuliahrenaldo' . '/' . $matakuliahrenaldo->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete MataKuliahRenaldo" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $matakuliahrenaldo->id }}</td>
                                    </tr>
                                    <tr><th> Kode MataKuliah </th><td> {{ $matakuliahrenaldo->kode_mataKuliah }} </td></tr><tr><th> Nama MataKuliah </th><td> {{ $matakuliahrenaldo->nama_mataKuliah }} </td></tr><tr><th> Sks </th><td> {{ $matakuliahrenaldo->sks }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
