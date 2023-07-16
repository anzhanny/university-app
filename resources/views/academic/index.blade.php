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
            <h1 class="m-0"> {{$academics['academic']}}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
      <div class="container-fluid">
      <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
      <a href="/add-academic">Add Data Academic</a>
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
            <th>NIM</th>
            <th>Nama Mahasiswa</th>
            <th>Kode Matkul</th>
            <th>Nama Matkul</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Nilai</th>
            <th>Opsi</th>
        </tr>
        <tbody>
        @foreach($academics as $academic)
        <tr>
            <td>{{ $academic->no }}</td>
            <td>{{ $academic->nim }}</td>
            <td>{{ $academic->nm_student }}</td>
            <td>{{ $academic->cd_subject }}</td>
            <td>{{ $academic->nm_subject }}</td>
            <td>{{ $academic->sks }}</td>
            <td>{{ $academic->semester }}</td>
            <td>{{ $academic->grade }}</td>
            <td>
            <a class="btn btn-info" href="/academic/{{ $academic->id}}">Edit</a>             
            <a class="btn btn-danger" href="/academic/delete/{{ $academic->id}}">Delete</a>
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
              <h5 class="modal-title" id="exampleModalLabel">Add Data Academic</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="/add-academic" method="post">
           {{ csrf_field() }}

                <div class="form-group">
                  <label for="exampleInputEmail1">No</label>
                  <input type="number" name="no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">NIM</label>
                  <input type="number" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIM" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Mahasiswa</label>
                  <input type="text" name="nm_student" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Mahasiswa" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Matkul</label>
                  <input type="text" name="cd_subject" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Matkul" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Matkul</label>
                  <input type="text" name="nm_subject" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Matkul" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">SKS</label>
                  <input type="number" name="sks" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="SKS" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Semester</label>
                  <input type="number" name="semester" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Semester" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nilai</label>
                  <input type="number" name="grade" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nilai " required>
                </div>
                <div class="modal-footer">
                <a class="btn btn-danger" href="/academic">kembali</a> </button>
                <button  class="btn btn-success btn-sm">Simpan</button>
                </div>
              </form>
          </div>
        </div>
      </div>
      </div>
      <!-- Close Modal -->


    {{ $academics->links() }}  
    </div>
</form>



</body>
</html>