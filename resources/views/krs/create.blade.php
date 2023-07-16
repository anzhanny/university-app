<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD Code Circle</title>
</head>
<body>
    <h3>Data Krs</h3>
    <br />

    <form action="/krs/store" method="post">
        {{ csrf_field() }}
        No <input type="number" name="no" require="required">     <br /> <br />
        Kd matkul <input type="text" name="cd_subject" require="required">     <br /> <br />
        Kd Jurusan <input type="text" name="cd_major" require="required">     <br /> <br />
        NIM <input type="number" name="nim" require="required">     <br /> <br />
        <input type="submit" value="Save Data">
        <button  class="btn btn-primary btn-sm">
        <a href="/krs">kembali</a>
        </button>

        </form>
</body>
</html>