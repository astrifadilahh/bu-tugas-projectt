@extends('Master.app')
<!DOCTYPE html>
<html>
<head>
	<title>Kategori</title>
</head>
<body>

	@section('konten')

	    <!-- Main content -->
		<section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Bordered Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
				  
                <tr>
					<th>id</th>
					<th>Nama Kategori</th>
					<th>Slug</th>
					<th>Tanggal</th>
				</tr>
				
				@foreach($var_kategori as $kategori)
                <tr>
				
                  <td>{{$kategori->nama_kategori}}</td>
				</tr>
				@endforeach
                
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->

	<!--<br><br><br><br><br><br>
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
			@endforeach-->
		</tbody>
	</table>
@endsection
</body>
</html>



