@extends("layout")
@section('content')
<a href="/legitarsasag/create">Légitásaság létrhozása</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Neve</th>
      <th scope="col">Telephelye</th>
      <th scope="col">Törlés</th>
      <th scope="col">Módosítás</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($adat as $sor)
      <th><a href="/legitarsasag/{{$sor->id}}">{{$sor->name}}</a></th>
      <td>{{$sor->origin}}</td>
      <td>
        <form action="legitarsasag/{{$sor->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input class="btn btn-danger btn-block" type="submit" value="törlés">
        </form>
    </td>
      <td>
        <form action="legitarsasag/{{$sor->id}}/edit">

            <input class="btn btn-info btn-block" type="submit" value="módosítás">
            </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
