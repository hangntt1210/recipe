<div id="header">
        <div class="header-top">
            <div class="container">
                <div class="pull-left auto-width-left">
                    
                </div>
                <div class="pull-right auto-width-right">
                    <ul class="top-Chi tiết menu-beta l-inline">
                        @if(Auth::check())
                            <li><a href=""><i class="fa fa-user"></i><b>{{Auth::user()->name}}</b></a></li>
                            <li><a href="{{route('logout')}}"><b>ログアウト</b></a></li>
                        @else
                            <li><a href="{{ route('signup') }}"><b>サインアップ</b></a></li>
                            <li><a href="{{ route('login') }}"><b>ログイン</b></a></li>
                        @endif
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div> <!-- .container -->
        </div> <!-- .header-top -->

            <div class="container beta-relative">
                <div class="pull-left">
                    <a href="#" id="logo"><img src="source/assets/dest/images/products/food-logo.jpg" width="200px" alt=""></a>
                    <h4>食べ物のレシピを提案するサイト</h4>
                </div>

                <div class="pull-right beta-components space-left ov">
                    <div class="space10">&nbsp;</div>
                    <!--tim kiem-->
                    <div class="beta-comp">
                        <form role="search" method="get" id="searchform" action="">
                            <input type="text" value="" name="key" id="s" placeholder="レシピ、成分、キーワード..." /><!--name="key"-->
                            <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                        </form>
                    </div>
                    
                    <!--gio hang-->
                    

                </div>
                <div class="clearfix"></div>
            </div> <!-- .container -->
        </div> <!-- .header-body -->
        <div class="header-bottom" style="background-color: #f0a630;">
            <div class="container">
                <!--<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>-->
                <div class="visible-xs clearfix"></div>
                <nav class="main-menu">
                    <ul class="l-inline ov">
                        <li><a href="{{route('home')}}"><b>ホームページ</b></a></li>
                        <li><a href="{{route('home')}}"><b>食べ物のグループ</b></a>
                            <ul class="sub-menu">    
                                @foreach($loai_sp as $loai)
                                    <li><a href="{{route('loaisanpham',$loai->id)}}"><b>{{$loai->name}}</b></a></li>
                                @endforeach                                               
                            </ul>
                        </li>
                        
                    </ul>
                    <div class="clearfix"></div>
                </nav>
            </div> <!-- .container -->
        </div> <!-- .header-bottom -->
    </div> <!-- #header -->