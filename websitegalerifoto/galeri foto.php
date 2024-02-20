 <?php
 //menghubungkan ke database
    $koneksi = mysqli_connect("localhost","root","","galleryfotorpl2");

 //mengambil data dari database
    $hasil = mysqli_query($koneksi,"SELECT * FROM gallery user");
     //mengambil data dari database
     $hasil = mysqli_query($koneksi,"SELECT * FROM gallery album");
     //mengambil data dari database
     $hasil = mysqli_query($koneksi,"SELECT * FROM gallery foto");
     //mengambil data dari database
     $hasil = mysqli_query($koneksi,"SELECT * FROM gallery komentarfoto");
     //mengambil data dari databse
     $hasil = mysqli_query($koneksi, "SELECT * FROM gallery like foto");

?> 
<!DOCTYPE html>
<html lang="en">
<head>
<body>
   <a href="">login</a> | <a href="">logout</a>
   <H1>HALAMAN gallery</H1>
   <a href="">tambah data </a>
   <table border=1
   <thead>
    <body>
    <tr>
        <th><h1>gallery user</h1></th>
        <th>UserID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Nama Lengkap</th>
        <th>Alamat</th>
    </tr>
    <tr>
        <th><h1>gallery album</h1></th>
        <th>AlbumID</th>
        <th>Nanma Album</th>
        <th>Deskripsi</th>
        <th>Tanggal Dibuat</th>
        <th>User ID</th>
    </tr>
    <tr>
        <th><h1>gallery foto</h1></th>
        <th>FotoID</th>
        <th>Judul Foto</th>
        <th>Deskripsi Foto</th>
        <th>Tanggal Unggah</th>
        <th>AlbumID</th>
        <th>UserID</th>
    </tr>
    <tr>
        <th><h1>komentarfoto</h1></th>
        <th>komentar ID</th>
        <th>foto ID</th>
        <th>user ID</th>
        <th>isi komentar</th>
        <th>tanggal komentar</th>
    </tr>
    <tr>
        <th><h1>likefoto</h1></th>
        <th>like ID</th>
        <th>foto ID</th>
        <th>User ID</th>
        <th>tanggal like</th>
    </tr>
</thead>
</body>
</head>
<body>
    <h1> HALAMAN ADMIN</h1>
    <a href="">tambah data</a>
    <table border="1">
    <thead>
        
        </tbody>
        </thead> 
</table>
</body>
</html>