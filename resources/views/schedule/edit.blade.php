<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practice CRUD UNPASIM</title>
</head>
<body>
    <h3>Edit Schedule</h3>


    <br />

    <form action="/schedule/update/{{ $schedules->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
        <input type="hidden" name="id" value="{{ $schedules->id}}">     <br /> 
        No <input type="number" required name="no" value="{{ $schedules->no }}"> <br />     <br /> <br />
        Kd matkul <input type="text" required name="cd_subject" value="{{ $schedules->cd_subject }}">     <br /> <br />
        Kd ruangan <input type="text" required name="cd_room" value="{{ $schedules->cd_room }}">     <br /> <br />
        NIP <input type="number" required name="nip" value="{{ $schedules->nip }}">     <br /> <br />
        Waktu <input type="text" required name="time" value="{{ $schedules->time }}">     <br /> <br />
        <input type="submit" value="Save Data">    
        <button  class="btn btn-primary btn-sm">
    <a href="/schedule">kembali</a>
    </button>


    <br />
    </form>
</body>
</html>