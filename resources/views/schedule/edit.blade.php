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
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <center><h3 class="p-3 mb-2 bg-success text-white">Edit Schedule</h3></center>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
    <form action="/schedule/update/{{ $schedules->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value="{{ $schedules->id}}">
        <div class="card-body">
            <div class="form-group">
                <label for="no">No</label>
                <input type="number" class="form-control" name="no" required="required" value="{{ $schedules->no}}" placeholder="no">
            </div>
            <div class="form-group">
                <label for="cd_subject">Kd Matkul</label>
                <input type="text" class="form-control" name="cd_subject" required="required" value="{{ $schedules->cd_subject}}" placeholder="cd_subject">
            </div>
            <div class="form-group">
                <label for="cd_room">Kd Ruangan</label>
                <input type="text" class="form-control" name="cd_room" required="required" value="{{ $schedules->cd_room}}" placeholder="cd_room">
            </div>
            <div class="form-group">
                <label for="nip">NIP</label>
                <input type="number" class="form-control" name="nip" required="required" value="{{ $schedules->nip}}" placeholder="nip">
            </div>
            <div class="form-group">
                <label for="time">Waktu</label>
                <input type="datetime-local" class="form-control" name="time" required="required" value="{{ $schedules->time}}" placeholder="time">
            </div>

            <div class="card-footer">
                        <div class="col-12">
                            <a a href="/schedule" class="btn btn-secondary">Cancel</a>
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