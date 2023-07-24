@extends('layouts/main')

@section('container')
  <h1>Halaman About</h1>
  <h3>Nama saya adalah {{ $name }} dan alamat email saya adalah {{ $email }}</h3>
@endsection