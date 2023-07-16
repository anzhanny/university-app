<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD UNPASIM</title>
</head>
<body>
    <h3>Edit Academic</h3>
    <br />

    <form action="/academic/update/{{ $academics->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value="{{ $academics->id}}">     <br /> 
        No <input type="number" required name="nim" value="{{ $academics->no }}"> <br />     <br /> <br />
        NIM <input type="number" required name="nim" value="{{ $academics->nim }}"> <br />     <br /> <br />
        Nama Mahasiswa <input type="text" required name="nm_student" value="{{ $academics->nm_student }}">     <br /> <br />
        Kode Matkul <input type="text" required name="cd_subject" value="{{ $academics->cd_subject }}">     <br /> <br />
        Nama Matkul <input type="text" required name="nm_subject" value="{{ $academics->nm_subject }}">     <br /> <br />
        SKS <input type="number" required name="sks" value="{{ $academics->sks }}">     <br /> <br />
        Semester <input type="number" required name="semester" value="{{ $academics->semester }}">     <br /> <br />
        Nilai <input type="text" required name="grade" value="{{ $academics->grade }}">     <br /> <br />
        <input type="submit" value="Save Data">
            
        <button  class="btn btn-primary btn-sm">
        <a href="/academic">kembali</a>
        </button>
    </form>
</body>
</html>
