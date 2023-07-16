<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD Code Circle</title>
</head>
<body>
    <h3>Data Faculty</h3>
    <br />

    <form action="/faculty/store" method="post">
        {{ csrf_field() }}
        No <input type="number" name="no" require="required">     <br /> <br />
        Nama Fakultas <input type="text" name="nm_fac" require="required">     <br /> <br />
        Jml Dosen <input type="number" name="amount_lecturer" require="required">     <br /> <br />
        Jml Mhs <input type="number" name="amount_student" require="required">     <br /> <br />
        Jml Jurusan <input type="number" name="amount_major" require="required">     <br /> <br />
        <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">edit</button>
                  <button  class="btn btn-primary btn-sm">Simpan</button>
                </div> -->
        <input type="submit" value="Save Data">
        <button  class="btn btn-primary btn-sm">
        <a href="/faculty">kembali</a>
        </button>

    <br />
    </form>
</body>
</html>