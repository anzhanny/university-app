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
            <h1 class="m-0"> {{$plans['plan']}}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
      <div class="container-fluid">
      <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
      <a href="/add-krs"><b>+</b>Add Data krs</a>
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
            <th>Kd jurusan</th>
            <th>NIM</th>
            <th>Opsi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($plans as $plan)
        <tr>
            <td>{{ $plan->no }}</td>
            <td>{{ $plan->cd_subject }}</td>
            <td>{{ $plan->cd_major }}</td>
            <td>{{ $plan->nim }}</td>
            <td>
                <a  class="btn btn-info" href="/krs/{{ $plan->id}}">Edit</a>
                <a class="btn btn-danger"  href="/krs/delete/{{ $plan->id}}">Hapus</a>
            </td>


            <!-- <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter{{$plan->id}}">
                    <i class="fa fa-trash">delete</i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal{{$plan->id}}">
                    <i class="fa fa-edit">edit</i>
                  </button>
            </td> -->
        </tr>
          </tbody>
        @endforeach
    </table>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Data krs</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="/add-krs" method="post">
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
                  <label for="exampleInputEmail1">Kd Jurusan</label>
                  <input type="text" name="cd_major" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kd Jurusan" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">NIM</label>
                  <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIM" required>
                </div>


                <div class="modal-footer">
                <a class="btn btn-danger" href="/krs">kembali</a> </button>
                <button  class="btn btn-success btn-sm">Simpan</button>
                </div>
              </form>
          </div>
        </div>
      </div>
      </div>
      <!-- Close Modal -->


    {{ $plans->links() }}
    </div>
</body>
</html>