<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from kodeforest.net/html/gameplay/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Jul 2017 11:18:39 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - Ücretsiz Bahis</title>
    <meta name="description" content="@yield('description')">
    <!-- Bootstrap core CSS -->
    <link href="{{ url('css/bootstrap.css') }}" rel="stylesheet">
    <!-- DL Menu CSS -->
    <link href="{{ url('js/dl-menu/component.css') }}" rel="stylesheet">
    <!-- Slick Slider CSS -->
    <link href="{{ url('css/slick.css') }}" rel="stylesheet"/>
    <link href="{{ url('css/slick-theme.css') }}" rel="stylesheet"/>
    <!-- ICONS CSS -->
    <link href="{{ url('css/font-awesome.css') }}" rel="stylesheet">
	<link href="{{ url('css/svg-icons.css') }}" rel="stylesheet">
    <!-- Pretty Photo CSS -->
    <link href="{{ url('css/prettyPhoto.css') }}" rel="stylesheet">
    <!-- Typography CSS -->
    <link href="{{ url('css/typography.css') }}" rel="stylesheet">
    <!-- Widget CSS -->
    <link href="{{ url('css/widget.css') }}" rel="stylesheet">
    <!-- Shortcodes CSS -->
    <link href="{{ url('css/shortcodes.css') }}" rel="stylesheet">
	<!-- Custom Main StyleSheet CSS -->
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
	<!-- Color CSS -->
    <link href="{{ url('css/color.css') }}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{ url('css/responsive.css') }}" rel="stylesheet">
    <link rel="canonical" href="http://ucretsizbahis.com">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WDPFV9R');</script>
<!-- End Google Tag Manager -->
@yield('fbtags')
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=599c82b4a3155100110e7272&product=inline-share-buttons"></script>
<style type="text/css">
    .affix {
    bottom: 0;
    position:fixed;
}
</style>
  </head>

  <body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WDPFV9R"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!--kode Wrapper Start-->  
