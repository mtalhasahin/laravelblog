<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->

<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap Stylesheet -->
<link rel="stylesheet" href="{{URL::to('Backend/bootstrap/css/bootstrap.min.css')}}" media="screen">

<!-- Uniform Stylesheet -->
<link rel="stylesheet" href="{{URL::to('Backend/plugins/uniform/css/uniform.default.css')}}" media="screen">

<!-- Plugin Stylsheets first to ease overrides -->

<!-- End Plugin Stylesheets -->

<!-- Main Layout Stylesheet -->
<link rel="stylesheet" href="{{URL::to('Backend/assets/css/fonts/icomoon/style.css')}}" media="screen">
<!--<link rel="stylesheet" href="{{URL::to('Backend/assets/css/login.css')}}" media="screen">-->
<link rel="stylesheet" href="{{URL::to('Backend/plugins/zocial/zocial.css')}}" media="screen">
<link href="{{URL::to('Backend/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{URL::to('Backend/assets/css/stil.css')}}" media="screen">

    <!-- Pnotify -->
    
        {{HTML::style('Backend/plugins/pnotify/jquery.pnotify.css')}}

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<title>Muhammet Talha Şahin | Kişisel Blog</title>

</head>

<body>


    <div class="container center">
    <div class="row">
    	<div class="col-md-4 col-md-offset-4 ortalama">
            <div class="profile-userpic"> 
            <img src="Backend/assets/images/profile.png" class="img-responsive" alt="">
    		</div>
                <div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Admin Girişi</h3>
                                <hr class="colorgraph">
			 	</div>
                    
			  	<div class="panel-body">
                                    <form accept-charset="UTF-8" role="form" method="post" action="{{URL::to('adminpost')}}">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="mtalhasahin@hotmail.com" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Şifre" name="password" type="password" value="">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Beni Hatırla
			    	    	</label>
			    	    </div>
			    		<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
			    	</fieldset>
			      	</form>
    
			    </div>
			</div>
		</div>
	</div>
</div>

	<!-- Core Scripts -->
	<script src="{{URL::to('Backend/assets/js/libs/jquery-1.8.3.min.js')}}"></script>
	<script src="{{URL::to('Backend/assets/js/libs/jquery.placeholder.min.js')}}"></script>
    
    <!-- Login Script -->
    <script src="{{URL::to('Backend/assets/js/login.js')}}"></script>

    <!--Validation -->
    <script src="{{URL::to('Backend/plugins/validate/jquery.validate.min.js')}}"></script>
    <script src="{{URL::to('Backend/plugins/validate/localization/messages_tr.js')}}"></script>
    <!-- Uniform Script -->
    <script src="{{URL::to('Backend/plugins/uniform/jquery.uniform.min.js')}}"></script>

    <!-- Pnotify -->
    {{HTML::script('Backend/plugins/pnotify/jquery.pnotify.min.js')}}
    
  @if(Session::has('mesaj'))  
    <script>
    $.pnotify.defaults.history = false;
    
				$.pnotify({
				    title: '{{Session::get("title")}}',
				    text: '{{Session::get("text")}}',
				    type: '{{Session::get("type")}}'
				});
    </script>
    @endif
</body>

</html>

