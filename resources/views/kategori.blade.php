@extends('Master.app')
<!DOCTYPE html>
<html>
<head>
	<title>Kategori</title>
</head>
<body>

	@section('konten')
		
		<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
					<!--<form action="{{ url()->current() }}" method="get" class="sidebar-form">-->
					<form action="{{route('post.cari')}}" method="get" class="sidebar-form">
      		<div class="input-group">
        		<input type="text" name="q" class="form-control" placeholder="Search...">
          		<span class="input-group-btn">
           			<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
							</span>
  	  		</div>
					
  				</form>

          <div class="box-header with-border">
            <h3 class="box-title">Bordered Table</h3>
          </div>

            <div class="box-body">
              <table class="table table-bordered">
				        <tr>
									<th>id</th>
									<th>Nama Kategori</th>
									<th>Slug</th>
									<th>Tanggal</th>
									<th>Action</th>
								</tr>
				
								@foreach($var_kategori as $kategori)
        				<tr>
									<td>{{$kategori->id}}</td>
									<td>{{$kategori->nama_kategori}}</td>
									<td>{{$kategori->slug}}</td>
									<td>{{$kategori->tanggal}}</td>
									<td>
										<button type="submit" class="btn btn-default btn-info" >
											<a href="Edit" style="color: white">Edit</a>
										</button> |
										<button type="submit" class="btn btn-default btn-danger"style="color: white"><a href="hapuskategori/{{$kategori->id}}">Hapus</a>										</button>
									</td>
								</tr>
								@endforeach
								
							</table>
          	</div>			

					<div class="box-footer clearfix">
						<button type="submit" class="btn btn-default"><a href="{{route('post.insert')}}">Create New Data</button>
						
            <ul class="pagination pagination-sm no-margin pull-right">
              <li><a href="#">&laquo;</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>
	        </div>
				</div>
			</div>
		</div>
	@endsection

</body>
</html>



