@extends("layout")
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Név</th>
      <th scope="col">Születési idő</th>
      <th scope="col">Személyi szám</th>
    </tr>
  </thead>
  <tbody>
    @foreach($adat as $sor)
    <tr>
      <th>{{$sor->name}}</th>
      <td>{{$sor->bday}}</td>
      <td>{{$sor->personalid}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection