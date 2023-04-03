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
    <link href="{{ url('backend/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('backend/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('backend/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('backend/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('backend/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ url('backend/build/css/custom.min.css') }}" rel="stylesheet">
  @endsection
  @section('content')
      <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Alt Yapı Ekle <small></small></h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
            
             <div class="col-md-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal form-label-left input_mask">
                        {{ csrf_field() }}
                     
                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="name" value=""  placeholder="Başlık">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="slug" value="" required placeholder="Slug">
                        <span class="fa fa-code form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="priority" value="" required placeholder="Sıra">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                    
                      <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <div class="">
                            <label>
                              <input type="checkbox" name="menu" value="1" class="js-switch" />Menüde Göster
                            </label>
                          </div>
                         
                        </div>
                      </div>

                       <div class="form-group">
                        <div class="col-md-1 col-sm-12 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Ekle</button>
                        </div>
                      </div>
                      </form>
                                     
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

              <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>İnceleme<small>ve</small> Bonuslar</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  
          
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Başlık</th>
                          <th>Menüde Göster</th>
                          <th>Sıra</th>
                          <th>İşlem</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      @if($categories->count()>0)
                        @foreach($categories as $cat)
                        <tr>
                          <td>{{ $cat->name }}</td>
                          <td>@if($cat->menu ==1) Evet @else Hayır @endif</td>
                          <td>{{ $cat->priority }}</td>
                          <td> <form action="{{ route('categories.destroy',$cat->id) }}" method="post"> <a href="{{ route('categories.edit',$cat->id) }}" class="btn btn-success">Düzenle</a>{{ csrf_field() }} {{ method_field('DELETE') }}<button type="submit"  class="btn btn-danger">Sil</button></form></td>
                        </tr>
                        @endforeach
                      @endif
                      </tbody>
                    </table>
          
          
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  @endsection

  @section('js')
       <script src="{{ url('backend//vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ url('backend//vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ url('backend//vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ url('backend//vendors/nprogress/nprogress.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ url('backend//vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Datatables -->
        <script src="{{ url('backend/vendors/switchery/dist/switchery.min.js') }}"></script>

    <script src="{{ url('backend//vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('backend//vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ url('backend//vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('backend//vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ url('backend//vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ url('backend//vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ url('backend//vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ url('backend//vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ url('backend//vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ url('backend//vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('backend//vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ url('backend//vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ url('backend//vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ url('backend//vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ url('backend//vendors/pdfmake/build/vfs_fonts.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ url('backend//build/js/custom.min.js') }}"></script>
  @endsection