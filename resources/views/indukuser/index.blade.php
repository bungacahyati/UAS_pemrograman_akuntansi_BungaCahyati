@extends('layout.main')
@section('content')

<h1>Induk User</h1>
<div class="card">
<div class="card-header">
<a href="{{ asset('indukuser/tambah')  }}">Tambah Data</a>
<table class="table table-sm table-stripped table-bordered">
    <thead>
 <tr style="background:black;color:white">
 <td>No</td>
    <td>Id User</td>
    <td>Username</td>
    <td>Tanggal Lahir</td>
    <td>Nama Lengkap</td>
    <td>Email</td>
   
    <td>Aksi</td>
 </tr> 
 </thead>

    <tbody>  
<?php 
$no=0;
foreach ($indukuser as $rows){
$no++;
?>
<tr>
<td>{{ $no }}</td>
    <td>{{ $rows->id_user }}</td>
    <td>{{ $rows->username }}</td>
    <td>{{ $rows->tanggal_lahir }}</td>
   
    <td>{{ $rows->nama_lengkap }}</td>
    <td>{{ $rows->email }}</td>
    
    <td>
        <a href="{{ asset('indukuser/edit/'.$rows->id ) }}">Edit</a>
        <a href="{{ asset('indukuser/delete/'.$rows->id ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
 </tbody>
</table>
</div>
</div>
@endsection