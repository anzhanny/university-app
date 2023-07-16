<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD UNPASIM</title>
</head>
<body>
    <h3>Edit Major</h3>

    <br />

    <form action="/major/update/{{ $majores->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value="{{ $majores->id}}">     <br /> 
        No <input type="number" required name="no" value="{{ $majores->no }}"> <br />     <br /> <br />
        Kd Jurusan<input type="text" required name="cd_major" value="{{ $majores->cd_major }}">     <br /> <br />
        Nama Jurusan <input type="text" required name="nm_major" value="{{ $majores->nm_major }}">     <br /> <br />
        <input type="submit" value="Save Data">
    <button  class="btn btn-primary btn-sm">
    <a href="/major">kembali</a>
    </button>

    </form>
</body>
</html>

