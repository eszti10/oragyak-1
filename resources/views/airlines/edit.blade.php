@extends("layout")
@section('content')
<form action="/legitarsasag/{{$adat->id}}" method="POST">
<<<<<<< HEAD
    @csrf
    @method('PUT')
=======
    @method('PUT')
    @csrf
>>>>>>> b0a30e549f7b01362544e360e4da41ed380044df
    <div class="form-group">
        <label for="name">Repülő társaság neve:</label>
        <input type="text" class="form-control" name="name" value="{{$adat->name}}" id="name" placeholder="Repülő társaság neve">
    </div>
    <div class="form-group">
        <label for="orion">Repülő társaság központ:</label>
<<<<<<< HEAD
        <input type="text" class="form-control" name="origin" value="{{$adat->origin}}"id="origin" placeholder="Repülő társaság központ">
    </div>
    <button type="submit" class="btn btn-primary">Frissítés</button>

=======
        <input type="text" class="form-control" name="origin" value="{{$adat->origin}}" id="origin" placeholder="Repülő társaság központ">
    </div>
    <button type="submit" class="btn btn-primary">Frissítés</button>
>>>>>>> b0a30e549f7b01362544e360e4da41ed380044df
</form>
@endsection
