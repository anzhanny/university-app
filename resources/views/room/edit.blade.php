<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Practice CRUD UNPASIM</title>
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
                <center><h3 class="text-center mb-4">Edit Room</h3></center>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
    <form action="/room/update/{{ $rooms->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value="{{ $rooms->id}}"> 
        <div class="card-body">
            <div class="form-group">
                <label for="no">No</label>
                <input type="number" class="form-control" name="no" required="required" value="{{ $rooms->no}}" placeholder="no">
            </div>
            <div class="form-group">
                <label for="cd_room">Kd Ruangan</label>
                <input type="text" class="form-control" name="cd_room" required="required" value="{{ $rooms->cd_room}}" placeholder="code room">
            </div>
            <div class="form-group">
                <label for="nm_room">Nama Ruangan</label>
                <input type="text" class="form-control" name="nm_room" required="required" value="{{ $rooms->nm_room}}" placeholder="name room">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="number" class="form-control" name="status" required="required" value="{{ $rooms->status}}" placeholder="status">
            </div>
            <div class="card-footer">
                        <div class="col-12">
                            <a a href="/room" class="btn btn-secondary">Cancel</a>
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