<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD Code Circle</title>
</head>
<body>
    <h3>Data Room</h3>

    <br />

    <form action="/room/store" method="post">
        {{ csrf_field() }}
        No <input type="number" name="no" require="required">     <br /> <br />
        Kd ruangan <input type="text" name="cd_room" require="required">     <br /> <br />
        Nama ruangan <input type="text" name="nm_room" require="required">     <br /> <br />
        Status <input type="number" name="status" require="required">     <br /> <br />
        <input type="submit" value="Save Data">
    <button  class="btn btn-primary btn-sm">
    <a href="/room">kembali</a>
    </button>

        </form>
</body>
</html>