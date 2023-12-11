<!-- resources/views/siswa/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Daftar Siswa</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($siswas as $siswa)
                    <tr>
                        <td>{{ $siswa->nis }}</td>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->jenis_kelamin }}</td>
                        <td>{{ $siswa->alamat }}</td>
                        <td>{{ $siswa->tanggal_lahir }}</td>
                        <td>
                            <a href="{{ route('siswa.edit', $siswa->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('siswa.destroy', $siswa->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
