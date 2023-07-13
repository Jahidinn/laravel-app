<!-- Begin Page Content -->
@extends('dashboard.layouts.main')

@section('container')
    @if (session()->has('message'))    
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('message') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <div class="alert alert-info" role="alert">
        <h4 class="alert-heading">Verifikasi email!</h4>
        <p>Aaun kamu sudah dibuat, sebelum melanjutkan verifikasi dulu email kamu ya! cek email!</p>
        <p>Email terdaftar : <strong>{{ Auth()->user()->email }}</strong></p>
        <hr>
        <form action="/email/verification-notification" method="post">
            @csrf
            <p>Belum menerima email? <button class="badge badge-success border-0" type="submit" href="/email/verification-notification"><strong>Kirim ulang</strong></button></p>
        </form>
    </div>

@endsection
<!-- /.container-fluid -->