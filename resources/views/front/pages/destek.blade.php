@extends('home')
@section('title')
Güncel Bedava Bahis Sitesi Bonusları
@endsection
@section('description')
En güncel bedava bahis siteleri bonuslarına sayfamızdan ulaşabilirsiniz. Bahis sitelerini ayrıntılı inceleyerek size en uygun olan bedava bonus sitelerini bulabilirsiniz.
@endsection
@section('content')
    <div class="innner_banner">
        <div class="container">
            <h3>Sıkça Sorulan Sorular</h3>
            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}">Anasayfa</a></li>
                <li><a href="{{ url('destek') }}">Destek </a></li>
                <li class="active"><span>Destek Merkezi</span></li>
            </ul>
        </div>
    </div>
    <!--Inner Banner End-->
 <div class="kode_content_wrap">
        <section class="kf_blog1_sidebar">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                              {{ session()->get('message') }}
                            </div>
                        @endif
                        <!--Featured 3 Slider Start-->
                        <div class="kf_featured_wrap3">
                        
                        <div class="kf_form">
                            <div class="kf_form_hd">
                                <h3>Destek Talep Formu</h3>
                                <p>Sorunlarınız ile ilgili destek talebi oluşturmak için formu doldurunuz.</p>
                            </div>
                            <form action="{{ route('talep.gonder') }}" method="POST">
                           <input type="hidden" name=""> {{ csrf_field() }}
                                <div class="input_dec">
                                    <input name="adsoyad" placeholder="Adınız Soyadını" type="text" required="">
                                </div>
                                <div class="input_dec">
                                    <input placeholder="Konu" type="text" name="konu" required>
                                </div>
                               
                                <div class="input_dec">
                                    <input placeholder="E-Mail" type="text" name="email" required>
                                </div>
                                <div class="input_textarea">
                                    <textarea placeholder="Mesaj" name="mesaj" required></textarea>
                                </div>
                                <input class="input-btn" type="submit" value="Submit">
                            </form>
                        </div>
                 

                    </div>
                        <!--Featured 3 Slider End-->
                    </div>
                   @include('front.partials.sidebar')
                </div>
            </div>
        </section>
    </div>
    <!--Main Content Wrap End-->
    <!--ticker Wrap Start-->
    
    @endsection