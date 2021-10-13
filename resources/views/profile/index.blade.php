@extends('layouts.master')
@section('judul')
Halaman Index
@endsection

@section('content')
<a class="btn btn-primary btn-lg" href="{{ route('album') }}">Go To Album</a>
@endsection