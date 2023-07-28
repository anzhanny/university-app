<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Practice CRUD UNPASIM</title></head>
</head>
<body>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <center><h3 class="text-center mb-4">Edit Cost</h3></center>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
    <form action="/cost/update/{{ $costs->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value="{{ $costs->id}}">
        <div class="card-body">
            <div class="form-group">
                <label for="nm_major">Nama Jurusan </label>
                <input type="text" class="form-control" name="nm_major" required="required" value="{{ $costs->nm_major}}" placeholder="nm_major">
            </div>
            <div class="form-group">
                <label for="nip">UP3</label>
                <input type="number" class="form-control" name="up3" required="required" value="{{ $costs->up3}}" placeholder="up3">
            </div>
            <div class="form-group">
                <label for="nip">SDP2</label>
                <input type="number" class="form-control" name="sdp2" required="required" value="{{ $costs->sdp2}}" placeholder="sdp2">
            </div>
            <div class="form-group">
                <label for="nip">BPP</label>
                <input type="number" class="form-control" name="bpp" required="required" value="{{ $costs->bpp}}" placeholder="bpp">
            </div>
            <div class="card-footer">
                <div class="col-12">
                    <a a href="/cost" class="btn btn-secondary">Cancel</a>
                        <input type="submit" value="Save Changes" class="btn btn-success float-right">
                </div>
                    </div>
            <!-- /.card -->
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
</body>
</html>