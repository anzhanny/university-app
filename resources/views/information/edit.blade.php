<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD UNPASIM</title>
</head>
<body>
    <h3>Edit Information</h3>
    <br />

    <form action="/information/update/{{ $informations->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value="{{ $informations->id}}">     <br /> 
        Nama <input type="text" required name="name" value="{{ $informations->name }}"> <br />     <br /> <br />
        Judul <input type="text" required name="title" value="{{ $informations->title }}">     <br /> <br />
        Deskripsi<input type="text" required name="description" value="{{ $informations->description }}">     <br /> <br />
        <input type="submit" value="Save Data">
        <button  class="btn btn-primary btn-sm">
        <a href="/information">kembali</a>
        </button>


    </form>
</body>
</html>