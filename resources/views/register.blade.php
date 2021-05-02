<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plagiarism checker register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href=" {{ asset ('UserCustomAuth/style.css') }} ">
</head>
<style>
</style>
<body>
    <div class="submit-form">
      <div class="form-group brand-section text-center">
        <a href=" {{ url('plag') }} "><img src=" {{ asset ('images/plaglogoo.png') }} " alt="" width="35"> Plagiarism Checker</a>
      </div>
      <form class="signup-form" method="POST" action="{{ route('register') }}">
            @csrf
        <div class="form-group signup-top text-center"><h5>Plagiarism Checker Sign Up</h5></div>
        <div class="form-group">
          <input type="name" class="form-control" id="name" placeholder="Enter your name" name="name" required="required">
        </div>

        <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter your email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

        <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter the password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        
        </div>
        <div class="form-group">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm the Password">
        </div>

        <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
        <div class="form-group text-center">
          <p><a href=" {{ route('password.request') }} ">Forgot Password?</a></p>
        </div>
      </form>
    </div>
    <div class="already-text text-center">
      <p>Already have an account? <a href=" {{ url('/login')  }} ">Login Here.</a></p>
    </div>
    
</body>
</html>