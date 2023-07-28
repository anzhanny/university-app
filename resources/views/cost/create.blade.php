<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta class="form-control" name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<center><h3 class="text-center mb-4"> Data cost</h3></center>
    <form action="/cost/store" method="post">
        {{ csrf_field() }}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="no" class="form-label">Nama Jurusan</label><br>
                                <input type="text" class="form-control" class="form-control" name="nm_major" require="required">    
                            </div>
                            <div class="form-group">
                                <label for="up3" class="form-label">UP3</label><br>
                                <input type="number" class="form-control" name="up3" require="required"> 
                            </div>
                                <div class="form-group">
                                <label for="sdp2" class="form-label">SDP2</label><br>
                            <input type="number" class="form-control" name="sdp2" require="required"> 
                            </div>
                                <div class="form-group">
                                <label for="bpp" class="form-label">BPP</label><br>
                            <input type="number" class="form-control" name="bpp" require="required"> 
                            </div>
                            <div class="card-footer">
                              <div class="col-12">
                              <a a href="/cost" class="btn btn-secondary">kembali</a>
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