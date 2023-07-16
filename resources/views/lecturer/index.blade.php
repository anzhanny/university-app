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
      <a href="/add-lecturer">Add Data lecturer</a>
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
            <th>NIP</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Pendidikan Terakhir</th>
            <th>Opsi</th>
        </tr>
        @foreach($lectures as $lecturer)
        <tr>
            <td>{{ $lecturer->no }}</td>
            <td>{{ $lecturer->nip }}</td>
            <td>{{ $lecturer->name }}</td>
            <td>{{ $lecturer->address }}</td>
            <td>{{ $lecturer->religion }}</td>
            <td>{{ $lecturer->date_year }}</td>
            <td>{{ $lecturer->gender }}</td>
            <td>{{ $lecturer->tertiary_education }}</td>
            <td>
                <a href="/lecturer/{{ $lecturer->id}}">Edit</a>
                <a href="/lecturer/delete/{{ $lecturer->id}}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
    
    {{ $lectures->links() }}

    </div>
</body>
</html>