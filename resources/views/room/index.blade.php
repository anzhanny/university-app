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
      <a href="/add-room">Add Data Room</a>
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
            <th>Kd ruangan</th>
            <th>nama ruangan</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
        @foreach($rooms as $room)
        <tr>
            <td>{{ $room->no }}</td>
            <td>{{ $room->cd_room }}</td>
            <td>{{ $room->nm_room }}</td>
            <td>{{ $room->status }}</td>
            <td>
                <a href="/room/{{ $room->id}}">Edit</a>
                <a href="/room/delete/{{ $room->id}}">Hapus</a>
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
        @endforeach
    </table>

    {{ $rooms->links() }}

    </div>
</body>
</html>