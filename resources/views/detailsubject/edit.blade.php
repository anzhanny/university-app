<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD UNPASIM</title>
</head>
<body>
    <h3>Edit Detail Subject</h3>
    <br />

    <form action="/detailsubject/update/{{ $detailsubjects->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value="{{ $detailsubjects->id}}">     <br /> 
        Id Matkul <input type="number" required name="subject_id" value="{{ $detailsubjects->subject_id }}"> <br />     <br /> <br />
        Id Dosen <input type="number" required name="lecturer_id" value="{{ $detailsubjects->lecturer_id }}">     <br /> <br />
        Tahun Ajaran <input type="text" required name="class_year" value="{{ $detailsubjects->class_year }}">     <br /> <br />
        <input type="submit" value="Save Data">
        <button  class="btn btn-primary btn-sm">
        <a href="/detailsubject">kembali</a>
        </button>


    </form>
</body>
</html>