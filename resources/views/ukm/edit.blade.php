<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD UNPASIM</title>
</head>
<body>
    <h3>Edit UKM</h3>
    <br />

    <form action="/ukm/update/{{ $activities->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value="{{ $activities->id}}">     <br /> 
        No <input type="number" required name="no" value="{{ $activities->no }}"> <br />     <br /> <br />
        Nama Ukm <input type="text" required name="nm_ukm" value="{{ $activities->nm_ukm }}">     <br /> <br />
        Waktu Kegiatan <input type="text" required name="activity_date" value="{{ $activities->activity_date }}">     <br /> <br />
        Tempat Kegiatan <input type="text" required name="activity_place" value="{{ $activities->activity_place }}">     <br /> <br />
        <input type="submit" value="Save Data">
        <button  class="btn btn-primary btn-sm">
        <a href="/ukm">kembali</a>
        </button>


    </form>
</body>
</html>