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
            <h1 class="m-0"> {{$results['result']}}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
      <div class="container-fluid">
      <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
      <a href="/add-khs">Add Data Khs</a>
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
            <th>Kd matkul</th>
            <th>NIM</th>
            <th>Nilai</th>
            <th>Opsi</th>
        </tr>
        @foreach($results as $result)
        <tbody>
        <tr>
            <td>{{ $result->no }}</td>
            <td>{{ $result->cd_subject }}</td>
            <td>{{ $result->nim }}</td>
            <td>{{ $result->grade }}</td>
            <td>
                <a class="btn btn-info"  href="/khs/{{ $result->id}}">Edit</a>
                <a class="btn btn-danger"  href="/khs/delete/{{ $result->id}}">Hapus</a>
            </td>
            <!-- <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter{{$result->id}}">
                    <i class="fa fa-trash">delete</i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal{{$result->id}}">
                    <i class="fa fa-edit">edit</i>
                  </button>
            </td> -->
        </tr>
        @endforeach
    </table>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Data Khs</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="/add- khs" method="post">
           {{ csrf_field() }}

                <div class="form-group">
                  <label for="exampleInputEmail1">No</label>
                  <input type="number" name="no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kd Matkul</label>
                  <input type="text" name="cd_subject" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kd Matkul" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">NIM</label>
                  <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIM" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nilai</label>
                  <input type="text" name="Grade" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="A-E" required>
                </div>


                <div class="modal-footer">
                <a class="btn btn-danger" href="/khs">kembali</a> </button>
                <button  class="btn btn-success btn-sm">Simpan</button>
                </div>
              </form>
          </div>
        </div>
      </div>
      </div>
      <!-- Close Modal -->


    {{$results->links()}}
    </div>
</body>
</html>