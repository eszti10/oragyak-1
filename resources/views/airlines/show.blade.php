@extends("layout")
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">Száma</th>
      <th scope="col">Név</th>
      <th scope="col">Ára</th>
      <th scope="col">Helyzete</th>
      <th scope="col">Épp repül</th>
      <th scope="col">Törlés</th>
      <th scope="col">Módosítás</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($adat as $sor)
      <th><a href="/utasok/{{$sor->id}}">{{$sor->number}}</a></th>
      <td>{{$sor->name}}</td>
      <td>{{$sor->price}} ft</td>
      <td>{{$sor->destination}}</td>
      @if ($sor->active == "1")
      <td>igen</td>
      @endif
      @if ($sor->active == "0")
      <td>Nem</td>
      @endif
      <td>törlés</td>
      <td>módósítás</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
