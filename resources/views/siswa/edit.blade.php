<!-- resources/views/siswa/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Siswa</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $siswa->nama }}" required>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="laki" name="jenis_kelamin" value="Laki-laki" {{ $siswa->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }}>
                    <label class="form-check-label" for="laki">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="perempuan" name="jenis_kelamin" value="Perempuan" {{ $siswa->jenis_kelamin == 'Perempuan
