<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD UNPASIM</title>
</head>
<body>
    <h3>Edit Khs</h3>
    <br />

    <form action="/khs/update/{{$results->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value="{{ $results->id}}">     <br /> 
        No <input type="number" required name="no" value="{{ $results->no }}"> <br />     <br /> <br />
        Kd Matkul <input type="text" required name="cd_subject" value="{{ $results->cd_subject }}">     <br /> <br />
        NIM <input type="number" required name="nim" value="{{ $results->nim }}">     <br /> <br />
        Nilai <input type="text" required name="grade" value="{{ $results->grade }}">     <br /> <br />
        <input type="submit" value="Save Data">
        <button  class="btn btn-primary btn-sm">
        <a href="/khs">kembali</a>
        </button>
    </form>
</body>
</html>