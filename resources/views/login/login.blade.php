<!DOCTYPE html> 
<html> 
<head>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
<body> 
    <h2>Login Form</h2> 
    <form role="form" method="POST" action="{{ route('loginNow') }}">
    @csrf
    @if ($errors->any())
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        <strong>{{ $error }}</strong>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
		<div class="container"> 
			<label><b>Username</b></label> 
			<input type="text" placeholder="Enter Username" name="username" required> 

			<label><b>Password</b></label> 
			<input type="password" placeholder="Enter Password" name="password" required> 
			<button type="submit">Login</button> 
		</div> 

		<div class="container" style="background-color:#f1f1f1"> 
			<button type="button" class="cancelbtn">Cancel</button> 
			<span class="psw">Forgot <a href="#">password?</a></span> 
		</div> 
	</form> 

</body> 

</html> 
