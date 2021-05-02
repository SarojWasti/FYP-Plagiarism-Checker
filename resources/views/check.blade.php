<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plagiarism Checking Result</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href=" {{ asset ('UserCustomAuth/checkStyle.css') }} ">
    <link rel="stylesheet" href=" {{ asset ('UserCustomAuth/style.css') }} ">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="brand" href="plagchecker.html"><img src=" {{ asset ('images/plaglogoo.png') }} " width="60" alt=""></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="hamburger-icon"><i
    class="fa fa-bars fa-1x"></i></span></button>
	  
      <div class="collapse navbar-collapse sidebar" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href=""><i class="fa fa-user"></i>Profile</a></li>
            <li class="nav-item"><a class="nav-link" href=" {{ url('/plagmain') }} "><i class="fa fa-search"></i>New Check</a></li>
              
        
        </ul>
      </div>
    </nav>
    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8 reportBody">
        <br>
        <p class="box">{{$results['data'] }}</p>
        <hr>
        <div class="card my-4 resultBody">
          <h5 class="card-header">Matched phrases</h5>
          <div class="card-body">
            @foreach($results['details'] as $detail)

                @if($detail->totalMatches > 0)
                    <p style="color: red;"> {{$detail->query}} </p>
                @endif
            @endforeach
          </div>
        </div>

      </div>

      <div class="col-md-4">

        <div class="card my-4">
          <h5 class="card-header">Report Analysis</h5>
          <div class="card-body">
            <p>Total Url Matches: {{$results['total']}}</p>
            <p>Total word count: {{str_word_count($results['data'])}}</p>
            <p>Plagiarism percent: {{$results['plag']}}% </p>
            
          </div>
        </div>

        <div class="card my-4">
          <h5 class="card-header">Matched urls</h5>
          <div class="card-body">
            <div class="row">
                @foreach($results['urls'] as $link)
                    <a href="{{$link}}">{{ $link }}</a>
                @endforeach
            </div>
          </div>
        </div>
      </div>

    </div>
</body>
</html>