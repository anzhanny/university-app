<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD Code Circle</title>
</head>
<body>
    <h3>Data Schedule</h3>

    <br />

    <form action="/schedule/store" method="post">
        {{ csrf_field() }}
        No <input type="number" name="no" require="required">     <br /> <br />
        Kd Matkul<input type="text" name="cd_subject" require="required">     <br /> <br />
        Kd ruangan <input type="text" name="cd_room" require="required">     <br /> <br />
        NIP <input type="number" name="nip" require="required">     <br /> <br />
        Waktu <input type="text" name="time" require="required">     <br /> <br />
        <input type="submit" value="Save Data">
    <button  class="btn btn-primary btn-sm">
    <a href="/schedule">kembali</a>
    </button>

        </form>
</body>
</html>