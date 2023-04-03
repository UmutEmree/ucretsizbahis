 @extends('backend.main')

  @section('css')

       <link href="{{ url('backend/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome -->

    <link href="{{ url('backend/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- NProgress -->

    <link href="{{ url('backend/vendors/nprogress/nprogress.css') }}" rel="stylesheet">

    <!-- iCheck -->

    <link href="{{ url('backend/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

    <!-- bootstrap-wysiwyg -->

    <link href="{{ url('backend/vendors/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet">

    <!-- Select2 -->

    <link href="{{ url('backend/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">

    <!-- Switchery -->

    <link href="{{ url('backend/vendors/switchery/dist/switchery.min.css') }}" rel="stylesheet">

    <!-- starrr -->

    <link href="{{ url('backend/vendors/starrr/dist/starrr.css') }}" rel="stylesheet">

    <!-- bootstrap-daterangepicker -->

    <link href="{{ url('backend/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">



    <!-- Custom Theme Style -->

    <link href="{{ url('backend/build/css/custom.min.css') }}" rel="stylesheet">

  @endsection

  @section('content')

      <div class="right_col" role="main">

          <div class="">

            <div class="page-title">

              <div class="title_left">

                <h3>İçerik Düzenle</h3>

              </div>



              

            </div>

            <div class="clearfix"></div>

           

            <div class="row">

              <div class="col-md-6 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">

                    <h2>İnceleme <small>Post İçerikleri</small></h2>



                    <div class="clearfix"></div>

                  </div>

                  <div class="x_content">

                    <br />

                    <form action="{{ route('posts.update',$post->id) }}" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left input_mask">

                        {{ csrf_field() }}

                        {{ method_field('PUT') }}

                        <input type="hidden" name="id" value="{{ $post->id }}">

                     

                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">

                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="name" value="{{ $post->name }}"  placeholder="Başlık">

                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>

                      </div>



                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">

                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="slug" value="{{ $post->slug }}" required placeholder="Slug">

                        <span class="fa fa-code form-control-feedback left" aria-hidden="true"></span>

                      </div>



                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">

                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="marka" value="{{ $post->marka }}" required placeholder="Marka Adı">

                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>

                      </div>



                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">

                          <select name="type" class="form-control">

                            <option value="bonus" @if($post->type == 'bonus') {{ 'checked' }} @endif>Bonus İnceleme</option>

                            <option value="haber"  @if($post->type == 'haber') {{ 'checked' }} @endif>Haber</option>

                          </select>

                     

                      </div>



                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">

                          <select name="category_id" class="form-control">

                          @foreach($categories as $category)

                            <option value="{{ $category->id }}"{{ $post->category_id == $category->id ? 'selected="selected"' : '' }}>{{ $category->name }}</option>

                          @endforeach

                          </select>

                        </div>



                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">

                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="link" value="{{ $post->link }}" placeholder="Affiliate Linki">

                        <span class="fa fa-anchor form-control-feedback left" aria-hidden="true"></span>

                      </div>



                          <div class="form-group">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                           <input type="hidden" name="week" value="0">
                              <input type="checkbox" name="week" class="js-switch" value="1" @if($post->week == '1') checked @endif  />Haftanın Bonusu
                            </label>

                          </div>

                         

                      </div>


                          <div class="form-group">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <input type="hidden" name="freebonus" value="0">
                              <input type="checkbox" name="freebonus" class="js-switch" value="1" @if($post->freebonus == '1') checked @endif  />Free Bonusu
                            </label>

                          </div>

                         

                      </div>


                   <div class="form-group">

                        <div class="col-md-12 col-sm-12 col-xs-12">

                          <div class="">

                            <label>


                              <input type="hidden" name="home" value="0">
                              <input type="checkbox" class="js-switch" name="home" value="1"  @if($post->home == '1') checked @endif  />Anasayfada Göster
                            </label>

                          </div>

                         

                        </div>

                      </div>



                      <div class="form-group">

                        <div class="col-md-12 col-sm-12 col-xs-12">

                          <div class="">

                            <label>
                              <input type="hidden" name="menu" value="0">
                              <input type="checkbox" class="js-switch" name="menu" value="1"  @if($post->menu == '1') checked @endif  />Menüde Göster
                             
                            </label>

                          </div>

                         

                        </div>

                      </div>





                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">



                        <input type="file" class="form-control has-feedback-left" id="inputSuccess2" name="image">

                        <span class="fa fa-image form-control-feedback left" aria-hidden="true"></span>

                      </div>

                         <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">



                          <img src="{{ url('uploads/posts/'.$post->image) }}" style="width: 30%">

                      </div>



                    



                

                  </div>

                </div>



               

  @if(count($errors)>0)

                      <ul>

                        @foreach($errors->all() as $error)

                        <li class="alert alert-danger">{{ $error }}</li>

                        @endforeach

                      </ul>

                      @endif

           

              </div>



              <div class="col-md-6 col-xs-12">

                <div class="x_panel">

                  <div class="x_title">

                    <h2>Bonus İnceleme Detayı <small>bonusun detay bilgileri</small></h2>

                    

                    <div class="clearfix"></div>

                  </div>

                  <div class="x_content">

                    <br />

                   

                    

                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">

                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="{{ $post->guven }}" style="width: 30%" name="guven" required placeholder="Güvenilirlik">

                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>

                      </div>



                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">

                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="{{ $post->paracekme }}" style="width: 30%" name="paracekme" required placeholder="Para Çekme">

                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>

                      </div>



                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">

                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="{{ $post->bonuslar }}" style="width: 30%" name="bonuslar" required placeholder="Bonuslar">

                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>

                      </div>



                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">

                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="{{ $post->oranlar }}" style="width: 30%" name="oranlar" required placeholder="Oranlar">

                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>

                      </div>



                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">

                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="{{ $post->destek }}" style="width: 30%" name="destek" required placeholder="Destek">

                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>

                      </div>



                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">

                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" value="{{ $post->title }}" name="title" required placeholder="Meta Title">

                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>

                      </div>

                      <div class="control-group">

                        <div class="col-md-12 col-sm-12 col-xs-12">

                          <input id="tags_1" type="text" name="bonus" class="tags form-control" value="{{ $post->bonus }}" />

                          <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>

                        </div>

                      </div>

               

                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">

                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2"  name="meta" value="{{ $post->meta }}" placeholder="Meta Description">

                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>

                      </div>



                         <textarea name="text" id="editor1">{{ $post->text }}</textarea>



                      <div class="ln_solid"></div>

                      <div class="form-group">

                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">

                          <button type="submit" class="btn btn-success">Güncelle</button>

                        </div>

                      </div>



                    </form>

                  </div>

                </div>

              </div>





            

            </div>



        



          





          </div>

        </div>

  @endsection



  @section('js')

     <script>

            CKEDITOR.replace( 'editor1' );

        </script>

    <script src="{{ url('backend/vendors/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap -->

    <script src="{{ url('backend/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- FastClick -->

    <script src="{{ url('backend/vendors/fastclick/lib/fastclick.js') }}"></script>

    <!-- NProgress -->

    <script src="{{ url('backend/vendors/nprogress/nprogress.js') }}"></script>

    <!-- bootstrap-progressbar -->

    <script src="{{ url('backend/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>

    <!-- iCheck -->

    <script src="{{ url('backend/vendors/iCheck/icheck.min.js') }}"></script>

    <!-- bootstrap-daterangepicker -->

    <script src="{{ url('backend/vendors/moment/min/moment.min.js') }}"></script>

    <script src="{{ url('backend/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- bootstrap-wysiwyg -->

    <script src="{{ url('backend/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>

    <script src="{{ url('backend/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>

    <script src="{{ url('backend/vendors/google-code-prettify/src/prettify.js') }}"></script>

    <!-- jQuery Tags Input -->

    <script src="{{ url('backend/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>

    <!-- Switchery -->

    <script src="{{ url('backend/vendors/switchery/dist/switchery.min.js') }}"></script>

    <!-- Select2 -->

    <script src="{{ url('backend/vendors/select2/dist/js/select2.full.min.js') }}"></script>

    <!-- Parsley -->

    <script src="{{ url('backend/vendors/parsleyjs/dist/parsley.min.js') }}"></script>

    <!-- Autosize -->

    <script src="{{ url('backend/vendors/autosize/dist/autosize.min.js') }}"></script>

    <!-- jQuery autocomplete -->

    <script src="{{ url('backend/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>

    <!-- starrr -->

    <script src="{{ url('backend/vendors/starrr/dist/starrr.js') }}"></script>

    <!-- Custom Theme Scripts -->

    <script src="{{ url('backend/build/js/custom.min.js') }}"></script>

  @endsection