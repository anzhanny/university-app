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
            <h1 class="m-0"> {{$detailsubjects['detailsubject']}}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
      <div class="container-fluid">
      <button type="button" class="btn btn-outline-success"  data-toggle="modal" data-target="#exampleModal">
      <a href="/add-detailsubject"><b>+</b>Add Data Detail Subject</a>
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
            <th>Id Matkul</th>
            <th>Id Dosen</th>
            <th>Tahun Ajaran</th>
            <th>Opsi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($detailsubjects as $detailsubject)
        <tr>
            <td>{{ $detailsubject->subject_id }}</td>
            <td>{{ $detailsubject->lecturer_id }}</td>
            <td>{{ $detailsubject->class_year }}</td>
            <td>
                <a class="btn btn-info" href="/detailsubject/{{ $detailsubject->id}}">Edit</a>
                <a class="btn btn-danger" href="/detailsubject/delete/{{ $detailsubject->id}}">Hapus</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Data Detail Subject</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="/add-detailsubject" method="post">
           {{ csrf_field() }}

                <div class="form-group">
                  <label for="exampleInputEmail1">Id Matkul</label>
                  <input type="number" name="subject_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Matkul" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Id Dosen</label>
                  <input type="number" name="lecturer_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Id Dosen" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tahun Ajaran</label>
                  <input type="text" name="class_year" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tahun Ajaran" required>
                </div>
                <div class="modal-footer">
                <a class="btn btn-danger" href="/detailsubject">kembali</a> </button>
                <button  class="btn btn-success btn-sm">Simpan</button>
                </div>
              </form>
          </div>
        </div>
      </div>
      </div>
      <!-- Close Modal -->


    {{ $detailsubjects->links() }}
    </div>


</body>
</html>