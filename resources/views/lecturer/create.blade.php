<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD Code Circle</title>
</head>
<body>
    <h3>Data Lecturer</h3>
    <br />

    <form action="/lecturer/store" method="post">
        {{ csrf_field() }}
        No <input type="number" name="no" require="required">     <br /> <br />
        NIP <input type="number" name="nip" require="required">     <br /> <br />
        Nama <input type="text" name="name" require="required">     <br /> <br />
        Alamat <input type="text" name="address" require="required">     <br /> <br />
        Agama <input type="text" name="religion" require="required">     <br /> <br />
        Tanggal Lahir <input type="text" name="date_year" require="required">     <br /> <br />
        Jenis Kelamin <input type="text" name="gender" require="required">     <br /> <br />
        Pendidikan Terakhir <input type="text" name="tertiary_education" require="required">     <br /> <br />
        <input type="submit" value="Save Data">
                
        <button  class="btn btn-primary btn-sm">
        <a href="/lecturer">kembali</a>
        </button>
        </form>
</body>
</html>