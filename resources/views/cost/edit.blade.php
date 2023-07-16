<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD UNPASIM</title>
</head>
<body>
    <h3>Edit Cost</h3>
    <br />

    <form action="/cost/update/{{ $costs->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value="{{ $costs->id}}">     <br /> 
        Nama Jurusan <input type="text" required name="nm_major" value="{{ $costs->nm_major }}">     <br /> <br />
        UP3 <input type="number" required name="up3" value="{{ $costs->up3 }}">     <br /> <br />
        SDP2 <input type="number" required name="sdp2" value="{{ $costs->sdp2 }}">     <br /> <br />
        BPP <input type="number" required name="bpp" value="{{ $costs->bpp }}">     <br /> <br />
        <input type="submit" value="Save Data">
        <button  class="btn btn-primary btn-sm">
        <a href="/cost">kembali</a>
        </button>
    </form>
</body>
</html>