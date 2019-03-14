@extends('Master.app')

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="admin/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="admin/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="admin/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="admin/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css">
  <script src="admin/main.js"></script>
</head>

<body>
    @section('konten')
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Data</h3>
            </div>
            
            <form class="form-horizontal">
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputId3" class="col-sm-2 control-label">Id</label>
                    

                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputId" placeholder="Id">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputNamaKategori" class="col-sm-2 control-label">Nama Kategori</label>

                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNamaKategori" placeholder="Nama Kategori">
                        </div>
                </div>

                <div class="form-group">
                    <label for="inputSlug" class="col-sm-2 control-label">Slug</label>

                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSlug" placeholder="Slug">
                        </div>
                </div>

                <div class="form-group">
                    <label for="inputTanggal" class="col-sm-2 control-label">Tanggal</label>

                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputTanggal" placeholder="Tanggal">
                        </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-default">
                        <a href="kategori">Cancel
                    </button>
                    <button type="submit" class="btn btn-info btn-default pull-right" style="color: white">Edit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
</body>
</html>