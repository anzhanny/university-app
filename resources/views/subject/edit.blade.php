<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD UNPASIM</title>
</head>
<body>
    <h3>Edit Subject</h3>
    <button  class="btn btn-primary btn-sm">
    <a href="/subject">kembali</a>
    </button>

    <br />
    <br />

    <form action="/subject/update/{{ $subjects->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value="{{ $subjects->id}}">     <br /> 
        No <input type="number" required name="no" value="{{ $subjects->no }}"> <br />     <br /> <br />
        Kd matkul <input type="text" required name="nm_ukm" value="{{ $subjects->cd_subject }}">     <br /> <br />
        Nama matkul <input type="text" required name="nm_ukm" value="{{ $subjects->nm_subject }}">     <br /> <br />
        SKS <input type="number" required name="activity_date" value="{{ $subjects->sks }}">     <br /> <br />
        Semester <input type="number" required name="activity_place" value="{{ $subjects->semester }}">     <br /> <br />
        <input type="submit" value="Save Data">
    </form>
</body>
</html>