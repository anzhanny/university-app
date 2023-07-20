<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Practice CRUD UNPASIM</title>
</head>
<body>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <center><h3 class="p-3 mb-2 bg-success text-white">Edit Detail Subject</h3></center>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
    <form action="/detailsubject/update/{{ $detailsubjects->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value="{{ $detailsubjects->id}}"> 
        <div class="card-body">
            <div class="form-group">
                <label for="subject_id">ID Matkul</label>
                <input type="number" class="form-control" name="subject_id" required="required" value="{{ $detailsubjects->subject_id}}" placeholder="subject id">
            </div>
            <div class="form-group">
                <label for="lecturer_id">ID Dosen</label>
                <input type="number" class="form-control" name="lecturer_id" required="required" value="{{ $detailsubjects->lecturer_id}}" placeholder="lecturer id">
            </div>
            <div class="form-group">
                <label for="class_year">Tahun Ajaran</label>
                <input type="text" class="form-control" name="class_year" required="required" value="{{ $detailsubjects->class_year}}" placeholder="class_year">
            </div>

            <div class="card-footer">
                <div class="col-12">
                    <a a href="/detailsubject" class="btn btn-secondary">Cancel</a>
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