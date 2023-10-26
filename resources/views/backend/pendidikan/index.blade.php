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
                        Pendidikan
                    </header>
                    {{-- @if ($errors->any())
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
                    </div> --}}
                    <div class="panel-body">
                        @if($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{$message}}</p>
                        </div>
                        @endif
                        <a href="{{route('pendidikan.create')}}"><button class="btn btn-primary" type="button"><i class="bi bi-plus"> Tambah</i></button></a>
                        <br>
                        <br>
                        <table class="table table-striped table-advance table-hover">
                            <tbody>
                                <tr>
                                    <th class="bi bi-book">Nama</th>
                                    <th class="bi bi-book">Tingkatan</th>
                                    <th class="bi bi-book">Tahun Masuk</th>
                                    <th class="bi bi-book">Tahun Selesai</th>
                                    <th class="bi bi-book">Action</th>
                                </tr>
                                @foreach($pendidikan as $item)
                                <tr>
                                    <td>{{$item->nama}}</td>
                                    <td>
                                        @if($item->tingkatan == 1)
                                        TK
                                        @elseif($item->tingkatan == 2)
                                        SD
                                        @elseif($item->tingkatan == 3)
                                        SMP
                                        @elseif($item->tingkatan == 4)
                                        SMA/SMK
                                        @elseif($item->tingkatan == 5)
                                        D3
                                        @elseif($item->tingkatan == 6)
                                        D4/S1
                                        @elseif($item->tingkatan == 7)
                                        S2
                                        @elseif($item->tingkatan == 8)
                                        S3
                                        @endif
                                    </td>
                                    <td>{{$item->tahun_masuk}}</td>
                                    <td>{{$item->tahun_keluar}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <form action="{{route('pendidikan.destroy', $item->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('pendidikan.edit', $item->id)}}" class="btn btn-warning">
                                                    <i class="bi bi-book"></i>
                                                </a>
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="bi bi-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>



<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@endsection