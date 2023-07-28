<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta class="form-control" name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <center><h3 class="text-center mb-4"> Data student</h3></center>
    <form action="/student/store" method="post">
        {{ csrf_field() }}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="no" class="form-label">No</label><br>
                                <input type="number" class="form-control" name="no" require="required">
                            </div>
                            <div class="form-group">
                                <label for="nim" class="form-label">NIM</label><br>
                                <input type="number" class="form-control" name="nim" require="required"> 
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-label">Nama</label><br>
                                <input type="text" class="form-control" name="name" require="required"> 
                            </div>
                            <div class="form-group">
                                <label for="address" class="form-label">Alamat</label><br>
                                <input type="text" class="form-control" name="address" require="required"> 
                            </div>
                            <div class="form-group">
                                <label for="religion" class="form-label">Agama</label><br>
                                <input type="text" class="form-control" name="religion" require="required"> 
                            <div class="form-group">
                                <label for="date_year" class="form-label">Tanggal Lahir </label><br>
                                <input type="text" class="form-control" name="date_year" require="required">
                            </div>
                            <div class="form-group">
                                <label for="gender" class="form-label">Jenis Kelamin</label><br>
                                <input type="text" class="form-control" name="gender" require="required"> 
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label><br>
                                <input type="email" class="form-control" name="email" require="required"> 
                            </div>
                            <div class="card-footer">
                              <div class="col-12">
                              <a a href="/student" class="btn btn-secondary">kembali</a>
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