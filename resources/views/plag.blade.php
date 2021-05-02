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
    <link rel="stylesheet" href=" {{ asset ('UserCustomAuth/style.css') }} ">
</head>
<style>
  body{
    background-color: #f6f5f5;
  }
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="plagchecker.html"><img src=" {{ asset ('images/plaglogoo.png') }} " alt=""> Plagiarism Checker</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="hamburger-icon"><i
    class="fa fa-bars fa-1x"></i></span></button>
	  
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link" href=" {{ route('login') }} "><button class="btn login">Login</button></a>
              </li>
        <li class="nav-item">
          <a class="nav-link" href=" {{ route('register') }} "><button class="btn btn-success">Sign Up</button></a>
              </li>
              
        
        </ul>
      </div>
    </nav>
    <form class="checking-form" method="POST">
        @csrf
      <div class="form-group text-center form-heading">
        <h3>Plagiarism Checker</h3>
      </div>
      <div class="form-group">
        <textarea class="form-control plagText" name="plagText" id="exampleFormControlTextarea1" placeholder="Enter Your Text" rows="12"></textarea>
        <p class="mustlogin" style="display: none;">You need to login to get resutls.</p>
      </div>
      <div class="form-group text-center">
        <button type="submit" formaction=" {{route('check')}} " class="btn btn-success">CHECK PLAGIARISM</button>
      </div>
    </form>  
</body>
<script>
  $(document).ready(function(){

        $('input[type="file"]').change(function(e){//riggers the click event when button is clicked
            var fileName = e.target.files[0].name;//assigns filename to the variable filename
            document.querySelector(".show-files").innerHTML = "File Chosen: " + fileName;//replaces innerhtml of the selected class
        });
    });
</script>
</html>