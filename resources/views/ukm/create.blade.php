<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD Code Circle</title>
</head>
<body>
    <h3>Data UKM</h3>
    <br />

    <form action="/ukm/store" method="post">
        {{ csrf_field() }}
        No <input type="number" name="no" require="required">     <br /> <br />
        Nama Ukm <input type="text" name="nm_ukm" require="required">     <br /> <br />
        Waktu Kegiatan <input type="text" name="activity_date" require="required">     <br /> <br />
        Tempat Kegiatan <input type="text" name="activity_place" require="required">     <br /> <br />
        <input type="submit" value="Save Data">
        <button  class="btn btn-primary btn-sm">
        <a href="/ukm">kembali</a>
        </button>
        </form>
</body>
</html>