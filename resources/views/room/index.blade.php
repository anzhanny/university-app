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
            <h1 class="m-0"> {{$rooms['room']}}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
      <div class="container-fluid">
      <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
      <a href="/add-room"><b>+</b>Add Data Room</a>
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
            <th>Kd ruangan</th>
            <th>nama ruangan</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rooms as $room)
        <tr>
            <td>{{ $room->no }}</td>
            <td>{{ $room->cd_room }}</td>
            <td>{{ $room->nm_room }}</td>
            <td>{{ $room->status }}</td>
            <td>
                <a class="btn btn-info" href="/room/{{ $room->id}}">Edit</a>
                <a class="btn btn-danger"  href="/room/delete/{{ $room->id}}">Hapus</a>
            </td>
            <!-- <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter{{$room->id}}">
                    <i class="fa fa-trash">delete</i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal{{$room->id}}">
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
              <h5 class="modal-title" id="exampleModalLabel">Add Data Room</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="/add-room" method="post">
           {{ csrf_field() }}

                <div class="form-group">
                  <label for="exampleInputEmail1">No</label>
                  <input type="number" name="no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kd ruangan</label>
                  <input type="text" name="cd_room" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kd ruangan" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Ruangan</label>
                  <input type="text" name="nm_room" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Ruangan" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Status</label>
                  <input type="number" name="status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Status" required>
                </div>


                <div class="modal-footer">
                <a class="btn btn-danger" href="/room">kembali</a> </button>
                <button  class="btn btn-success btn-sm">Simpan</button>
                </div>
              </form>
          </div>
        </div>
      </div>
      </div>
      <!-- Close Modal -->


    {{ $rooms->links() }}

    </div>
</body>
</html>