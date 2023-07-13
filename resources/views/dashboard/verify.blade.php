<!-- Begin Page Content -->
@extends('dashboard.layouts.main')

@section('container')
    <div class="alert alert-primary" role="alert">
    <strong>Sebelum melanjutkan, silahkan verifikasi email kamu ya!</strong>
    <p>Email terdaftar : {{ Auth()->user()->email }}</p>
    <p>Belum menerima email? <a href=""><strong>Kirim ulang</strong></a></p>
    </div>
@endsection
<!-- /.container-fluid -->