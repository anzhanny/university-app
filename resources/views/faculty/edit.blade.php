<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD UNPASIM</title>
</head>
<body>
   <h3>Edit Faculty</h3>
    <br />

    <form action="/faculty/update/{{$faculties->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" required name="id" value="{{$faculties->id}}">     <br /> 
        No <input type="number" required name="no" value="{{ $faculties->no }}"> <br />     <br /> <br />
        Nama Fakultas <input type="text" required name="nm_fac" value="{{ $faculties->nm_fac }}">     <br /> <br />
        Jml Dosen<input type="number" required name="amount_lecturer" value="{{ $faculties->amount_lecturer }}">     <br /> <br />
        Jml Mahasiswa<input type="number" required name="amount_student" value="{{ $faculties->amount_student }}">     <br /> <br />
        Jml Jurusan<input type="number" required name="amount_major" value="{{ $faculties->amount_major }}">     <br /> <br />
        <input type="submit" value="Save Data">
        <button  class="btn btn-primary btn-sm">
        <a href="/faculty">kembali</a>
        </button>
    </form>
</body>
</html>