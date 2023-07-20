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
            <h1 class="m-0"> {{$costs['cost']}}</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<section class="content">
      <div class="container-fluid">
      <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">
      <a href="/add-cost"><b>+</b>Add Data Cost</a>
          <i class="fa fa-plus"></i>
      </button>
      @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
      <br><br>

      @php
      function rupiah($angka){
	
        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
        return $hasil_rupiah;
      }
      @endphp

      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Nama Jurusan</th>
            <th>UP3</th>
            <th>SDP2</th>
            <th>BPP</th>
            <th>Opsi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($costs as $cost)
        <tr>
            <td>{{ $cost->nm_major }}</td>
            <td>{{rupiah($cost->up3)}}</td>
            <td>{{rupiah($cost->sdp2)}}</td>
            <td>{{rupiah($cost->bpp)}}</td>
            <td>
                <a class="btn btn-info" href="/cost/{{ $cost->id}}">Edit</a>
                <a class="btn btn-danger" href="/cost/delete/{{ $cost->id}}">Hapus</a>
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
              <h5 class="modal-title" id="exampleModalLabel">Add Data Cost</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="/add-cost" method="post">
           {{ csrf_field() }}

                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Jurusan</label>
                  <input type="text" name="no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">UP3</label>
                  <input type="number" name="up3" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="UP3" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">SDP2</label>
                  <input type="number" name="sdp2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="SDP2" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">BPP</label>
                  <input type="number" name="bpp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="BPP" required>
                </div>
                <div class="modal-footer">
                <a class="btn btn-danger" href="/cost">kembali</a> </button>
                <button  class="btn btn-success btn-sm">Simpan</button>
                </div>
              </form>
          </div>
        </div>
      </div>
      </div>

       {{ $costs->links() }}  
    </div>




</body>
</html>
