@extends('template.main')
@section('title', 'Add Penduduk')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">@yield('title')</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/penduduk">Penduduk</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="text-right">
                                    <a href="/penduduk" class="btn btn-warning btn-sm"><i
                                            class="fa-solid fa-arrow-rotate-left"></i>
                                        Back
                                    </a>
                                </div>
                            </div>
                            <form class="needs-validation" novalidate action="/penduduk" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nik">NIK</label>
                                                <input type="text" name="nik"
                                                    class="form-control @error('nik') is-invalid @enderror" id="nik"
                                                    placeholder="Nomor Induk Kependudukan" value="{{ old('nik') }}"
                                                    required>
                                                @error('nik')
                                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="no_kk">No. KK</label>
                                                <input type="text" name="no_kk"
                                                    class="form-control @error('no_kk') is-invalid @enderror" id="no_kk"
                                                    placeholder="Nomor Kartu Keluarga" value="{{ old('no_kk') }}" required>
                                                @error('no_kk')
                                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="nama">Nama Lengkap</label>
                                                <input type="text" name="nama"
                                                    class="form-control @error('nama') is-invalid @enderror" id="nama"
                                                    placeholder="Nama Lengkap" value="{{ old('nama') }}" required>
                                                @error('nama')
                                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="tempat_lahir">Tempat Lahir</label>
                                                <input type="text" name="tempat_lahir"
                                                    class="form-control @error('tempat_lahir') is-invalid @enderror"
                                                    id="tempat_lahir" placeholder="Tempat Lahir"
                                                    value="{{ old('tempat_lahir') }}" required>
                                                @error('tempat_lahir')
                                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                                <input type="date" name="tanggal_lahir"
                                                    class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                                    id="tanggal_lahir" placeholder="Tanggal Lahir"
                                                    value="{{ old('tanggal_lahir') }}" required>
                                                @error('tanggal_lahir')
                                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                                <input type="text" name="jenis_kelamin"
                                                    class="form-control @error('jenis_kelamin') is-invalid @enderror"
                                                    id="jenis_kelamin" placeholder="Jenis Kelamin"
                                                    value="{{ old('jenis_kelamin') }}" required>
                                                @error('jenis_kelamin')
                                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" name="alamat"
                                                    class="form-control @error('alamat') is-invalid @enderror"
                                                    id="alamat" placeholder="Alamat Lengkap" value="{{ old('alamat') }}"
                                                    required>
                                                @error('alamat')
                                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="rt">RT</label>
                                                <select name="rt"
                                                    class="form-control @error('rt') is-invalid @enderror" id="rt"
                                                    required>
                                                    <option value="" disabled selected>Pilih RT</option>
                                                    @for ($i = 1; $i <= 8; $i++)
                                                        @php
                                                            $rtValue = str_pad($i, 2, '0', STR_PAD_LEFT);
                                                        @endphp
                                                        <option value="{{ $rtValue }}"
                                                            {{ old('rt') == $rtValue ? 'selected' : '' }}>
                                                            {{ $rtValue }}</option>
                                                    @endfor
                                                </select>
                                                @error('rt')
                                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="rw">RW</label>
                                                <select name="rw"
                                                    class="form-control @error('rw') is-invalid @enderror" id="rw"
                                                    required>
                                                    <option value="" disabled selected>Pilih RW</option>
                                                    @for ($i = 1; $i <= 8; $i++)
                                                        @php
                                                            $rwValue = str_pad($i, 2, '0', STR_PAD_LEFT);
                                                        @endphp
                                                        <option value="{{ $rwValue }}"
                                                            {{ old('rw') == $rwValue ? 'selected' : '' }}>
                                                            {{ $rwValue }}</option>
                                                    @endfor
                                                </select>
                                                @error('rw')
                                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                      <div class="col-lg-3">
                                        <div class="form-group">
                                            <label for="dusun">Dusun</label>
                                            <select name="dusun"
                                                class="form-control @error('dusun') is-invalid @enderror"
                                                id="dusun" required>
                                                <option value="" disabled selected>Pilih Dusun</option>
                                                <option value="Pamekaran"
                                                    {{ old('dusun') == 'Pamekaran' ? 'selected' : '' }}>Pamekaran</option>
                                                <option value="Cimaja"
                                                    {{ old('dusun') == 'Cimaja' ? 'selected' : '' }}>Cimaja</option>
                                                <option value="Cimanglid"
                                                    {{ old('dusun') == 'Cimanglid' ? 'selected' : '' }}>Cimanglid</option>
                                                <option value="Limusagung"
                                                    {{ old('dusun') == 'Limusagung' ? 'selected' : '' }}>Limusagung</option>
                                                <option value="Mangunjaya"
                                                    {{ old('dusun') == 'Mangunjaya' ? 'selected' : '' }}>Mangunjaya</option>
                                                <option value="Nanggeleng"
                                                    {{ old('dusun') == 'Nanggeleng' ? 'selected' : '' }}>Nanggeleng
                                                </option>
                                                <option value="Darawati"
                                                    {{ old('dusun') == 'Darawati' ? 'selected' : '' }}>Darawati
                                                </option>
                                            </select>
                                            @error('dusun')
                                                <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                        <div class="col-lg-3">
                                            <div class="form-group">
                                                <label for="agama">Agama</label>
                                                <select name="agama"
                                                    class="form-control @error('agama') is-invalid @enderror"
                                                    id="agama" required>
                                                    <option value="" disabled selected>Pilih Agama</option>
                                                    <option value="Islam"
                                                        {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                                    <option value="Kristen"
                                                        {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                                    <option value="Katolik"
                                                        {{ old('agama') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                                    <option value="Hindu"
                                                        {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                                    <option value="Buddha"
                                                        {{ old('agama') == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                                    <option value="Konghucu"
                                                        {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>Konghucu
                                                    </option>
                                                </select>
                                                @error('agama')
                                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="status_perkawinan">Status Perkawinan</label>
                                                <select name="status_perkawinan"
                                                    class="form-control @error('status_perkawinan') is-invalid @enderror"
                                                    id="status_perkawinan" required>
                                                    <option value="" disabled selected>Pilih Status Perkawinan
                                                    </option>
                                                    <option value="Belum Kawin"
                                                        {{ old('status_perkawinan') == 'Belum Kawin' ? 'selected' : '' }}>
                                                        Belum Kawin</option>
                                                    <option value="Kawin"
                                                        {{ old('status_perkawinan') == 'Kawin' ? 'selected' : '' }}>Kawin
                                                    </option>
                                                    <option value="Cerai Hidup"
                                                        {{ old('status_perkawinan') == 'Cerai Hidup' ? 'selected' : '' }}>
                                                        Cerai Hidup</option>
                                                    <option value="Cerai Mati"
                                                        {{ old('status_perkawinan') == 'Cerai Mati' ? 'selected' : '' }}>
                                                        Cerai Mati</option>
                                                </select>
                                                @error('status_perkawinan')
                                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="pendidikan">Pendidikan</label>
                                                <select name="pendidikan"
                                                    class="form-control @error('pendidikan') is-invalid @enderror"
                                                    id="pendidikan" required>
                                                    <option value="" disabled selected>Pilih Pendidikan</option>
                                                    <option value="Tidak Sekolah"
                                                        {{ old('pendidikan') == 'Tidak Sekolah' ? 'selected' : '' }}>Tidak
                                                        Sekolah</option>
                                                    <option value="SD"
                                                        {{ old('pendidikan') == 'SD' ? 'selected' : '' }}>SD</option>
                                                    <option value="SMP"
                                                        {{ old('pendidikan') == 'SMP' ? 'selected' : '' }}>SMP</option>
                                                    <option value="SMA"
                                                        {{ old('pendidikan') == 'SMA' ? 'selected' : '' }}>SMA</option>
                                                    <option value="D1"
                                                        {{ old('pendidikan') == 'D1' ? 'selected' : '' }}>D1</option>
                                                    <option value="D2"
                                                        {{ old('pendidikan') == 'D2' ? 'selected' : '' }}>D2</option>
                                                    <option value="D3"
                                                        {{ old('pendidikan') == 'D3' ? 'selected' : '' }}>D3</option>
                                                    <option value="S1"
                                                        {{ old('pendidikan') == 'S1' ? 'selected' : '' }}>S1</option>
                                                    <option value="S2"
                                                        {{ old('pendidikan') == 'S2' ? 'selected' : '' }}>S2</option>
                                                    <option value="S3"
                                                        {{ old('pendidikan') == 'S3' ? 'selected' : '' }}>S3</option>
                                                </select>
                                                @error('pendidikan')
                                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="pekerjaan">Pekerjaan</label>
                                                <input type="text" name="pekerjaan"
                                                    class="form-control @error('pekerjaan') is-invalid @enderror"
                                                    id="pekerjaan" placeholder="Pekerjaan"
                                                    value="{{ old('pekerjaan') }}" required>
                                                @error('pekerjaan')
                                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="golongan_darah">Golongan Darah</label>
                                                <select name="golongan_darah"
                                                    class="form-control @error('golongan_darah') is-invalid @enderror"
                                                    id="golongan_darah" required>
                                                    <option value="" disabled selected>Pilih Golongan Darah</option>
                                                    <option value="A"
                                                        {{ old('golongan_darah') == 'A' ? 'selected' : '' }}>A</option>
                                                    <option value="B"
                                                        {{ old('golongan_darah') == 'B' ? 'selected' : '' }}>B</option>
                                                    <option value="AB"
                                                        {{ old('golongan_darah') == 'AB' ? 'selected' : '' }}>AB</option>
                                                    <option value="O"
                                                        {{ old('golongan_darah') == 'O' ? 'selected' : '' }}>O</option>
                                                </select>
                                                @error('golongan_darah')
                                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="kewarganegaraan">Kewarganegaraan</label>
                                                <input type="text" name="kewarganegaraan"
                                                    class="form-control @error('kewarganegaraan') is-invalid @enderror"
                                                    id="kewarganegaraan" placeholder="Kewarganegaraan"
                                                    value="{{ old('kewarganegaraan') }}" required>
                                                @error('kewarganegaraan')
                                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-dark mr-1" type="reset"><i
                                            class="fa-solid fa-arrows-rotate"></i>
                                        Reset</button>
                                    <button class="btn btn-success" type="submit"><i
                                            class="fa-solid fa-floppy-disk"></i>
                                        Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.content -->
                </div>
            </div>
        </div>
    </div>

@endsection
