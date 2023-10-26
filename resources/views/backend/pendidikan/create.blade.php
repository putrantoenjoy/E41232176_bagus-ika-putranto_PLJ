@extends('backend.layout.master')
@section('content')
<div class="pagetitle">
    <h1>Pendidikan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Pendidikan</li>
      </ol>
    </nav>
</div>

<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        {{isset($admin_lecturer) ? 'Mengubah' : 'Menambahkan'}}Pendidikan
                    </header>
                    <div class="panel-body">
                        <div class="form">
                            <form class="form-validate form-horizontal" id="pendidikan_form" method="POST" action="{{ isset($pendidikan) ? route('pendidikan.update', $pendidikan->id) : route('pendidikan.store') }}">
                            {!! csrf_field() !!}
                            {!! isset($pendidikan) ? method_field('PUT') : '' !!}
                            <div class="form-group">
                                <label for="cname" class="control-label col-lg-2">Nama Sekolah <span class="required">*</span></label>
                                <div class="col-lg-10">
                                <input class="form-control {{ $errors->has('nama') ? ' is-invalid' : ''}}" id="nama" name="nama" minlength="5" value="{{ isset($pendidikan) ? $pendidikan->nama : old('nama')}}" type="text" />
                                @if ($errors->has('nama'))
                                <span class="text-danger small">
                                    <p>
                                        {{ $errors->first('nama') }}
                                    </p>
                                </span>
                                @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cemail" class="control-label col-lg-2">Tingkatan <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <select class="form-control m-bot15 {{ $errors->has('tingkatan') ? ' is-invalid' : ''}}" name="tingkatan" id="tingkatan">
                                        <option value="1" {{ (isset($pendidikan) && $pendidikan->tingkatan == 1) ? 'selected' : old('tingkatan') }}>TK</option>
                                        <option value="2" {{ (isset($pendidikan) && $pendidikan->tingkatan == 2) ? 'selected' : old('tingkatan') }}>SD</option>
                                        <option value="3" {{ (isset($pendidikan) && $pendidikan->tingkatan == 3) ? 'selected' : old('tingkatan') }}>SMP</option>
                                        <option value="4" {{ (isset($pendidikan) && $pendidikan->tingkatan == 4) ? 'selected' : old('tingkatan') }}>SMA/SMK</option>
                                        <option value="5" {{ (isset($pendidikan) && $pendidikan->tingkatan == 5) ? 'selected' : old('tingkatan') }}>D3</option>
                                        <option value="6" {{ (isset($pendidikan) && $pendidikan->tingkatan == 6) ? 'selected' : old('tingkatan') }}>D4/S1</option>
                                        <option value="7" {{ (isset($pendidikan) && $pendidikan->tingkatan == 7) ? 'selected' : old('tingkatan') }}>S2</option>
                                        <option value="8" {{ (isset($pendidikan) && $pendidikan->tingkatan == 8) ? 'selected' : old('tingkatan') }}>S3</option>
                                    </select>@if ($errors->has('tingkatan'))
                                    <span class="text-danger small">
                                        <p>
                                            {{ $errors->first('tingkatan') }}
                                        </p>
                                    </span>
                                    @endif

                                {{-- <input class="form-control" id="jabatan" name="jabatan" minlength="2" type="text" required /> --}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="curl" class="control-label col-lg-2">Tahun Masuk <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input id="tahun_masuk" type="number" name="tahun_masuk" value="{{ isset($pendidikan) ? $pendidikan->tahun_masuk : old('tahun_masuk') }}" class="form-control {{ $errors->has('tahun_masuk') ? ' is-invalid' : ''}}">
                                    @if ($errors->has('tahun_masuk'))
                                    <span class="text-danger small">
                                        <p>
                                            {{ $errors->first('tahun_masuk') }}
                                        </p>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="curl" class="control-label col-lg-2">Tahun Selesai <span class="required">*</span></label>
                                <div class="col-lg-10">
                                    <input id="tahun_keluar" type="number" name="tahun_keluar" value="{{ isset($pendidikan) ? $pendidikan->tahun_keluar : old('tahun_keluar') }}" class="form-control {{ $errors->has('tahun_keluar') ? ' is-invalid' : ''}}">
                                    @if ($errors->has('tahun_keluar'))
                                    <span class="text-danger small">
                                        <p>
                                            {{ $errors->first('tahun_keluar') }}
                                        </p>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a href="{{route('pendidikan.index')}}">
                                        <button class="btn btn-default" type="button">Cancel</button>
                                    </a>
                                    <a href="http://127.0.0.1:8000/session/createasdasds">
                                        <button class="btn btn-success" type="button">404</button>
                                    </a>
                                    <a href="{{route('server.error')}}">
                                        <button class="btn btn-success" type="button">500</button>
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