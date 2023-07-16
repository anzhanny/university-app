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
      <a href="/add-student">Add Data student</a>
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
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Email</th>
            <th>Opsi</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->no }}</td>
            <td>{{ $student->nim }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->religion }}</td>
            <td>{{ $student->date_year }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->email }}</td>
            <td>
                <a href="/student/{{ $student->id}}">Edit</a>
                <a href="/student/delete/{{ $student->id}}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

    {{ $students->links() }}
    </div>
</body>
</html>