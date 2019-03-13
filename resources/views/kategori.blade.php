@extends('Master.app')
<!DOCTYPE html>
<html>
<head>
	<title>Kategori</title>
</head>
<body>

	@section('konten')
	<br><br><br><br><br><br>
	<table align="center" border= "2px" style="border-color: lightgreen; color: brown">
		<thead>
			<tr>
				<th>id</th>
				<th>Nama Kategori</th>
				<th>Slug</th>
				<th>Tanggal</th>
				<th>Created at</th>
				<th>Updated at</th>
			</tr>
		</thead>
		<tbody>
			
			@foreach($var_kategori as $kategori)
			<tr>

				<td>{{$kategori->id}}</td>
				<td>{{$kategori->nama_kategori}}</td>
				<td>{{$kategori->slug}}</td>
				<td>{{$kategori->tanggal}}</td>
				<td>{{$kategori->created_at}}</td>
				<td>{{$kategori->updated_at}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection
</body>
</html>



