<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <center><h1 class="text-center mb-4"> Data Khs</h1></center>
    <form action="/khs/store" method="post">
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
                                <label for="cd_subject" class="form-label">Kd matkul</label><br>
                                <input type="text" name="cd_subject" require="required">
                            </div>
                            <div class="mb-3">
                                <label for="nim" class="form-label"> NIM </label><br>
                                <input type="number" name="nim" require="required">
                            </div>
                            <div class="mb-3">
                                <label for="grade" class="form-label"> Nilai</label><br>
                                <input type="text" name="grade" require="required">
                            </div>
                            <div class="card-footer">
                              <div class="col-12">
                              <a a href="/khs" class="btn btn-secondary">kembali</a>
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
