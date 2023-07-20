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
            <h1 class="m-0"> {{$faculties['faculty']}}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
      <div class="container-fluid">
      <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
      <a href="/add-faculty"><b>+</b>Add Data Faculty</a>
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
            <th>Nama fakultas</th>
            <th>Jml Dosen</th>
            <th>Jml Mhs</th>
            <th>Jml Jurusan</th>
            <th>Opsi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($faculties as $faculty)
        <tr>
            <td>{{ $faculty->no }}</td>
            <td>{{ $faculty->nm_fac }}</td>
            <td>{{ $faculty->amount_lecturer }}</td>
            <td>{{ $faculty->amount_student }}</td>
            <td>{{ $faculty->amount_major }}</td>
            <td>
                <!-- <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter{{$faculty->id}}">
                    <i class="fa fa-trash">delete</i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal{{$faculty->id}}">
                    <i class="fa fa-edit">edit</i>
                  </button> -->
                <a class="btn btn-info"  href="/faculty/{{ $faculty->id}}">Edit</a>
                <a class="btn btn-danger" href="/faculty/delete/{{ $faculty->id}}">Hapus</a>
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
              <h5 class="modal-title" id="exampleModalLabel">Add Data Faculty</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="/add-faculty" method="post">
           {{ csrf_field() }}

                <div class="form-group">
                  <label for="exampleInputEmail1">No</label>
                  <input type="number" name="no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Fakultas</label>
                  <input type="text" name="nm_fac" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Fakultas" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jml Dosen</label>
                  <input type="number" name="amount_lecturer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jml Dosen" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jml Mhs</label>
                  <input type="number" name="amount_student" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jml Mhs" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jml Jurusan</label>
                  <input type="number" name="amount_major" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jml Jurusan" required>
                </div>
                <div class="modal-footer">
                <a class="btn btn-danger" href="/faculty">kembali</a> </button>
                <button  class="btn btn-success btn-sm">Simpan</button>
                </div>
              </form>
          </div>
        </div>
      </div>
      </div>
      <!-- Close Modal -->


    </div>
    {{ $faculties->links() }}

</body>
</html>
