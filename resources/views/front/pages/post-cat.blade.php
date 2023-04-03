@extends('home')
@section('title')
{{$pc->name}} Bedava bonus ve İncelemeler
@endsection
@section('content')
    <div class="innner_banner">
        <div class="container">
            <h3>İncelemeler</h3>
            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}">Anasayfa</a></li>
                <li><a href="{{ url('incelemeler') }}">İncelemeler </a></li>
                <li class="active"><span>{{ $pc->name }}</span></li>
            </ul>
        </div>
    </div>
    <!--Inner Banner End-->
  <div class="kode_content_wrap">
        <section class="kf_blog3_sidebar">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <!--Featured 2 Slider Start-->
                        <div class="kf_featured_wrap3">
                            <!--Featured 2 thumb Start-->
                           @foreach($posts as $inceleme)
                            <div class="kf_featured_thumb">
                                <figure>
                                    <img src="{{ url('uploads/posts/'.$inceleme->image )}}" class="img-responsive" height="236px" alt="{{ $inceleme->title }}">
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
                                        <p>{!! str_limit($inceleme->text,450) !!} </p>
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

                        </div>
                        <!--Featured 2 Slider End-->
                        <!--Kf Pagination Start-->
                        <div class="kode-pagination text-right">
                            {{ $posts->links() }}
                        </div>
                        <!--Kf Pagination End-->
                    </div>
                     @section('cat')
                     <div class="widget widget_category2">
                            <!--Heading 5 Start-->
                            <div class="kf_h5">
                                <h5>ALTYAPILAR</h5>
                            </div>
                            <!--Heading 5 End-->
                            <div class="kf_border-2">
                                <ul class="widget_ul">
                                    @foreach($categories as $c)
                                    <li><a href="{{ route('front.post-cat',$c->slug) }}">{{ $c->name }}  ({{ $c->post->count() }})</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endsection
                   @include('front.partials.sidebar')
                </div>
            </div>
        </section>
    </div>
    <!--Main Content Wrap End-->
    <!--ticker Wrap Start-->
    
    @endsection