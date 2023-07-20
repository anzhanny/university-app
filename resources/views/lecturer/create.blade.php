<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <center><h1 class="text-center mb-4"> Data lecturer</h1></center>
    <form action="/lecturer/store" method="post">
        {{ csrf_field() }}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="no" class="form-label">No</label><br>
                                <input type="number" name="no" require="required">
                            </div>
                            <div class="mb-3">
                                <label for="nip" class="form-label">NIP</label><br>
                                <input type="number" name="nip" require="required"> 
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label><br>
                                <input type="text" name="name" require="required"> 
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Alamat</label><br>
                                <input type="text" name="address" require="required"> 
                            </div>
                            <div class="mb-3">
                                <label for="religion" class="form-label">Agama</label><br>
                                <input type="text" name="religion" require="required"> 
                            <div class="mb-3">
                                <label for="date_year" class="form-label">Tanggal Lahir </label><br>
                                <input type="text" name="date_year" require="required">
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Jenis Kelamin</label><br>
                                <input type="text" name="gender" require="required"> 
                            </div>
                            <div class="mb-3">
                                <label for="tertiary_education" class="form-label">Pendidikan Terakhir</label><br>
                                <input type="text" name="tertiary_education" require="required"> 
                            </div>
                            <div class="card-footer">
                              <div class="col-12">
                              <a a href="/lecturer" class="btn btn-secondary">kembali</a>
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