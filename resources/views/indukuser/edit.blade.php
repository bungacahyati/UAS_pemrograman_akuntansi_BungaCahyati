<h1>Tambah Data Transaksi</h1>
<form action="{{ asset('indukuser/edit_proses') }}" method="POST">

<input type="hidden" name="id" value="<?php echo $indukuser->id ?>">
ID User <input type="text" name="id_user" value="<?php echo $indukuser->id_user ?>"><br>
Username<input type="text" name="username" value="<?php echo $indukuser->username ?>"><br>
Tanggal Lahir <input type="date" name="tanggal_lahir" value="<?php echo $indukuser->tanggal_lahir ?>"><br>
Nama Lengkap <input type="text" name="nama_lengkap" value="<?php echo $indukuser->nama_lengkap ?>"><br>
Email  <input type="text" name="email" value="<?php echo $indukuser->email ?>"><br>
<input type="submit" value="Simpan">
</form>     

