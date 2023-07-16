<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD Code Circle</title>
</head>
<body>
    <h3>Data Khs</h3>
    <br />

    <form action="/khs/store" method="post">
        {{ csrf_field() }}
        No <input type="number" name="no" require="required">     <br /> <br />
        Kd matkul <input type="text" name="cd_subject" require="required">     <br /> <br />
        NIM <input type="number" name="nim" require="required">     <br /> <br />
        Nilai <input type="text" name="grade" require="required">     <br /> <br />
        <input type="submit" value="Save Data" >
        <button  class="btn btn-primary btn-sm">
        <a href="/khs">kembali</a>
        </button>
    </form>
</body>
</html>