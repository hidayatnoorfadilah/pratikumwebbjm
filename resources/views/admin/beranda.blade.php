@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
    <h2>Dashboard Admin</h2>
    <p>Selamat datang di Aplikasi Inventaris</p>

    <hr>

    <div>
        <h4>Menu Cepat</h4>
        <ul>
            <li><a href="/admin/barang">Kelola Data Barang</a></li>
            <li><a href="/laporan">Lihat Laporan</a></li>
        </ul>
    </div>
@endsection
