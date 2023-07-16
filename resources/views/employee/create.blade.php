<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD Code Circle</title>
</head>
<body>
    <h3>Data Employee</h3>
    <br />

    <form action="/employee/store" method="post">
        {{ csrf_field() }}
        Nip <input type="number" name="nip" require="required">     <br /> <br />
        Nama<input type="text" name="name" require="required">     <br /> <br />
        Jabatan<input type="text" name="role" require="required">     <br /> <br />        <input type="submit" value="Save Data">
        <button  class="btn btn-primary btn-sm">
        <a href="/employee">kembali</a>
        </button>
        </form>
</body>
</html>