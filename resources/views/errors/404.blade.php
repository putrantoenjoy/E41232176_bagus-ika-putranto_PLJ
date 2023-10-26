{{-- {{-- @extends('errors::minimal') --}}

{{-- @section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Halaman tidak ditemukan'))
<div>
    <a href="">kembali ke dashboard</a>
</div> --}} 

@extends('errors::minimal')

{{-- @extends('backend.layout.master') --}}
@section('code', '404')
@section('message', __('Halaman tidak ditemukan'))
{{-- @section('content') --}}
{{-- @endsection --}}