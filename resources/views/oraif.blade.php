@extends("layout")
@section('content')
<h1>Órai feladat</h1>
    <p>Név: {{$adat->Nev}}</p>
    <p>Cim: {{$adat->Cim}}</p>
    <p>Évfolyam: {{$adat->Evfolyam}}</p>
@endsection