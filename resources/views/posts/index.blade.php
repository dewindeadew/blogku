@extends('adminlte.master')

@section('content')
<div class="mt-3 ml-3">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Daftar Pertanyaan</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th style="width: 40px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $key => $post)
                    <tr>
                        <td> {{ $key + 1 }} </td>
                        <td> {{ $post -> title }}</td>
                        <td> {{ $post -> body }}</td>
                        <td> action </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection