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
                <center><h3 class="p-3 mb-2 bg-success text-white">Edit Faculty</h3></center>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
    <form action="/faculty/update/{{$faculties->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" required name="id" value="{{$faculties->id}}"> 
        <div class="card-body">
            <div class="form-group">
                <label for="no">No</label>
                <input type="number" class="form-control" name="no" required="required" value="{{ $faculties->no}}" placeholder="no">
            </div>
            <div class="form-group">
                <label for="nm_fac">Nama Fakultas</label>
                <input type="text" class="form-control" name="nm_fac" required="required" value="{{ $faculties->nm_fac}}" placeholder="nm fac">
            </div>
            <div class="form-group">
                <label for="amount_lecturer">Jml Dosen</label>
                <input type="number" class="form-control" name="amount_lecturer" required="required" value="{{ $faculties->amount_lecturer}}" placeholder="amount lecturer">
            </div>
            <div class="form-group">
                <label for="amount_student">Jml Mahasiswa</label>
                <input type="number" class="form-control" name="amount_student" required="required" value="{{ $faculties->amount_student}}" placeholder="amount_student">
            </div>
            <div class="form-group">
                <label for="amount_major">Jml Jurusan</label>
                <input type="number" class="form-control" name="amount_major" required="required" value="{{ $faculties->amount_major}}" placeholder="amount_major">
            </div>

            <div class="card-footer">
                <div class="col-12">
                    <a a href="/faculty" class="btn btn-secondary">Cancel</a>
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