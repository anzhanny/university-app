<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <center><h1 class="text-center mb-4"> Data Room</h1></center>
    <form action="/room/store" method="post">
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
                                <label for="cd_room" class="form-label">Kd ruangan </label><br>
                                <input type="text" name="cd_room" require="required">
                            </div>
                            <div class="mb-3">
                                <label for="nm_room" class="form-label">Nama ruangan</label><br>
                                <input type="text" name="nm_room" require="required">
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label><br>
                                <input type="number" name="status" require="required">
                            </div>

                            <div class="card-footer">
                              <div class="col-12">
                              <a a href="/room" class="btn btn-secondary">kembali</a>
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