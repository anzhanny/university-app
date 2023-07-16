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
      <a href="/add-subject">Add Data subject</a>
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
            <th>Nama matkul</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Opsi</th>
        </tr>
        @foreach($subjects as $subject)
        <tr>
            <td>{{ $subject->no }}</td>
            <td>{{ $subject->cd_subject }}</td>
            <td>{{ $subject->nm_subject}}</td>
            <td>{{ $subject->sks }}</td>
            <td>{{ $subject->semester }}</td>
            <td>
                <a href="/subject/{{ $subject->id}}">Edit</a>
                <a href="/subject/delete/{{ $subject->id}}">Hapus</a>
            </td>

            <!-- <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter{{$subject->id}}">
                    <i class="fa fa-trash">delete</i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal{{$subject->id}}">
                    <i class="fa fa-edit">edit</i>
                  </button>
            </td> -->
        </tr>
        @endforeach
    </table>

    {{ $subjects->links() }}

    </div>
</body>
</html>