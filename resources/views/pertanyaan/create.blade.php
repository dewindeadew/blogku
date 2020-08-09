@extends('adminlte.master')
@section('content')
<div class="ml-3 mt-4">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Pertanyaan</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/pertanyaan" method="POST">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', '')}}" placeholder="Masukan Judul Pertanyaan" required>
                    @error('judul')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control" id="isi" name="isi" value="{{ old('body', '')}}" placeholder="Masukan Isi Pertanyaan" required>
                    @error('isi')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Ajukan Pertanyaan</button>
                </div>
        </form>
    </div>
</div>
@endsection