<div class="kode_wrapper"> 
	<!--Header 2 Wrap Start-->
    <header class="kode_header_2">
        <!--Header 2 Top Bar Start-->
        <div class="kf_top_bar">
            <div class="container">
                <div class="pull-left">
                    <ul class="kf_social2">
                        <li><a href="https://www.facebook.com/ucretsizbahiscom-1555055054515349" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/ucretsizbhs" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/ucretsizbhs/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
             <div class="kf_right_dec">
                    <ul class="kf_topdec">
                        <li><a href="{{ url('sss') }}">S.S.S</a></li>
                        <li><a href="{{ url('destek')}}">Destek</a></li>
                    </ul>
                    <ul class="kf_user">
                    @if(!Auth::check())
                        <li><a href="{{ url('register') }}"><i class="fa fa-lock"></i>Kayıt Ol</a></li>
                        @endif
                        @if(Auth::check())
                              <div class="dropdown" style="margin-top: -5px">
                                <a class="dropdown-toggle" style="color:#fff;font-weight: bold;margin-top: -5px;margin-left: 11px;" data-toggle="dropdown" href="#">{{ Auth::user()->name }}</a>
                                <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                  <li style="margin-top: -10px;margin-left: -20px;"><a href="#" style="color: #000">Profil Düzenle</a></li>
                                  <li style="margin-left: -20px;"><a href="{{ url('users/logout') }}" style="color: #000">Çıkış Yap</a></li>
                                </ul>
                              </div>
                                                    
                        @else
                           <li><a href="{{ url('login') }}">Giriş Yap</a></li>
                        @endif
                    </ul>
                  
                </div>
            </div>
        </div>
        <!--Header 2 Top Bar End-->
        <div class="container">
            <!--Logo Bar Start-->
            <div class="kode_logo_bar">
                <!--Logo Start-->
                <div class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ url('images/logo.png') }}" alt="Ücretsiz Bahis - Bedava Bonus Veren Bahis Siteleri">
                    </a>
                </div>
                <!--Logo Start-->
                <!--Navigation Wrap Start-->
                <div class="kode_navigation">
                    <!--Navigation Start-->
                    <ul class="nav">
                        <li><a href="{{ url('/') }}">Anasayfa</a></li>
                       
                  
                        <li class="kf_megamenu">
                            <a href="#">Bahis Siteleri</a>
                            <div class="megamenu_dec container">
                                @foreach($category as $cat)
                                <div class="col-md-3">
                                    <h5 class="megamenu_hd">{{ $cat->name  }}</h5>
                                    <ul class="megamenu_list">
                                       @foreach($cat->post->slice(0,5)->sortby('priority') as $post)
                                        <li><a href="{{ url('inceleme/'.$post->slug) }}">{{ $post->marka }}</a></li>
                                        @endforeach
                                        <li><a href="{{ url('incelemeler/'.$cat->slug) }}" style="color: #ff0000">Tümünü Gör</a></li>
                                    </ul>
                                </div>
                                @endforeach
                                <div class="col-md-3">
                                    <h5 class="megamenu_hd">İlk Üyelik Bonusu</h5>
                                    <ul class="kf_table">
                                        <li>
                                            <div class="table_no">
                                                <span>1</span>
                                            </div>
                                            <div class="team_logo">
                                                <a href="{{ url('inceleme/klasbahis') }}">Klasbahis</a>
                                            </div>
                                            <div class="team_point">
                                                <span>%25 <br>500 TL</span>
                                            </div>
                                        </li>
                                          <li>
                                            <div class="table_no">
                                                <span>2</span>
                                            </div>
                                            <div class="team_logo">
                                                <a href="{{ url('inceleme/bixbet') }}">Bixbet</a>
                                            </div>
                                            <div class="team_point">
                                                <span>%100 350 TL</span>
                                            </div>
                                        </li>
                                          <li>
                                            <div class="table_no">
                                                <span>3</span>
                                            </div>
                                            <div class="team_logo">
                                                <a href="{{ url('inceleme/supertotobet') }}">SupertotoBet</a>
                                            </div>
                                            <div class="team_point">
                                                <span>%100 300 TL</span>
                                            </div>
                                        </li>
                                       
                                          <li>
                                            <div class="table_no">
                                                <span>4</span>
                                            </div>
                                            <div class="team_logo">
                                                <a href="{{ url('inceleme/rbet') }}">Rbet</a>
                                            </div>
                                            <div class="team_point">
                                                <span>%100 500 TL</span>
                                            </div>
                                        </li>

                                          <li>
                                            <div class="table_no">
                                                <span>5</span>
                                            </div>
                                            <div class="team_logo">
                                                <a href="{{ url('inceleme/grosbet') }}">Grosbet</a>
                                            </div>
                                            <div class="team_point">
                                                <span>%100 550 TL</span>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </li>
                         <li><a href="{{url('incelemeler')}}">İncelemeler</a></li>
                         <li><a href="{{ url('bedava-bonuslar') }}">Bedava Bonuslar</a></li>
                    </ul>
                    <!--DL Menu Start-->
                    <div id="kode-responsive-navigation" class="dl-menuwrapper">
                        <button class="dl-trigger">Menü</button>
                        <ul class="dl-menu">
                            <li><a href="{{ url('/') }}">Anasayfa</a></li>
                                                       
                            <li class="menu-item kode-parent-menu"><a href="#">Bahis Siteleri</a>
                                <ul class="dl-submenu">
                                    @foreach($category as $cat)
                                    <li>
                                        <a href="#">{{ $cat->name }}</a>
                                        <ul class="dl-submenu">
                                           @foreach($cat->post->slice(0,10) as $post)
                                        <li><a href="{{ url('inceleme/'.$post->slug) }}">{{ $post->marka }}</a></li>
                                        @endforeach
                                        </ul>
                                    </li>
                                    @endforeach
                                   
                                    
                                </ul>
                            </li>
                              <li><a href="{{url('incelemeler')}}">İncelemeler</a></li>
                            <li><a href="{{  url('bedava-bonuslar')}}">Bedava Bonus</a></li>
                        </ul>
                    </div>

                    <!--DL Menu END-->
                    <!--Navigation End-->
                   
                </div>
                <!--Navigation Wrap End-->
            </div>
            <!--Logo Bar End-->
        </div>
    </header>