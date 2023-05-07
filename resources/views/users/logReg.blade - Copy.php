@extends('layouts.fontLayouts.master')
@section('content')

	<section id="form" style="margin-top:0px;">

		<div class="container">
			<div class="row">
				@if (Session::has('message_success'))
                 <div class="control-group">
                     <div class="controls">
                         <div class="alert alert-danger">

                             <strong style="color:#000">{{ session('message_error') }}</strong>

                         </div>
                       </div>
                 </div>
         @endif
				 @if (Session::has('message_error'))
                  <div class="control-group">
                      <div class="controls">
                          <div class="alert alert-danger">

                              <strong style="color:#000">{{ session('message_error') }}</strong>

                          </div>
                        </div>
                  </div>
          @endif
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form id="loginForm" name="login" action="{{ url('/sign-in') }}" method="post" >
							@csrf
							<input name="email" type="email" placeholder="Email Address" />
							<input name="password" type="password" placeholder="Password" />
							{{-- <span>
								<input type="checkbox" class="checkbox">
								Keep me signed in
							</span> --}}
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form id="registation" name="registation" action="{{ url('/user-register') }}" method="post" >
             			 @csrf
							<input type="text" name="user_name" placeholder="Name"/>
							<input type="email" name="email" placeholder="Email Address"/>
							<input type="password" id="myPassword" name="pass" placeholder="Password"/>

							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>

	</section>


@endsection
