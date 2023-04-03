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
                <h3>Site İçerikleri <small>Siteye eklenen bonular ve İnceleme yazıları</small></h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <div class="row">
     
              <div class="col-md-12 col-sm-12 col-xs-12">
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
                          <th>Marka</th>
                          <th>Altyapı</th>
                          <th>Link</th>
                          <th>Menüde Göster</th>
                          <th>Haftanın Bonusu</th>
                          <th>Sıra</th>
                          <th>İşlem</th>
                        </tr>
                      </thead>
                      <tbody>
                      @if($posts->count()>0)
                        @foreach($posts as $post)
                        <tr>
                          <td>{{ $post->name }}</td>
                          <td>{{ $post->marka }}</td>
                          <td>{{ $post->categories->name }}</td>
                          <td>{{ $post->link }}</td>
                          <td>@if($post->menu ==1) Evet @else Hayır @endif</td>
                          <td>@if($post->week ==1) Evet @else Hayır @endif</td>
                          <td>{{ $post->priority }}</td>
                          <td> <form action="{{ route('posts.destroy',$post->id) }}" method="post"> <a href="{{ route('posts.update',$post->id) }}" class="btn btn-success">Düzenle</a>{{ csrf_field() }} {{ method_field('DELETE') }}<button type="submit"  class="btn btn-danger">Sil</button></form></td>
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