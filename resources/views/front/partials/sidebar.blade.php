 <aside class="col-md-4">
                        <!--Widget Ranking Start-->
                        @yield('cat')
                        <div class="widget widget_add">
                            <div class="add_banner">
                                <a href="http://grosbetaffiliate.com/?r=5434" target="_blank"><img src="{{ url('uploads/adverts/370x370.jpg') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="widget widget_ranking">
                            <!--Heading 1 Start-->
                            <h6 class="kf_hd1">
                                <span>EN GÜVENİLİR BAHİS SİTELERİ</span>
                            </h6>
                            <!--Heading 1 END-->
                            <div class="kf_border">
                                <!--Table Wrap Start-->
                                <ul class="kf_table">
                                     <li>
                                        <div class="table_no">
                                            <span></span>
                                        </div>
                                        <div class="team_logo">
                                            <a href="#" style="font-weight: bold;color:#3c763d">Site</a>
                                        </div>
                                        <div class="team_point">
                                            <span style="font-weight: bold;color:#ff0000">Bonus</span>
                                        </div>
                                         <div class="team_point">
                                            <span style="font-weight: bold;color:#ff0000">Üyelik</span>
                                        </div>
                                    </li>
                                   
                                 
                                    <li>
                                        <div class="table_no">
                                            <span>1</span>
                                        </div>
                                        <div class="team_logo">
                                             <a href="http://wlklasgaming.adsrv.eacdn.com/C.ashx?btag=a_5661b_1205c_&affid=4161&siteid=5661&adid=1205&c=" target="_blank">Klasbahis</a>
                                        </div>
                                        <div class="team_point">
                                            <span>%25 - 500 TL </span>
                                        </div>
                                         <div class="team_point">
                                             <a href="http://wlklasgaming.adsrv.eacdn.com/C.ashx?btag=a_5661b_1205c_&affid=4161&siteid=5661&adid=1205&c=" target="_blank"><span>Üye Ol</span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="table_no">
                                            <span>2</span>
                                        </div>
                                        <div class="team_logo">
                                              <a href="http://bixaff.com/?r=719544" target="_blank">Bixbet</a>
                                        </div>
                                        <div class="team_point">
                                            <span>%100 - 350 TL   </span>
                                        </div>
                                         <div class="team_point">
                                            <a href="http://bixaff.com/?r=719544" target="_blank"><span>Üye Ol</span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="table_no">
                                            <span>3</span>
                                        </div>
                                        <div class="team_logo">
                                              <a href="http://stbaffiliate.com/?r=268973" target="_blank">Supertotobet</a>
                                        </div>
                                        <div class="team_point">
                                            <span>%100 - 300 TL</span>
                                        </div>
                                         <div class="team_point">
                                            <a href="http://stbaffiliate.com/?r=268973" target="_blank"><span>Üye Ol</span></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="table_no">
                                            <span>4</span>
                                        </div>
                                        <div class="team_logo">
                                              <a href="http://rbet510.com/?r=121195" target="_blank">Rbet</a>
                                        </div>
                                        <div class="team_point">
                                            <span>%100 - 500 TL</span>
                                        </div>
                                         <div class="team_point">
                                               <a href="http://rbet510.com/?r=121195" target="_blank"><span>Üye Ol</span></a>
                                        </div>
                                    </li>

                                     <li>
                                        <div class="table_no">
                                            <span>5</span>
                                        </div>
                                        <div class="team_logo">
                                              <a href="http://grosbetaff.com/?r=5434" target="_blank">Grosbet</a>
                                        </div>
                                        <div class="team_point">
                                            <span>%100 - 550 TL</span>
                                        </div>
                                         <div class="team_point">
                                               <a href="http://grosbetaff.com/?r=5434" target="_blank"><span>Üye Ol</span></a>
                                        </div>
                                    </li>
                                 
                                 
                                   
                                </ul>
                                <!--Table Wrap End-->
                            </div>
                        </div>
                        <!--Widget Ranking End-->
                        <!--Widget Ranking Start-->
                        <div class="widget widget_recentnews gallery">
                            <!--Heading 1 Start-->
                            <h6 class="kf_hd1">
                                <span>Son İncelemeler</span>
                            </h6>
                            <!--Heading 1 END-->
                            <div class="kf_border">
                                <!--Recent News Start-->
                               @foreach($sonincelemeler as $si)
                                <div class="kf_recentnews">
                                    <figure>
                                        <a href="{{ url('inceleme/'.$si->slug) }}">
                                            <img src="{{ url('uploads/posts/'.$si->image) }}" width="78" height="83" alt="{{ $si->title }}">
                                        </a>
                                    </figure>
                                    <div class="text">
                                        <h6><a href="{{ url('inceleme/'.$si->slug) }}">{{ $si->name }}</a></h6>
                                        <p>{!! str_limit($si->text,50) !!}</p>
                                        <em class="kf_date">{{ date_format($si->created_at, 'd-m-Y') }}</em>
                                    </div>
                                </div>
                                @endforeach
                                <!--Recent News End-->
                                <!--Recent News Start-->
                             
                                <!--Recent News End-->
                            </div>
                        </div>
                        <!--Widget Ranking Start-->
                        
                        <!--Widget Ranking End-->
                        <!--Widget Add 2 Strat-->
                      
                        <!--Widget Add 2 End-->
                        <!--Widget Next Match Start-->
                      
                        <!--Widget Next Match End-->
                        <!--Widget NewsLatter Start-->
                     
                        <!--Widget poll End-->
                        <!--Widget Add 3 Strat-->
                        <div class="widget widget_add">
                            <div class="add_banner">
                                <iframe scrolling='no' frameBorder='0' style='padding:0px; margin:0px; border:0px;border-style:none;border-style:none;' width='370' height='270' src="http://wlaffring.adsrv.eacdn.com/I.ashx?btag=a_1358b_37c_&affid=8495347&siteid=1358&adid=37&c=" ></iframe>
                            </div>
                        </div>
                        <!--Widget Add 3 End-->
                    </aside>