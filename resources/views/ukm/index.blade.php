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
            <h1 class="m-0"> {{$activities['activity']}}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

<section class="content">
      <div class="container-fluid">
      <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
      <a href="/add-ukm"><b>+</b>Add Data ukm</a>
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
        <tr>
            <th>No</th>
            <th>Nama ukm</th>
            <th>Waktu kegiatan</th>
            <th>Tempat kegiatan</th>
            <th>Opsi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($activities as $activity)
        <tr>
            <td>{{ $activity->no }}</td>
            <td>{{ $activity->nm_ukm }}</td>
            <td>{{ $activity->activity_date }}</td>
            <td>{{ $activity->activity_place }}</td>
            <td>
                <a class="btn btn-info" href="/ukm/{{ $activity->id}}">Edit</a>
                <a class="btn btn-danger" href="/ukm/delete/{{ $activity->id}}">Hapus</a>
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
              <h5 class="modal-title" id="exampleModalLabel">Add Data Ukm</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="/add-ukm" method="post">
           {{ csrf_field() }}

                <div class="form-group">
                  <label for="exampleInputEmail1">No</label>
                  <input type="number" name="no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama ukm</label>
                  <input type="text" name="nm_ukm" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama ukm" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tanggal Kegiatan</label>
                  <input type="text" name="activity_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Kegiatan" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tempat Kegiatan</label>
                  <input type="text" name="activity_place" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tempat Kegiatan" required>
                </div>


                <div class="modal-footer">
                <a class="btn btn-danger" href="/schedule">kembali</a>
                <button  class="btn btn-success btn-sm">Simpan</button>
                </div>
              </form>
          </div>
        </div>
      </div>
      </div>
      <!-- Close Modal -->

    {{ $activities->links() }}
    </div>


</body>
</html>