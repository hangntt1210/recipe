@extends('master')
@section('content')

<div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <center><h4>今日、どんな食べ物を作ったらいいか？</h4> </center>
                            <br>
                            <div class="beta-products-Chi tiết">
                                <p class="pull-left"></p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                            
                            @foreach($tatcasp as $sp)
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="source/image/food/{{$sp->image}}" alt="" >
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>          
                                    </div>
                                    <div class="pi-text">
                                        <div class="product-price">
                                            {{$sp->user->email}}
                                        </div>
                                        <a href="{{route('chitietsanpham',$sp->id)}}">
                                            <h5>{{$sp->title}}</h5>
                                        </a>                                   
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                            <div>
                                
                            </div>
                            
                            </div>
                            <div class="space40">&nbsp;</div>
                            
                        </div> <!-- .beta-products-list -->
                    </div>
                </div> <!-- end section with sidebar and main content -->


            </div> <!-- .main-content -->
        </div> <!-- #content -->

@endsection