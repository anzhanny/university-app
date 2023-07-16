<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD UNPASIM</title>
</head>
<body>
    <h3>Edit Student</h3>
    <br />

    <form action="/student/update/{{ $students->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value="{{ $students->id}}">     <br /> 
        No <input type="number" required name="no" value="{{ $students->no }}"> <br />     <br /> <br />
        NIM <input type="number" required name="nim" value="{{ $students->nim }}"> <br />     <br /> <br />
        Nama <input type="text" required name="name" value="{{ $students->name }}">     <br /> <br />
        Alamat <input type="text" required name="address" value="{{ $students->address }}">     <br /> <br />
        Agama <input type="text" required name="religion" value="{{ $students->religion }}">     <br /> <br />
        Tanggal Lahir <input type="text" required name="date_year" value="{{ $students->date_year }}">     <br /> <br />
        Jenis Kelamin <input type="text" required name="gender" value="{{ $students->gender }}">     <br /> <br />
        Email <input type="text" required name="email" value="{{ $students->email }}">     <br /> <br />
        <input type="submit" value="Save Data">
            
        <button  class="btn btn-primary btn-sm">
        <a href="/student">kembali</a>
        </button>

    </form>
</body>
</html>