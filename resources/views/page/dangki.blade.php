@extends('master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">サインアップ</h6>
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

			<form action="{{route('signup')}}" method="post" class="beta-form-checkout">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="row">
					<div class="col-sm-3"></div>
					@if(count($errors)>0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
								<li><i>{{$err}}</i></li>
							@endforeach
						</div>
					@endif
					@if(Session::has('thanhcong'))
						<div class="alert alert-success"><h3>{{Session::get('thanhcong')}}</h3></div>
					@endif
					<div class="col-sm-6">
						<h4>サインアップ</h4>
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email">メール*</label>
							<input type="email" name="email" >
						</div>

						<div class="form-block">
							<label for="your_last_name">名前*</label>
							<input type="text" name="name" >
						</div>
						<div class="form-block">
							<label for="phone">Password*</label>
							<input type="password" name="password" >
						</div>
						<div class="form-block">
							<label for="phone">Re password*</label>
							<input type="password" name="re_password" >
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">サインアップ</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection