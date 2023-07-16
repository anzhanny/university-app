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
      <a href="/add-ukm">Add Data UKM</a>
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
            <th>Nama ukm</th>
            <th>Waktu kegiatan</th>
            <th>Tempat kegiatan</th>
            <th>Opsi</th>
        </tr>
        @foreach($activities as $activity)
        <tr>
            <td>{{ $activity->no }}</td>
            <td>{{ $activity->nm_ukm }}</td>
            <td>{{ $activity->activity_date }}</td>
            <td>{{ $activity->activity_place }}</td>
            <td>
                <a href="/ukm/{{ $activity->id}}">Edit</a>
                <a href="/ukm/delete/{{ $activity->id}}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $activities->links() }}
    </div>


</body>
</html>