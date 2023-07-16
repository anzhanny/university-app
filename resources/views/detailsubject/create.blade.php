<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD Code Circle</title>
</head>
<body>
    <h3>Data Detail Subject</h3>
    <br />

    <form action="/detailsubject/store" method="post">
        {{ csrf_field() }}
        Id Matkul <input type="number" name="subject_id" require="required">     <br /> <br />
        Id Dosen <input type="number" name="lecturer_id" require="required">     <br /> <br />
        Tahun Ajaran <input type="text" name="class_year" require="required">     <br /> <br />
        <input type="submit" value="Save Data">
        <button  class="btn btn-primary btn-sm">
        <a href="/detailsubject">kembali</a>
        </button>
        </form>
</body>
</html>