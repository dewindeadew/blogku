@extends('adminlte.master')

@section('content')
<div class="mt-3 ml-3">
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Daftar Pertanyaan</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            @if(session('success'))
            <div class="alert alert-success">
                {{session ('success')}}
            </div>
            @endif
            <a class="btn btn-primary mb-2" href="/pertanyaan/create"> Create New Post </a>
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
                    @forelse($pertanyaan as $key => $post)
                    <tr>
                        <td> {{ $key + 1 }} </td>
                        <td> {{ $post-> judul }}</td>
                        <td> {{ $post -> isi }}</td>
                        <td style="display: flex;">
                            <a href="/pertanyaan/{{$post->id}}" class="btn btn-info btn-sm">Show<a>
                                    <a href="/pertanyaan/{{$post->id}}/edit" class="btn btn-default btn-sm">Edit<a>
                                            <form action="/pertanyaan/{{$post->id}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="delete" class="btn btn-danger btn-sm">
                                            </form>
                        </td>
                    </tr> @empty <tr>
                        <td colspan="4" align="center"> No Post </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection