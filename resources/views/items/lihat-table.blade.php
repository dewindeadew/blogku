@extends('adminlte.master')

@section('content')
<h1>Soal nomor 2</h1>
@include ('items.data-tables')
@endsection
@push('scripts2')
<script src="{{asset('/adminlte/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endpush

