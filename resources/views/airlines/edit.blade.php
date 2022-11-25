@extends("layout")
@section('content')
<form action="/legitarsasag/{{$adat->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Repülő társaság neve:</label>
        <input type="text" class="form-control" name="name" value="{{$adat->name}}" id="name" placeholder="Repülő társaság neve">
    </div>
    <div class="form-group">
        <label for="orion">Repülő társaság központ:</label>
        <input type="text" class="form-control" name="origin" value="{{$adat->origin}}"id="origin" placeholder="Repülő társaság központ">
    </div>
    <button type="submit" class="btn btn-primary">Frissítés</button>

</form>
@endsection
