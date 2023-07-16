<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD Code Circle</title>
</head>
<body>
    <h3>Data Cost</h3>
    <br />

    <form action="/cost/store" method="post">
        {{ csrf_field() }}
        Nama Jurusan <input type="text" name="nm_major" require="required">     <br /> <br />
        UP3 <input type="number" name="up3" require="required">     <br /> <br />
        SDP2 <input type="number" name="sdp2" require="required">     <br /> <br />
        BPP <input type="number" name="bpp" require="required">     <br /> <br />
        <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">edit</button>
                  <button  class="btn btn-primary btn-sm">Simpan</button>
                </div> -->
        <input type="submit" value="Save Data">
        <button  class="btn btn-primary btn-sm">
        <a href="/cost">kembali</a>
        </button>
    </form>
</body>
</html>