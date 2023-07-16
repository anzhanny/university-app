<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD UNPASIM</title>
</head>
<body>
    <h3>Edit Employee</h3>
    <br />

    <form action="/employee/update/{{ $employees->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value="{{ $employees->id}}">     <br /> 
        Nip <input type="number" required name="nip" value="{{ $employees->nip }}"> <br />     <br /> <br />
        Nama <input type="text" required name="name" value="{{ $employees->name }}">     <br /> <br />
        Jabatan <input type="text" required name="role" value="{{ $employees->role }}">     <br /> <br />
        <input type="submit" value="Save Data">
        <button  class="btn btn-primary btn-sm">
        <a href="/employee">kembali</a>
        </button>


    </form>
</body>
</html>