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

<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
      <section class="panel">
        <header class="panel-heading">
          {{ isset($admin_lecturer) ? 'Mengubah' : 'Menambahkan' }} Pengalaman Kerja
        </header>
        @if ($errors->any())
        <div class="alert alert-danger">
          <strong>Whoops!</strong> There were some problems with your input.<br><br>
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <div class="panel-body">
          <div class="form">
            <form class="form-validate form-horizontal" id="pengalaman_kerja_form" method="POST" action="{{ route('pengalamankerja.store') }}">
              {!! csrf_field() !!}
              <div class="form-group">
                <label for="cname" class="control-label col-lg-2">Nama Perusahaan <span class="required">*</span></label>
                <div class="col-lg-10">
                  <input class="form-control" id="nama" name="nama" minlength="5" type="text" required />
                </div>
              </div>
              <div class="form-group">
                <label for="cname" class="control-label col-lg-2">Jabatan <span class="required">*</span></label>
                <div class="col-lg-10">
                  <input class="form-control" id="jabatan" name="jabatan" minlength="2" type="text" required />
                </div>
              </div>
              <div class="form-group">
                <label for="curl" class="control-label col-lg-2">Tahun Masuk <span class="required">*</span></label>
                <div class="col-lg-10">
                  <input id="tahun_masuk" maxlength="4" type="number" min="1900" max="2099" step="1" name="tahun_masuk" class="form-control" required>
                </div>
              </div>
              <div class="form-group">
                <label for="curl" class="control-label col-lg-2">Tahun Selesai <span class="required">*</span></label>
                <div class="col-lg-10">
                  <input id="tahun_keluar" maxlength="4" type="number" min="1900" max="2099" step="1" name="tahun_keluar" class="form-control" required>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                  <button class="btn btn-primary" type="submit">Save</button>
                  <a href="{{route('pengalamankerja.index')}}">
                    <button class="btn btn-default" type="button">Cancel</button>
                  </a>
                </div>
              </div>
            </form>

          </div>
          </div>
          </section>
          </div>
        </div>
    </section>
</section>



<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection