<div class="login_top">
	<div class="container">
		<div class="col-md-6">
			<div class="login-page">
				<h4 class="title">New Customers</h4>
				<p>AS A MEMBER OF GOLD’S GYM, YOU’LL ENJOY ACCESS TO THE BEST COACHES, PERSONAL TRAINERS, AND GROUP EXERCISE INSTRUCTORS IN THE BUSINESS</p>
				<div class="button1">
					<a href="/signup"><input type="submit" name="Submit" value="Create an Account"></a>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="login-page">
				<div class="login-title">
					<h4 class="title">Registered Customers</h4>
					@if(session('alert'))
					<div class="alert alert-danger">
						{{session('alert')}}
					</div>
					@endif
					<div id="loginbox" class="loginbox">
						<form action="login" method="post" name="login" id="login-form">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<fieldset class="input">
								<p id="login-form-username">
									<label for="modlgn_username">Username</label>
									<input id="modlgn_username" type="text" name="username" class="inputbox" size="18" autocomplete="off">
								</p>
								<p id="login-form-password">
									<label for="modlgn_passwd">Password</label>
									<input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18" autocomplete="off">
								</p>
								<div class="remember">
									<p id="login-form-remember">
										<label for="modlgn_remember"><a href="#">Forget Your Password ? </a></label>
									</p>
									<input type="submit" name="Submit" class="button" value="Login"><div class="clear"></div>
								</div>
							</fieldset>
						</form>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>