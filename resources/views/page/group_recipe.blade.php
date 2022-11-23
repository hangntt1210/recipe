@extends('master')
@section('content')

<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>...のレシピ： {{count($sp_theoloai)}}</h4>
							<br>
							<div class="beta-products-Chi tiết">
								<p class="pull-left"></p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
							
                            @foreach($sp_theoloai as $sp)
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="source/image/food/{{$sp->image}}" alt="">
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>          
                                    </div>
                                    <div class="pi-text">
                                        <div class="product-price">
                                            {{$sp->user->email}}
                                        </div>
                                        <a href="#">
                                            <h5>{{$sp->name}}</h5>
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