{{-- <!DOCTYPE html>
<html lang="en">

<head>
  @include('backend.layout.top')
</head>

<body>
@include('backend.layout.header')
@include('backend.layout.sidebar')
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('backend.layout.bottom')

</body>

</html> --}}

@extends('backend.layout.master')
@section('content')
<div class="pagetitle">
    <h1>Pengalaman Kerja</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Pengalaman Kerja</li>
      </ol>
    </nav>
</div>
﻿

<section id="main-content">
    <section class="wrapper">
        {{-- <div class="row">
            <div class="col-lg-12">
                    <h3 class="page-header"><i class="icon_document_alt"></i> Riwayat Hidup</h3> <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="">Home</a></li> <li><i class="icon_document_alt"></i>Riwayat Hidup</li>
                    <li><i class="fa fa-files-o"></i>Riwayat Hidup</li>
                </ol>
            </div>
        </div> --}}
        <!-- Form validations -->
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">Pengalaman Kerja</header>
                    <div class="panel-body">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                        <a href="{{ route('pengalamankerja.create') }}"> <button class="btn btn-primary" type="button"><i class="fa fa-plus"> Tambah</i></button></a>
                    </div>
                </section>
                <table class="table table-striped table-advance table-hover"> <tbody>
                    <tr>
                        <th><i class="icon_bag"></i> Nama</th>
                        <th><i class="icon_document"></i> Jabatan</th>
                        <th><i class="icon_calendar"></i> Tahun Masuk</th>
                        <th><i class="icon_calendar"></i> Tahun Selesai</th>
                        <th><i class="icon_cogs"></i> Action</th>
                        </tr>
                    @foreach ($pengalaman_kerja as $item)
                    <tr>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->jabatan}}</td>
                        <td>{{$item->tahun_masuk}}</td>
                        <td>{{$item->tahun_keluar}}</td>
                        <td>
                            <div class="btn-group">
                                <a class="btn btn-warning" href="{{ route('pengalamankerja.edit', $item->id)}}"><i class="bi bi-pen"></i></a>
                                <form action="{{route('pengalamankerja.destroy', $item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                <i class="bi bi-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</section>



<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection