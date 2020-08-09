@extends('adminlte.master')
@section('content')
<h2> ini halaman create </h2>
@endsection

@push('scripts')
<script>
var wrappers = document.getElementsByClassName("wrapper")
var items = ["ini","contoh"];
console.log("ini items: ", items)
@endpush