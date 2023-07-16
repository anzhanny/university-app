<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD Code Circle</title>
</head>
<body>
    <h3>Data information</h3>

    <br />
    <br />

    <form action="/information/store" method="post">
        {{ csrf_field() }}
        Name <input type="text" name="name" require="required">     <br /> <br />
        Title <input type="text" name="title" require="required">     <br /> <br />
        Deskripsi <input type="text" name="description" require="required">     <br /> <br />
        <input type="submit" value="Save Data">
        <button  class="btn btn-primary btn-sm">
        <a href="/information">kembali</a>
        </button>
        </form>
</body>
</html>