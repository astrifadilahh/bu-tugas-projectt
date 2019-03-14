<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>
 
	<a href="/Create"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/home/store" method="post">
		{{ csrf_field() }}
		Id <input type="text" name="inputid" required="required"> <br/>
		Nama Kategori <input type="text" name="inputkategori" required="required"> <br/>
		Slug <input type="number" name="inputslug" required="required"> <br/>
		Tanggal <input type="number" name="inputtgl" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>