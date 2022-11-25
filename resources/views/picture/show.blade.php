<<<<<<< HEAD
@extends("layout")
@section('content')
@foreach ($keplekeres as $kep)
<img src="{{$kep->filelocation}}" alt="">

=======
@extends('layout')
@section('content')
@foreach ($keplekeres as $kep)
    <img src="{{$kep->filelocation}}" alt="">
>>>>>>> b0a30e549f7b01362544e360e4da41ed380044df
@endforeach
@endsection
