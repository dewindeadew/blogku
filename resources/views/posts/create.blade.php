@extends('adminlte.master')
@section('content')
<div class="ml-3 mt-4">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Create New Post</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/posts" method="POST">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <input type="text" class="form-control" id="body" name="body" placeholder="Body">
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
        </form>
    </div>
</div>
@endsection