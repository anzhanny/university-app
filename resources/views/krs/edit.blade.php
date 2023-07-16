<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD UNPASIM</title>
</head>
<body>
    <h3>Edit KRS</h3>
    <br />

    <form action="/krs/update/{{ $plans->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value="{{ $plans->id}}">     <br /> 
        No <input type="number" required name="no" value="{{ $plans->no }}"> <br />     <br /> <br />
        Kd Matkul <input type="text" required name="cd_subject" value="{{ $plans->cd_subject }}">     <br /> <br />
        Kd Jurusan <input type="text" required name="cd_major" value="{{ $plans->cd_major }}">     <br /> <br />
        NIM <input type="text" required name="nim" value="{{ $plans->nim }}">     <br /> <br />
        <input type="submit" value="Save Data">    
        <button  class="btn btn-primary btn-sm">
        <a href="/krs">kembali</a>
        </button>
    </form>
</body>
</html>