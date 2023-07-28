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
                <center><h3 class="text-center mb-4">Edit Academic</h3></center>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
    <form action="/academic/update/{{ $academics->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value="{{ $academics->id}}">
        <div class="card-body">
            <div class="form-group">
                <label for="no">No </label>
                <input type="number" class="form-control" name="no" required="required" value="{{ $academics->no}}" placeholder="no">
            </div>
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="number" class="form-control" name="nim" required="required" value="{{ $academics->nim}}" placeholder="nim">
            </div>
            <div class="form-group">
                <label for="nm_student">Nama Mahasiswa</label>
                <input type="text" class="form-control" name="nm_student" required="required" value="{{ $academics->nm_student}}" placeholder="name student">
            </div>
            <div class="form-group">
                <label for="cd_subject">Kode Matkul</label>
                <input type="text" class="form-control" name="cd_subject" required="required" value="{{ $academics->cd_subject}}" placeholder="code subject">
            </div>
            <div class="form-group">
                <label for="nm_subject">Matakuliah</label>
                <input type="text" class="form-control" name="nm_subject" required="required" value="{{ $academics->nm_subject}}" placeholder="nm_subject">
            </div>
            <div class="form-group">
                <label for="sks">SKS</label>
                <input type="number" class="form-control" name="sks" required="required" value="{{ $academics->sks}}" placeholder="sks">
            </div>
            <div class="form-group">
                <label for="semester">Semester</label>
                <input type="number" class="form-control" name="semester" required="required" value="{{ $academics->semester}}" placeholder="semester">
            </div>
            <div class="form-group">
                <label for="grade">Nilai</label>
                <input type="text" class="form-control" name="grade" required="required" value="{{ $academics->grade}}" placeholder="grade">
            </div>
            <div class="card-footer">
                <div class="col-12">
                    <a a href="/academic" class="btn btn-secondary">Cancel</a>
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