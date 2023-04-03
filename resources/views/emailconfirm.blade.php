@extends('home')
@section('content')
<div class=”container”>
<div class=”row”>
<div class=”col-md-8 col-md-offset-2">
<div class=”panel panel-default”>
<div class=”panel-heading”>Üyeliğiniz Onaylandı</div>
<div class=”panel-body”>
E-Mail Adresiniz Doğrulandı. Giriş Yapmak İçin <a href=”{{ url('/login') }}”>Giriş Yap'a</a> Tıklayınız.
</div>
</div>
</div>
</div>
</div>
@endsection
