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
      <a href="/add-schedule">Add Data schedule</a>
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
            <th>Kd matkul</th>
            <th>Kd ruangan</th>
            <th>NIP</th>
            <th>Waktu</th>
            <th>Opsi</th>
        </tr>
        @foreach($schedules as $schedule)
        <tr>
            <td>{{ $schedule->no }}</td>
            <td>{{ $schedule->cd_subject }}</td>
            <td>{{ $schedule->cd_room }}</td>
            <td>{{ $schedule->nip }}</td>
            <td>{{ $schedule->time }}</td>
            <td>
                <a href="/schedule/{{ $schedule->id}}">Edit</a>
                <a href="/schedule/delete/{{ $schedule->id}}">Hapus</a>
            </td>

            <!-- <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter{{$schedule->id}}">
                    <i class="fa fa-trash">delete</i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal{{$schedule->id}}">
                    <i class="fa fa-edit">edit</i>
                  </button>
            </td> -->
        </tr>
        @endforeach
    </table>

    {{ $schedules->links() }}

    </div>
</body>
</html>