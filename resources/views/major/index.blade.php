<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice CRUD UNPASIM</title>
</head>
<body>

@include('template.head')
@include('template.navbar')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> {{$majores['major']}}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<section class="content">
      <div class="container-fluid">
      <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
      <a href="/add-major">Add Data Major</a>
          <i class="fa fa-plus"></i>
      </button>
      @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
      <br><br>

      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>No</th>
            <th>Kd jurusan</th>
            <th>Nama jurusan</th>
            <th>Opsi</th>
        </tr>
        <tbody>
        @foreach($majores as $major)
        <tr>
            <td>{{ $major->no }}</td>
            <td>{{ $major->cd_major }}</td>
            <td>{{ $major->nm_major }}</td>
            <td>
                <a class="btn btn-info"  href="/major/{{ $major->id}}">Edit</a>
                <a  class="btn btn-danger" href="/major/delete/{{ $major->id}}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Data Major</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="/add-major" method="post">
           {{ csrf_field() }}

                <div class="form-group">
                  <label for="exampleInputEmail1">No</label>
                  <input type="text" name="no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kd Jurusan</label>
                  <input type="number" name="cd_Major" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kd Jurusan" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Jurusan</label>
                  <input type="number" name="nm_major" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Jurusan" required>
                </div>
                <div class="modal-footer">
                <a class="btn btn-danger" href="/major">kembali</a> </button>
                <button  class="btn btn-success btn-sm">Simpan</button>
                </div>
              </form>
          </div>
        </div>
      </div>
      </div>


    {{ $majores->links() }}

    </div>
</body>
</html>