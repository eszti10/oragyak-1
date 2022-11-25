@extends("layout")
@section('content')
<form class="need-validation" novalidate  action="/utasok" method="POST" name="letrehozo" onSubmit="return validdateForm()">
    @csrf
    <div class="form-group">
    <label for="name">Utas neve:</label>
        <input for="validitionCustom1" type="text" class="form-control" name="name"  id="name" placeholder="Utas neve" required>
        <div class="valid-feedback">
            Megfelel.
        </div>
        <label for="name">Szemelyi szám:</label>
        <input type="text" class="form-control" name="szemszam" id="szemszam" placeholder="Személyi szám" required>
        <label for="name">Születési dátum:</label>
        <input type="date" class="form-control" name="szuldat" id="szuldat" placeholder="Születési dátum">
        <label for="name">Repülőgép:</label>
        <select id="repid" name="repid" class="form-control">
        @foreach($adat as $sor)
            <option value="{{$sor->id}}">neve:{{$sor->name}} száma:{{$sor->number}}</option>
        @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Küldés</button>
</form>

@stack("script")
@push('script')
<script>
    function validname(){
        let x=document.forms["letrehozo"]["name"].value;
        let x=document.forms["letrehozo"]["szemszam"].value;
       if(x=="")
       {
        alert("A neve kötelező megadni");
        return false;
       }
       if(y=="")
       {
        alert("A személyi számot kötelező megadni");
        return false;
       }
    }
</script>
<script>// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {  'use strict';  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');    // Loop over them and prevent submission
         var validation = Array.prototype.filter.call(forms, function(form) {      form.addEventListener('submit', function(event) {        if (form.checkValidity() === false) {          event.preventDefault();          event.stopPropagation();        }        form.classList.add('was-validated');      }, false);});}, false);})();
        </script>
@endpush
@endsection
