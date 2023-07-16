<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD UNPASIM</title>
</head>
<body>
    <h3>Edit Lecturer</h3>
    <br />

    <form action="/lecturer/update/{{ $lectures->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value="{{ $lectures->id}}">     <br /> 
        No <input type="number" required name="no" value="{{ $lectures->no }}"> <br />     <br /> <br />
        NIP <input type="number" required name="nip" value="{{ $lectures->nip }}"> <br />     <br /> <br />
        Nama <input type="text" required name="name" value="{{ $lectures->name }}">     <br /> <br />
        Alamat <input type="text" required name="address" value="{{ $lectures->address }}">     <br /> <br />
        Agama <input type="text" required name="religion" value="{{ $lectures->religion }}">     <br /> <br />
        Tanggal Lahir <input type="text" required name="date_year" value="{{ $lectures->date_year }}">     <br /> <br />
        Jenis Kelamin <input type="text" required name="gender" value="{{ $lectures->gender }}">     <br /> <br />
        Pendidikan Terakhir <input type="text" required name="tertiary_education" value="{{ $lectures->tertiary_education }}">     <br /> <br />
        <input type="submit" value="Save Data">
        <button  class="btn btn-primary btn-sm">
        <a href="/lecturer">kembali</a>
        </button>
    </form>
</body>
</html>