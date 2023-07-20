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
            <h1 class="m-0"> {{$lectures['lecturer']}}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
      <div class="container-fluid">
      <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
      <a href="/add-lecturer"><b>+</b>Add Data lecturer</a>
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
            <th>NIP</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Pendidikan Terakhir</th>
            <th>Opsi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($lectures as $lecturer)
        <tr>
            <td>{{ $lecturer->no }}</td>
            <td>{{ $lecturer->nip }}</td>
            <td>{{ $lecturer->name }}</td>
            <td>{{ $lecturer->address }}</td>
            <td>{{ $lecturer->religion }}</td>
            <td>{{ $lecturer->date_year }}</td>
            <td>{{ $lecturer->gender }}</td>
            <td>{{ $lecturer->tertiary_education }}</td>
            <td>
                <a class="btn btn-info" href="/lecturer/{{ $lecturer->id}}">Edit</a>
                <a class="btn btn-danger" href="/lecturer/delete/{{ $lecturer->id}}">Hapus</a>
            </td>
        </tr>
        </tbody>
        @endforeach
    </table>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Data Lecturer</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="/add-lecturer" method="post">
           {{ csrf_field() }}

                <div class="form-group">
                  <label for="exampleInputEmail1">No</label>
                  <input type="number" name="no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NO" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">NIP</label>
                  <input type="number" name="nip" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIP" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Agama</label>
                  <input type="text" name="religion" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Lahir</label>
                  <input type="text" name="date_year" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tahun Lahir" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jenis Kelamin</label>
                  <input type="text" name="gender" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis Kelamin" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Pendidikan Terakhir</label>
                  <input type="text" name="tertiary_education" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pendidikan Terakhir" required>
                </div>
                <div class="modal-footer">
                <a class="btn btn-danger" href="/lecturer">kembali</a> </button>
                <button  class="btn btn-success btn-sm">Simpan</button>
                </div>
              </form>
          </div>
        </div>
      </div>
      </div>
      <!-- Close Modal -->

    {{ $lectures->links() }}

    </div>
</body>
</html>