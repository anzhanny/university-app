<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice CRUD UNPASIM</title>
</head>
<body>
<section class="content">
      <div class="container-fluid">
      <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal">
      <a href="/add-major">Add Data Major</a>
          <i class="fa fa-plus"></i>
      </button>
      @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
      <br><br>

    <div class="container mt-5">
    <table border="1">
        <tr>
            <th>No</th>
            <th>Kd jurusan</th>
            <th>Nama jurusan</th>
            <th>Opsi</th>
        </tr>
        @foreach($majores as $major)
        <tr>
            <td>{{ $major->no }}</td>
            <td>{{ $major->cd_major }}</td>
            <td>{{ $major->nm_major }}</td>
            <td>
                <a href="/major/{{ $major->id}}">Edit</a>
                <a href="/major/delete/{{ $major->id}}">Hapus</a>
            </td>

            <!-- <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter{{$major->id}}">
                    <i class="fa fa-trash">delete</i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal{{$major->id}}">
                    <i class="fa fa-edit">edit</i>
                  </button> -->
            </td>
        </tr>
        @endforeach
    </table>

    {{ $majores->links() }}

    </div>
</body>
</html>