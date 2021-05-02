<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plagiarism checker</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/UserCustomAuth/style.css') }}">
</head>
<style>
</style>
<body>
    <div class="submit-form login-form">
      <div class="form-group brand-section text-center">
        <a href=" {{ url('/plag') }} "><img src="{{ asset('images/plaglogoo.png') }}" alt="" width="35"> Plagiarism Checker</a>
      </div>
      @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
     @endif
      <form class="signup-form" method="POST" action="{{ route('password.email') }}">
            @csrf
        <div class="form-group signup-top text-center"><h5>Reset Your Password</h5></div>
        <div class="form-group">
          <label for="email" style="color: #717888;">Email</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
          @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Reset Password</button>
      </form>
    </div>
</body>
</html>