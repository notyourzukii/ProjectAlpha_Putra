<!-- resources/views/siswa/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Siswa</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('siswa.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" class="form-control" id="nis" name="nis" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="laki" name="jenis_kelamin" value="Laki-laki" checked>
                    <label class="form-check-label" for="laki">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="perempuan" name="jenis_kelamin" value="Perempuan">
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>
            <button type="submit" id="submitButton" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <script>
            document.getElementById('submitButton').addEventListener('click', function() {
            var confirmation = confirm("Apakah Anda yakin ingin menambahkan data siswa?");
            if (confirmation) {
            // If the user clicks "OK" in the confirm dialog, submit the form
                document.getElementById('createForm').submit();
            } else {
                event.preventDefault();
            }
    });
    </script>
@endsection
