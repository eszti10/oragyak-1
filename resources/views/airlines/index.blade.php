@extends("layout")
@section('content')
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
      <td>törlés</td>
      <td>módósítás</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection