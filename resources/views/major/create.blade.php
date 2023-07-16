<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD Code Circle</title>
</head>
<body>
    <h3>Data Major</h3>

    <br />

    <form action="/major/store" method="post">
        {{ csrf_field() }}
        No <input type="number" name="no" require="required">     <br /> <br />
        Kd Jurusan <input type="text" name="cd_major" require="required">     <br /> <br />
        Nama Jurusan <input type="text" name="nm_major" require="required">     <br /> <br />
        <input type="submit" value="Save Data">
        <button  class="btn btn-primary btn-sm">
        <a href="/major">kembali</a>
        </button>

        </form>
</body>
</html>