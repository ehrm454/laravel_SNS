{{ isset($error) ? $error : '' }}
<div class="container">
	<div class="row login_box">
		<div class="col-md-12 mx-auto">
			<div class="myform form ">
				 <div class="logo mb-3">
					 <div class="col-md-12 text-center">
						<h1>SNS_LOGIN</h1>
					 </div>
				</div>
			   <form method="post">
					@csrf	
				   <div class="form-group">
					  <label for="exampleInputEmail1">ID</label>
					  <input type="text" name="login_id"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="ID">
				   </div>
				   <div class="form-group">
					  <label for="exampleInputEmail1">Password</label>
					  <input type="password" name="login_pw" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Password">
				   </div>
				   <div class="col-md-12 text-center ">
					  <button type="submit" class="btn btn-block mybtn btn-primary tx-tfm">Login</button>
				   </div>
				   <div class="form-group">
					  <p class="text-center">Don't have account? <a href="#" id="signup">Sign up here</a></p>
				   </div>
				</form>
			</div>
		</div>