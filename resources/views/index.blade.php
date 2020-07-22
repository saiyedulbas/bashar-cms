<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bashar^CMS</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="{{asset('/frontend/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/frontend/fonts/font-awesome/css/font-awesome.css')}}">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/nivo-lightbox/nivo-lightbox.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/nivo-lightbox/default.css')}}">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">Bashar^CMS</a>
      
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#services" class="page-scroll">Services</a></li>
        
        <li><a href="#contact" class="page-scroll">Contact</a></li>
        <li><a target="_blank" href="https://bashar-cms-documentation.herokuapp.com/index.html" class="page-scroll">Documentation</a></li>
        <li><a target="_blank" href="https://findbashar.com/" class="page-scroll">Bashar's Portfolio</a></li>
        <li><a target="_blank" href="{{url('/login')}}" class="page-scroll">Admin Section</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro" style="background-image: url({{asset('/bingo')}}/{{$din->about_image}});background-size:cover;">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1>Welcome To<br>
              Bashar^CMS</h1>
            <p>At first, visit the site tour and then see the documentation to know about the application thoroughly.</p>
            <a target="_blank" href="https://www.youtube.com/watch?v=v-7p8VbsEyg&t=870s" class="btn btn-custom btn-lg page-scroll">Visit Site Tour</a> 
            <a target="_blank" href="https://findbashar.com/" class="btn btn-custom btn-lg page-scroll">Visit Bashar's Portfolio</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Get Touch Section -->
<div id="get-touch">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-md-offset-1">
        <h3>Only Bashar will handle the application</h3>
        <p>Get started today and complete our form </p>
      </div>
      <div class="col-xs-12 col-md-4 text-center"><a href="#contact" class="btn btn-custom btn-lg page-scroll">Complete the Form</a></div>
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="{{asset('/bingo')}}/{{$din->about_image}}" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>{{$din->about_title}}</h2>
          <p>{{$din->about_content}}</p>
          <h3>{{$din->about_point}}</h3>
          <div class="list-style">
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>
			  @forelse($jhima as $jhim)
                <li>{{$jhim->point}}</li>
				@empty
				<li>Nothing</li>
                @endforelse
              </ul>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Services Section -->
<div id="services">
  <div class="container">
    <div class="section-title">
      <h2>Our Services</h2>
    </div>
    
    <div class="row">
      
      @foreach($jhula as $jhuli)
      <div class="col-md-4">
        <div class="service-media"> <img src="{{asset('/bingo')}}/{{$jhuli->service_image}}" style="height:300px" alt=" "> </div>
        <div class="service-desc">
          <h3>{{$jhuli->service_title}}</h3>
          <p>{{$jhuli->service_details}}</p>
        </div>
      </div>
	  @endforeach
    </div>
  </div>
</div>
<div class="paginatewrap" style="width:150px;margin:auto;">
{{$jhula->links()}}
</div>
<!-- Gallery Section -->

<!-- Testimonials Section -->

<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <h2>Get In Touch</h2>
          <p>Please fill out the form below to send us an email and we will get back to you as soon as possible.</p>
        </div>
		
		         @if(session('status'))
					 <div class="alert alert-success">
				 {{ session('status')}}
				 </div>
				 @endif
		
        <form name="sentMessage" id="contactForm" action="/contact/submit" method="POST" >
		@csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Name"  name="sender_name" >
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email"  name="sender_email" >
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="sender_message" id="message" class="form-control" rows="4" placeholder="Message" ></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg ff">Send Message</button>
        </form>
      </div>
    </div>
    <div class="col-md-3 col-md-offset-1 contact-info">
      <div class="contact-item">
        <h4>Contact Info</h4>
        <p><span>Address</span>Ashuganj, Brahmanbaria<br>
          Brahmanbaria</p>
      </div>
      <div class="contact-item">
        <p><span>Phone</span>01834663387</p>
      </div>
      <div class="contact-item">
        <p><span>Email</span> smuhammad457@gmail.com</p>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="social">
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer Section -->
<div id="footer">
  <div class="container text-center">
    <p><span class="copyright">Copyright &copy;All rights reserved by  <a style="color:#9797b7;" target="_blank" href="https://findbashar.com/">Bashar</a></span></p>
  </div>
</div>

<script type="text/javascript" src="{{asset('/frontend/js/jquery.1.11.1.js')}}"></script> 
<script type="text/javascript" src="{{asset('/frontend/js/bootstrap.js')}}"></script> 
<script type="text/javascript" src="{{asset('/frontend/js/SmoothScroll.js')}}"></script> 
<script type="text/javascript" src="{{asset('/frontend/js/nivo-lightbox.js')}}"></script> 
<script type="text/javascript" src="{{asset('/frontend/js/jqBootstrapValidation.js')}}"></script> 

<script type="text/javascript" src="{{asset('/frontend/js/main.js')}}"></script>
<script type="text/javascript">
jQuery('.ff').click(function(){
	var name = jQuery('#name').val();
	var email = jQuery('#email').val();
	var message = jQuery('#message').val();
	if(name != '' && email != '' && message != ''){
		alert('Submitted');
	}
	else if (name == '' || email == '' || message == ''){
		alert('Field Required');
		return false;
	}
	
});
</script>
</body>
</html>