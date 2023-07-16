<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD UNPASIM</title>
</head>
<body>
    <h3>Edit Room</h3>

    <br />

    <form action="/room/update/{{ $rooms->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value="{{ $rooms->id}}">     <br /> 
        No <input type="number" required name="no" value="{{ $rooms->no }}"> <br />     <br /> <br />
        Kd Ruangan<input type="text" required name="cd_room" value="{{ $rooms->cd_room }}">     <br /> <br />
        Nama Ruangan <input type="text" required name="nm_room" value="{{ $rooms->nm_room }}">     <br /> <br />
        Status <input type="number" required name="status" value="{{ $rooms->status }}">     <br /> <br />
        <input type="submit" value="Save Data">
    <button  class="btn btn-primary btn-sm">
    <a href="/room">kembali</a>
    </button>

    </form>
</body>
</html>

