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
                <center><h3 class="text-center mb-4">Edit lecturer</h3></center>
              </div>

    <form action="/lecturer/update/{{ $lectures->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value="{{ $lectures->id}}">
        <div class="card-body">
            <div class="form-group">
                <label for="no">No</label>
                <input type="number" class="form-control" name="no" required="required" value="{{ $lectures->no}}" placeholder="no">
            </div>
            <div class="form-group">
                <label for="nip">NIP</label>
                <input type="number" class="form-control" name="nip" required="required" value="{{ $lectures->nip}}" placeholder="nip">
            </div>
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" required="required" value="{{ $lectures->name}}" placeholder="name">
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <input type="text" class="form-control" name="address" required="required" value="{{ $lectures->address}}" placeholder="address">
            </div>
            <div class="form-group">
                <label for="religion">Agama</label>
                <input type="text" class="form-control" name="religion" required="required" value="{{ $lectures->religion}}" placeholder="religion">
            </div>
            <div class="form-group">
                <label for="date_year">Tanggal Lahir</label>
                <input type="text" class="form-control" name="date_year" required="required" value="{{ $lectures->date_year}}" placeholder="date year">
            </div>
            <div class="form-group">
                <label for="gender">Jenis Kelamin</label>
                <input type="text" class="form-control" name="gender" required="required" value="{{ $lectures->gender}}" placeholder="gender">
            </div>
            <div class="form-group">
                <label for="tertiary_education">Pendidikan terakhir</label>
                <input type="text" class="form-control" name="tertiary_education" required="required" value="{{ $lectures->tertiary_education}}" placeholder="tertiary education">
            </div>
                <!-- /.card-body -->

                <div class="card-footer">
                        <div class="col-12">
                            <a a href="/lecturer" class="btn btn-secondary">Cancel</a>
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