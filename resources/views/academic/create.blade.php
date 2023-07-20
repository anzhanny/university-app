<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <center><h1 class="text-center mb-4"> Data Academic</h1></center>
    <form action="/academic/store" method="post">
        {{ csrf_field() }}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="no" class="form-label">No</label><br>
                                <input type="number" class="form-control" name="no" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="nim" class="form-label">NIM</label><br>
                                <input type="text" class="form-control" name="nim" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="nm_student" class="form-label">Nama Mahasiswa</label><br>
                                <input type="text"  class="form-control" name="nm_subject" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="cd_subject" class="form-label">Kode Matkul</label><br>
                                <input type="text"  class="form-control" name="cd_subject" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="nm_subject" class="form-label">Nama Matkul</label><br>
                                <input type="text"  class="form-control" name="nm_subject" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="sks" class="form-label">SKS</label><br>
                                <input type="number"  class="form-control" name="sks" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="semester" class="form-label">Semester</label><br>
                                <input type="number"  class="form-control" name="semester" required="required">
                            </div>
                            <div class="mb-3">
                                <label for="grade" class="form-label">Nilai</label><br>
                                <input type="text"  class="form-control" name="grade" required="required">
                            </div>
                            <div class="card-footer">
                              <div class="col-12">
                              <a a href="/academic" class="btn btn-secondary">kembali</a>
                              <input type="submit" value="Save" class="btn btn-success float-right">
                              </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
</body>
</html>
