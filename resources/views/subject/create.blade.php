<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD Code Circle</title>
</head>
<body>
    <h3>Data Subject</h3>

    <button  class="btn btn-primary btn-sm">
    <a href="/subject">kembali</a>
    </button>

    <br />
    <br />

    <form action="/subject/store" method="post">
        {{ csrf_field() }}
        No <input type="number" name="no" require="required">     <br /> <br />
        Kd Matkul<input type="text" name="cd_subject" require="required">     <br /> <br />
        Nama Matkul <input type="text" name="nm_subject" require="required">     <br /> <br />
        SKS <input type="number" name="sks" require="required">     <br /> <br />
        Semester <input type="number" name="semester" require="required">     <br /> <br />
        <input type="submit" value="Save Data">
        </form>
</body>
</html>