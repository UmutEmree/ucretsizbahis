@extends('home')
@section('fbtags')
<meta property="og:url"           content="{{url()->current()}}" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="{{ $post->title }}" />
<meta property="og:description"   content="{!! strip_tags(str_limit($post->text,200)) !!}" />
<meta property="og:image"         content="{{url('uploads/posts/'.$post->image) }}" />
@endsection
@section('title')
{{ $post->title }}
@endsection
@section('description')
{{ $post->meta}}
@endsection
@section('content')
    <div class="innner_banner">
        <div class="container">
            <h3>{{ $post->marka }}</h3>
            <ul class="breadcrumb">
                <li><a href="{{ url('/') }}">Anasayfa</a></li>
                <li><a href="{{ url('incelemeler') }}">{{ $post->type }} </a></li>
                <li class="active"><span>{{ $post->name }}</span></li>
            </ul>
        </div>
    </div>
    <!--Inner Banner End-->
    <div class="kode_content_wrap">
        <section class="blog_detail_wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="kf_blog_detail">
                            <!--Featured 2 Slider Start-->
                            <div class="kf_blog_detail_thumb">
                                <!--Featured 2 thumb Start-->
                                <div class="kf_featured_thumb">
                                    <figure>
                                        <img src=" {{url('uploads/posts/'.$post->image) }}" class="img-responsive" width="770" height="337" alt="{{ $post->title }}">
                                    </figure>
                                    <div class="text_wrper">
                                        <!--thumb Footer Start-->
                                       <!-- <div class="thumb_footer">
                                            <div class="admin_thumb">
                                                <figure><img src="extra-images/admin.jpg" alt=""></figure>
                                                <h6><a href="#">Alba Smith</a></h6>
                                            </div>
                                            <ul class="blog_meta">
                                                <li>
                                                    <span><i class="fa fa-eye"></i>169</span>
                                                </li>
                                                <li>
                                                    <span class="heart"><i class="fa fa-heart-o"></i>477</span>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="fa fa-comment-o"></i>09</a>
                                                </li>
                                            </ul>
                                        </div> -->
                                        <!--thumb Footer End-->
                                        <div class="text_2">
                                            <span class="label2"><a href="#uyeol" id="git">{{ $post->type }}</a></span>
                                            <h1><a href="#">{{ $post->title }}</a></h1>
                                            <em class="kf_date" style="margin-bottom: 40px">{{ date_format($post->created_at, 'd-m-Y') }}</em>
                                            <div class="col-md-12">
                                                {!! $post->text !!}
                                          </div>
                                      <script type="text/javascript">
                                      	$("#git").click(function() {
    $('html, body').animate({
        scrollTop: $("#uyeol").offset().top
    }, 2000);
});
                                      </script>
                                        
                                            
                                            <!--Game Highlights thumb Start-->
                       
                                            <!--Game Highlights thumb End-->
                                            <!--Blockquote Start-->
                                         
                                        </div>
                                               <div class="widget roster_sidebar">
                            <!--Heading 1 Start-->
                      
                            <!--Heading 1 End-->
                            <!--Roster Dec Start-->
                           
                            <!--Roster Dec End-->
                            <div class="kf_plyer_rating">
                                <span>
                                    <strong>GÜVENİLİRLİLİK</strong>
                                   @for($i=1;$i <=$post->guven;$i++)
                                    <i class="fa fa-star star" aria-hidden="true"></i>
                                   @endfor
                                </span>
                                <span>
                                    <strong>Para Çekme</strong>
                                 @for($i=1;$i <=$post->paracekme;$i++)
                                    <i class="fa fa-star star" aria-hidden="true"></i>
                                   @endfor
                                  
                                </span>
                                <span>
                                    <strong>Bonuslar</strong>
                                    @for($i=1;$i <=$post->bonuslar;$i++)
                                    <i class="fa fa-star star" aria-hidden="true"></i>
                                   @endfor
                                    
                                </span>
                               <span>
                                    <strong>Oranlar</strong>
                                  @for($i=1;$i <=$post->oranlar;$i++)
                                    <i class="fa fa-star star" aria-hidden="true"></i>
                                   @endfor
                                  
                                </span>
                                  <span>
                                    <strong>Destek</strong>
                                    @for($i=1;$i <=$post->destek;$i++)
                                    <i class="fa fa-star star" aria-hidden="true"></i>
                                   @endfor
                                   
                                </span>

                            </div>

                            <ul id="uyeol" class="kf_table2 kf_tableaside">
                               <?php $a = $post->bonus;
                                                            $b = explode(",", $a);
                                                         ?>
                                                         @foreach($b as $b)
                                <li>
                                    <div>
                                        <span>{{ $b }}</span>
                                    </div>
                                </li>
                                @endforeach
                            </ul>

                            <div  class="kf_progress1">
                                <!--SKILLS PROGRESS START-->
                             <div class="col-md-4 text-center">
                                <!--SKILLS PROGRESS END-->
                                </div>
                                 <div   class="col-md-4 text-center">
                               <a href="{{ $post->link }}"  target="_blank" class="input-btn" style="width: 250px">Üye Ol</a> 
                                <!--SKILLS PROGRESS END-->
                                </div>
                                 <div class="col-md-4 text-center">
                                <!--SKILLS PROGRESS END-->
                                </div>
                            </div>
                        </div> 
                                        <!--Tags Start--> 
                                        <div class="tags_wrap">
                                           

                                            <!--Tags Start-->
                                           <!-- <ul class="kf_tags kf_tags2">
                                                <li><a href="#">Sports</a></li>
                                                <li><a href="#">Team</a></li>
                                                <li><a href="#">Champions</a></li>
                                            </ul> -->
                                            <!--Tags End-->
                                            <ul class="kf_social2">
                                              <div class="sharethis-inline-share-buttons"></div>
                                            </ul>
                                        </div>
                                        <!--Tags End--> 
                                    </div>
                                </div>
                            </div>
                        
                            <!--Featured 2 Slider End-->
                            <div class="row">
                                <div class="col-md-12">
                                    <!--Heading 1 Start-->
                                    <h6 class="kf_hd1">
                                        <span>Diğer İncelemeler</span>
                                    </h6>
                                    <!--Heading 1 End-->
                                </div>
                                  @foreach($related as $related)
                                <div class="col-md-6">
                                    <!--Featured 3 thumb Start-->
                                  
                                    <div class="kf_featured_thumb">
                                        <figure>
                                            <img src="{{ url('uploads/posts/'.$related->image) }}" width="384" height="240" style="img-responsive" alt="{{ $post->title }}">
                                        </figure>
                                        <div class="text_wrper">
                                            <div class="text">
                                                <h6>{{ $related->title }}</h6>                                
                                                <h2><a href="{{ url('inceleme/'.$related->slug) }}">{{ $related->name }}</a></h2>
                                                <span>{{ date_format($related->created_at, 'd-m-Y') }}</span>
                                                <p>{!! str_limit($related->text,250) !!} </p>
                                                <a class="btn_2" href="{{ url('inceleme/'.$related->slug) }}">İncele</a>
                                            </div>
                                            <div class="thumb_footer">
                                                
                                               <!-- <ul class="blog_meta">
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
                                  
                                    <!--Featured 3 thumb End-->
                                </div>
                               @endforeach
                            </div>
                            <!--Comment Wrap Start-->
                        <?php /*    <div class="comment_wrap">
                                <!--Heading 1 Start-->
                                <h6 class="kf_hd1">
                                    <span>Comments</span>
                                </h6>
                                <!--Heading 1 End-->
                                <!--Comment Form Start-->
                                <ul class="comment_form">
                                    <li>
                                        <!--Comment Dec Form Start-->
                                        <div class="comment_dec">
                                            <figure><img src="extra-images/commeent1.jpg" alt=""></figure>
                                            <div class="text">
                                                <div class="comment_hd">
                                                    <h5><a href="#">STEVE ANDERS</a></h5>
                                                    <ul>
                                                        <li><span><i class="fa fa-user"></i>Posted April 19, 2016</span></li>
                                                        <li><span><i class="fa fa-clock-o"></i>7:30 p.m</span></li>
                                                        <li><a href="#"><i class="fa fa-mail-reply"></i>Reply</a></li>
                                                    </ul>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.</p>
                                            </div>
                                        </div>
                                        <!--Comment Dec Form End-->
                                        <ul>
                                            <li>
                                                <!--Comment Dec Form Start-->
                                                <div class="comment_dec">
                                                    <figure><img src="extra-images/commeent2.jpg" alt=""></figure>
                                                    <div class="text">
                                                        <div class="comment_hd">
                                                            <h5><a href="#">STEVE ANDERS</a></h5>
                                                            <ul>
                                                                <li><span><i class="fa fa-user"></i>Posted April 19, 2016</span></li>
                                                                <li><span><i class="fa fa-clock-o"></i>7:30 p.m</span></li>
                                                                <li><a href="#"><i class="fa fa-mail-reply"></i>Reply</a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.</p>
                                                    </div>
                                                </div>
                                                <!--Comment Dec Form End-->
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <!--Comment Dec Form Start-->
                                        <div class="comment_dec">
                                            <figure><img src="extra-images/commeent3.jpg" alt=""></figure>
                                            <div class="text">
                                                <div class="comment_hd">
                                                    <h5><a href="#">STEVE ANDERS</a></h5>
                                                    <ul>
                                                        <li><span><i class="fa fa-user"></i>Posted April 19, 2016</span></li>
                                                        <li><span><i class="fa fa-clock-o"></i>7:30 p.m</span></li>
                                                        <li><a href="#"><i class="fa fa-mail-reply"></i>Reply</a></li>
                                                    </ul>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend, consectetur adipiscing elit. Quisque at magna ut ante eleifend eleifend.</p>
                                            </div>
                                        </div>
                                        <!--Comment Dec Form End-->
                                    </li>
                                </ul>
                                <!--Comment Form End-->
                            </div>
                            <!--Comment Wrap End-->
                            <!--Comment Input Form Wrap Start-->
                           <div class="comment_input_wrap">
                                <!--Heading 1 Start-->
                                <h6 class="kf_hd1">
                                    <span>Add Your Comment</span>
                                </h6>
                                <!--Heading 1 End-->
                                <form>
                                    <div class="input_textarea">
                                        <textarea placeholder="Your Comment">
                                            
                                        </textarea>
                                    </div>
                                    <div class="input_dec_divider">
                                        <div class="input_dec">
                                            <input placeholder="Your Name" type="text">
                                        </div>
                                        <div class="input_dec">
                                            <input placeholder="Your Email" type="text">
                                        </div>
                                    </div>
                                    <input class="input-btn" type="button" value="Post comment">
                                </form>
                            </div> */ ?>
                            <!--Comment Input Form Wrap End-->
                        </div>
                    </div> 
                   @include('front.partials.sidebar')
                </div>
            </div>
        </section>
    </div>
    <!--Main Content Wrap End-->
    <!--ticker Wrap Start-->
    
    @endsection