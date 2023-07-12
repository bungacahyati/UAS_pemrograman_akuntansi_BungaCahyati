@extends('layout.main')
@section('content')

<h1>Induk User</h1>
<div class="card">
<div class="card-header">

<h1>Tambah Data Induk User</h1>
<form action="{{ asset('indukuser/tambah_proses') }}" method="POST">
@csrf
ID User <input type="text" name="id_user"><br>
Username  <input type="text" name="username"><br>
Tanggal Lahir <input type="date" name="tanggal_lahir"><br>
Nama Lengkap <input type="text" name="nama_lengkap"><br>
Email <input type="text" name="email"><br>
<input type="submit" value="Simpan">
</form>   

</div>
</div>
@endsection