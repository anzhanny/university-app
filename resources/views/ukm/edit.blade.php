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
                <center><h3 class="text-center mb-4">Edit Ukm</h3></center>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/ukm/update/{{ $activities->id}}" method="post" >
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <input type="hidden" name="id" value="{{ $activities->id}}">  
                <div class="card-body">
                  <div class="form-group">
                    <label for="no">No</label>
                    <input type="number" class="form-control" name="no" required="required" value="{{ $activities->no}}" placeholder="no">
                  </div>
                  <div class="form-group">
                    <label for="nm_ukm">Nama Ukm</label>
                    <input type="text" class="form-control" name="nm_ukm" required="required" value="{{ $activities->nm_ukm}}" placeholder="name ukm">
                  </div>
                  <div class="form-group">
                    <label for="activity_date">Waktu Kegiatan</label>
                    <input type="text" class="form-control" name="activity_date" required="required" value="{{ $activities->activity_date}}" placeholder="activity date">
                  </div>
                  <div class="form-group">
                    <label for="activity_place">Tempat Kegiatan</label>
                    <input type="text" class="form-control" name="activity_place" required="required" value="{{ $activities->activity_place}}" placeholder="activity place">
                  </div>
                <!-- /.card-body -->

                    <div class="card-footer">
                        <div class="col-12">
                            <a a href="/ukm" class="btn btn-secondary">Cancel</a>
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