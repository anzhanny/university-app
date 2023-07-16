<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD Code Circle</title>
</head>
<body>
    <h3>Data Student</h3>
    <br />

    <form action="/student/store" method="post">
        {{ csrf_field() }}
        No <input type="number" name="no" require="required">     <br /> <br />
        NIM <input type="number" name="nim" require="required">     <br /> <br />
        Nama <input type="text" name="name" require="required">     <br /> <br />
        Alamat <input type="text" name="address" require="required">     <br /> <br />
        Agama <input type="text" name="religion" require="required">     <br /> <br />
        Tanggal Lahir <input type="text" name="date_year" require="required">     <br /> <br />
        Jenis Kelamin <input type="text" name="gender" require="required">     <br /> <br />
        Email <input type="text" name="email" require="required">     <br /> <br />
        <input type="submit" value="Save Data">
        
        <button  class="btn btn-primary btn-sm">
        <a href="/student">kembali</a>
        </button>
        </form>
</body>
</html>