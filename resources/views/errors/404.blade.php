@extends('home')
@section('title')
Sayfa Bulunamadı
@endsection
@section('description')
En güncel bedava bahis siteleri bonuslarına sayfamızdan ulaşabilirsiniz. Bahis sitelerini ayrıntılı inceleyerek size en uygun olan bedava bonus sitelerini bulabilirsiniz.
@endsection
@section('content')
       <div class="innner_banner">
        <div class="container">
            <h3>404 Bulunamadı</h3>
            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}">Anasayfa</a></li>
                <li class="active"><span>404 Sayfa Bulunamadı</span></li>
            </ul>
        </div>
    </div>
    <!--Inner Banner End-->
    <div class="kode_content_wrap">
        <section class="kf_404page">
            <div class="container">
                <div class="kf_404_thumb">
                    <h4>4<span>0</span>4</h4>
                    <h5>Hata</h5>
                </div> 
                <div class="kf_404_text">
                    <h5>Opps!! Aradığınız sayfa sistemimizde bulunmamakta </h5>
                    <h6>Doğru sayfaya gitmek istediğinizden emin misiniz ?</h6>
                   

                    <div class="clear"></div>
                    <a class="btn-1" href="{{ url('/') }}">Anasayfaya Dön</a>
                </div>   
            </div>
        </section>
    </div>
    <!--Main Content Wrap End-->
    <!--ticker Wrap Start-->
    
    @endsection