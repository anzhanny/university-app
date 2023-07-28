<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta class="form-control" name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <center><h3 class="text-center mb-4"> Data Information</h3></center>
    <form action="/information/store" method="post">
        {{ csrf_field() }}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label><br>
                                <input type="text" class="form-control" name="name" require="required">                             </div>
                            <div class="form-group">
                                <label for="title" class="form-label">Judul</label><br>
                                <input type="text" class="form-control" name="title" require="required"> 
                            </div>
                            <div class="form-group">
                                <label for="description" class="form-label">Deskripsi</label><br>
                                <input type="text" class="form-control" name="description" require="required">
                            </div>


                            <div class="card-footer">
                              <div class="col-12">
                              <a a href="/information" class="btn btn-secondary">kembali</a>
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