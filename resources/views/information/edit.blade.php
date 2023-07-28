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
        <div class="row justify-content-center">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <center><h3 class="text-center mb-4">Edit information</h3></center>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
    <form action="/information/update/{{ $informations->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value="{{ $informations->id}}"> 
        <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" required="required" value="{{ $informations->name}}" placeholder="name">
            </div>
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" class="form-control" name="title" required="required" value="{{ $informations->title}}" placeholder="title">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <input type="text" class="form-control" name="description" required="required" value="{{ $informations->description}}" placeholder="description">
            </div>
            <div class="card-footer">
                <div class="col-12">
                    <a a href="/information" class="btn btn-secondary">Cancel</a>
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