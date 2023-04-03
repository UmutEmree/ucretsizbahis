@extends('home')
@section('content')
@section('title')
Bedava Bonus Veren Bahis Siteleri
@endsection
@section('description')
Para yatırmadan bedava bonus veren bahis sitelerinin sürekli güncellenen listesini ücretsiz bahis farkıyla sitemizde bulabilirsiniz.
@endsection

<div class="kode_banner_1">
        <div class="main_banner">
            <div>
                <!--Banner Thumb START-->
             @foreach($sliders as $slider)
               <div class="thumb">
                <a href="{{ $slider->link }}" target="_blank">     <img src="{{ url('uploads/sliders/'.$slider->image) }}" alt="{{ $slider->name }}"></a>
                  <a href="{{ $slider->link }}" target="_blank">    <div class="container">
                        <div class="banner_caption text-center">
                         <a href="{{$slider->link }}" target="_blank" class="btn-1" tabindex="0">Üye Ol</a>
                           
                        </div>
                    </div></a>
                </div>
             @endforeach
                <!--Banner Thumb End-->
            </div>
         
           
        </div>
    </div>
  
    <!--Banner Map Wrap End-->
    <div class="kf_ticker-wrap">
        <div class="container">
            <div class="kf_ticker">
                <span>Duyurular</span>
                <div class="kf_ticker_slider">
                    <ul class="ticker">
                        <li><p> En yüksek bonuslar ucretsizbahis.com da ! </p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Main Content Wrap Start-->
    <div class="kode_content_wrap">
        <!--Result Slider Start-->
        <div class="result_slide_wrap">
            <div class="result_slider">
               @foreach($showcase as $sc)
                <div class="slide">
                    <!--Result Thumb Start-->

                    <div class="kf_result_thumb">
                      <div class="kf_result">
                           <img src="{{ url('uploads/showcases/'.$sc->image) }}" width="300" alt="{{ $sc->name }}" height="212">
                      </div>
                      <a href="{{ $sc->link }}" target="_blank">Üye Ol</a>
                    </div>    
                    <!--Result Slider Thumb End--> 
                </div>
               @endforeach
            </div>
        </div>
        <!--Result Slider End-->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <!--Featured Slider Start-->
                        <div class="kf_featured_slider">
                            <!--Heading 1 Start-->
                            <h6 class="kf_hd1">
                                <span>Haftanın Bonusları</span>
                            </h6>
                            <!--Heading 1 END-->
                            <div class="featured_slider">
                              @foreach($haftaninbonusu as $hb)
                                <div>
                                    <div class="kf_featured_thumb">
                                        <figure>
                                            <img src="{{ url('uploads/posts/'.$hb->image)}}" class="img-responsive" style="height: : 350px"  alt="{{ $hb->title }}">
                                        </figure>
                                        <div class="text">
                                            <h6>{{ $hb->name }}</h6>                                
                                            <h2><a href="{{ url('inceleme/'.$hb->slug)}}">{{ $hb->title }}</a></h2>
                                            <span><?php $a = $hb->bonus;
                                            $b = explode(",", $a);
                                            echo $b[0];
                                             ?></span>
                                        </div>
                                    </div>
                                </div>
                              @endforeach  
                            </div>
                        </div>
                        <!--Featured Slider End-->
                        <!--Featured 2 Slider Start-->
                        <div class="kf_featured_wrap2">
                            <!--Featured 2 thumb Start-->
                          @foreach($incelemeler as $inceleme)
                            <div class="kf_featured_thumb">
                                <figure>
                                    <img src="{{ url('uploads/posts/'.$inceleme->image )}}" alt="{{ $inceleme->title }}" height="236px" >
                                </figure>
                                <div class="text_wrper">
                                    <div class="text">
                                        <h6><?php $a = $inceleme->bonus;
                                            $b = explode(",", $a);
                                            echo $b[0];
                                             ?></h6>                                
                                        <h2>{{ $inceleme->marka }}</h2>
                                        <span>{{ date_format($inceleme->created_at, 'd-m-Y') }}</span>
                                        <p>{!! str_limit($inceleme->text,250) !!} </p>
                                        <a class="btn_2" href="{{ url('inceleme/'.$inceleme->slug) }}">İncele</a>
                                    </div>
                                    <div class="thumb_footer">
                                        
                                        <!--<ul class="blog_meta">
                                            <li>
                                                <span><i class="fa fa-eye"></i>169</span>
                                            </li>
                                            <li>
                                                <span class="heart"><i class="fa fa-heart-o"></i>477</span>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-comment-o"></i>09</a>
                                            </li>
                                        </ul> -->
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!--Featured 2 thumb End-->
                            <!--Featured 2 thumb Start-->
                           
                            <!--Featured 2 thumb End-->
                        </div>
                        <!--Featured 2 Slider End-->
                        <!--Featured 3 Slider Start-->
                                                <!--Featured 3 Slider End-->
                        <!--Featured 2 Slider Start-->
                     
                        <!--Featured 2 Wraper End-->
                        <!--Add Banner Start-->
                        <div class="add_banner" id="altbanner">
                           <a href="http://wljustinbet.adsrv.eacdn.com/C.ashx?btag=a_726b_177c_&affid=326&siteid=726&adid=177&c="><iframe scrolling='no' frameBorder='0' style='padding:0px; margin:0px; border:0px;border-style:none;border-style:none;' width='728' height='90' src="http://wljustinbet.adsrv.eacdn.com/I.ashx?btag=a_726b_177c_&affid=326&siteid=726&adid=177&c=" ></iframe></a>
                        </div>
                        <!--Add Banner End-->
                        <!--Featured 4 Wraper Start-->
                      
                        <!--Featured 4 Wraper End-->
                    </div>
                  @include('front.partials.sidebar')
                </div>
            </div>
        </section>
    </div>
    <!--Main Content Wrap End-->
    <!--ticker Wrap Start-->
 
 
    @endsection