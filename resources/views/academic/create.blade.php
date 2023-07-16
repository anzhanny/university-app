<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD Code Circle</title>
</head>
<body>
            <!-- Modal -->
        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Data Academic</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="/academic/store" method="post">
           {{ csrf_field() }}

                <div class="form-group">
                  <label for="exampleInputEmail1">No</label>
                  <input type="number" name="no" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">NIM</label>
                  <input type="number" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIM" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Mahasiswa</label>
                  <input type="text" name="nm_student" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Mahasiswa" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Matkul</label>
                  <input type="text" name="cd_subject" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode Matkul" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Matkul</label>
                  <input type="text" name="nm_subject" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Matkul" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">SKS</label>
                  <input type="number" name="sks" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="SKS" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Semester</label>
                  <input type="number" name="semester" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Semester" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nilai</label>
                  <input type="number" name="grade" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nilai " required>
                </div>
                <div class="modal-footer">
                <a class="btn btn-danger" href="/academic">kembali</a> </button>
                <button  class="btn btn-success btn-sm">Simpan</button>
                </div>
              </form>
          </div>
        </div>
      </div>
      </div> -->
      <!-- Close Modal -->


    <h3>Data Academic</h3>
    <br />

    <form action="/academic/store" method="post">
        {{ csrf_field() }}
        <div>
        <div class="form-group">
            <label for="exampleInputEmail1">No</label>
            <input type="number" name="no" require="required">     <br /> <br />
        </div>
        NIM <input type="number" name="nim" require="required">     <br /> <br />
        Nama Mahasiswa <input type="text" name="nm_student" require="required">     <br /> <br />
        Kode Matkul <input type="text" name="cd_subject" require="required">     <br /> <br />
        Nama Matkul <input type="text" name="nm_subject" require="required">     <br /> <br />
        SKS <input type="number" name="sks" require="required">     <br /> <br />
        Semester <input type="number" name="semester" require="required">     <br /> <br />
        Nilai <input type="text" name="grade" require="required">     <br /> <br />
        
        <input type="submit" value="Save Data">
        <button  class="btn btn-primary btn-sm">
        <a href="/academic">kembali</a> </button>
    </form>
</body>
</html>