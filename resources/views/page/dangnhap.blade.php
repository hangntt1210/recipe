@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">ログイン</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">

				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
			
			<form action="{{route('login')}}" method="post" class="beta-form-checkout">
				@if ($errors->any())
                    <font color="red"> Hãy nhập lại!
                        <ul>
                            @foreach ($errors->all() as $error)
                               <li><i>{{ $error }}</i></li>
                            @endforeach
                        </ul>
                    </font>
                @endif
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="row">
					<div class="col-sm-3"></div>
					@if(Session::has('flag'))			
						<div class="alert alert-{{Session::get('flag')}}"><h3>{{Session::get('message')}}</h3></div>
					@endif
					<div class="col-sm-6">
						<h4>ログイン</h4>
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email">メール*</label>
							<input type="email" name="email">
						</div>
						<div class="form-block">
							<label for="phone">パスワード*</label>
							<input type="password" name="password">
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">ログイン</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
			<br>
			<center><h7><a href="{{ route('signup') }}">サインアップ</a></h7></center>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection