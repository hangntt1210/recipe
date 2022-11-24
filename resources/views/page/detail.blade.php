@extends('master')
@section('content')

<!--chi tiet-->
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">詳細</h6>
        </div>
        <div class="pull-right">
            
        </div>
        <div class="clearfix"></div>
    </div>
</div>

    <div class="container">
        <div id="content">
            <div class="row">
                <div class="col-sm-12">

                    <div class="row">
                        <div class="col-sm-4">
                            <img src="source/image/food/{{$sanpham->image}}" alt="">
                        </div>
                        <div class="col-sm-8">
                            <div class="single-item-body">
                                <p class="single-item-title"><h2><b>{{$sanpham->title}}</b></h2></p>
                                <p>by {{$sanpham->user->email}}</p>
                                <br>
                                <p class="single-item-price">
                                    
                                    <h5>レベル：
                                        @if ($sanpham->level == 1) 
                                            <font color="green">簡単</font>
                                        @elseif ($sanpham->level == 2)
                                            <font color="blue">ミディアム</font>
                                        @elseif ($sanpham->level == 3)
                                            <font color="red">難しい</font>
                                        @else 
                                            
                                        @endif
                                    </h5>
                                    
                                    <h5>時間：<font color="green">{{$sanpham->time}}</font>分</h5>

                                    <div class="likes heart" title="Like/Dislike"><h3>❤ </h3></div>                      
                                </p>
                            </div>

                            <div class="clearfix"></div>
                            <div class="space20">&nbsp;</div>

                            <div class="single-item-desc">
                                <p>
                                </p>
                            </div>
                            <div class="space20">&nbsp;</div>

                        <!--bo chon so luong                            <p>chọn số lượng:</p> -->
                        
                            <div class="single-item-options">
                        
                                
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="space40">&nbsp;</div>
                    <div class="woocommerce-tabs">
                        <ul class="tabs">
                            <h6><li><a href="#tab-description">説明</a></li></h6>
                        </ul>
                        <div class="panel" id="tab-description">
                            {{$sanpham->description}}
                        </div>                      
                    </div>
                    <div class="woocommerce-tabs">
                        <ul class="tabs">
                            <h6><li><a href="#tab-description">成分</a></li></h6>
                        </ul>
                        <div class="panel" id="tab-description">
                            <a href="#">ブン</a>&emsp;<a href="#">豚肉</a>&emsp;<a href="#">パクチー</a>
                            &ensp;<a href="#">ナンプラー</a>&emsp;<a href="#">佐藤</a>&emsp;<a href="#">ニンジン</a>
                        </div>                      
                    </div>

                    @if($sanpham->video != null)
                        <iframe src="{{$sanpham->video}}"></iframe>
                    @endif
                                              
                    </div> <!-- .beta-products-list -->
                </div>  

                <!--nhap review-->
                @if(Auth::check())
                <div class="media">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">レビューを入力してください: </div>
                          
                            <div class="card-body">
                                <form method="post" action="">                           
                                    @csrf
                                    <div class="form-group">
                                        <label class="label">Post Body: </label>
                                        <textarea name=cmt rows="4" cols="30" class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <!--<input type=submit class="btn btn-success" />-->
                                        <button type="submit" class="btn btn-info"> レビュー </button>
                                    </div>
                                </form>
                            </div>
                        
                        </div>
                    </div>
                </div>
                @endif

                <!--list review-->
                <div class="col-sm-12">
                <div class="space40">&nbsp;</div>
                <div class="woocommerce-tabs">
                    <ul class="tabs">
                        <li><a href="#tab-description">レビューした(0)</a></li>
                    </ul>
                    <div class="panel" id="tab-description">
                    <form action="{{route('review-create', $sanpham->id)}}">
                        @csrf
                        <textarea name="content"></textarea>
                            <button style="padding: 5px 10px;
                            border: 1px solid #f0a630;
                            background-color: #f0a630;
                            border-radius: 5px;
                            margin: 15px 0;
                            width: 100px;
                            height: 40px;
                            font-size: 16px;
                            color: #ffffff;">レビュー</button>
                    </form>
                    @foreach($reviews as $review)
                        <div class="panel" id="tab-description">
                            <b>{{$review->user->name}}</b>
                            {{$review->content}}
                        </div>
                    @endforeach
                        
                    </div>   
                    </div>      
                </div>      
                </div>  
            </div>
        </div> <!-- #content -->
    </div> <!-- .container -->

@endsection