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
            <h3>Bonuslar</h3>
            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}">Anasayfa</a></li>
                <li><a href="{{ url('incelemeler') }}">Bonuslar </a></li>
                <li class="active"><span>Tüm Bonuslar</span></li>
            </ul>
        </div>
    </div>
    <!--Inner Banner End-->
 <div class="kode_content_wrap">
        <section class="kf_blog1_sidebar">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <!--Featured 3 Slider Start-->
                        <div class="kf_featured_wrap3">
                            <div class="row">
                                
                                @foreach($posts as $inceleme)
                                <div class="col-md-6">
                                    <!--Featured 3 thumb Start-->
                                    <div class="kf_featured_thumb">
                                        <figure>
                                             <a href="{{ url('inceleme/'.$inceleme->slug) }}"><img src="{{ url('uploads/posts/'.$inceleme->image )}}" class="img-responsive"  alt="{{ $inceleme->title }}"></a>
                                        </figure>
                                        <div class="text_wrper">
                                            <div class="text">
                                                <h6><?php $a = $inceleme->bonus;
                                            $b = explode(",", $a);
                                            echo $b[0];
                                             ?></h6>                                
                                        <h2>{{ $inceleme->marka }}</h2>
                                        <span style="color:#337ab7 !important"> Altyapı : {{ $inceleme->categories->name }}</span>
                                        <span>{{ date_format($inceleme->created_at, 'd-m-Y') }}</span>
                                        <p>{!! str_limit($inceleme->text,270) !!} </p>
                                        <a class="btn_2" href="{{ url('inceleme/'.$inceleme->slug) }}">İncele</a>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <!--Featured 3 thumb End-->
                                </div>
                            
                                @endforeach

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