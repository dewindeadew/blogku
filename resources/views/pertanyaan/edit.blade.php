@extends('adminlte.master')
@section('content')
<div class="ml-3 mt-4">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Edit Pertanyaan {{$post->id}}</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/pertanyaan/{{$post->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="box-body">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $post-> judul)}}" placeholder="Masukan Judul Pertanyaan">
                </div>
                <div class="form-group">
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control" id="isi" name="isi" value="{{ old('isi', $post-> isi)}}" placeholder="Masukan Isi Pertanyaan">
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
        </form>
    </div>
</div>
@endsection