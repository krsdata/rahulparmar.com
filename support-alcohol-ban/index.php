<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Liquor-free Madhya Pradesh</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

		<!-- Top menu -->
		<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!--<a class="navbar-brand" href="index.html">Bootstrap Contact Form Template</a>-->
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<span class="li-text">
								You can reach us on
							</span> 
							<!--<a href="#"><strong>links</strong></a> 
							<span class="li-text">
								here, or some icons: 
							</span>--> 
							<span class="li-social">
								<a href="https://www.facebook.com/Liquor-free-Madhya-Pradesh-%E0%A4%B6%E0%A4%B0%E0%A4%BE%E0%A4%AC-%E0%A4%AE%E0%A5%81%E0%A4%95%E0%A5%8D%E0%A4%A4-%E0%A4%B9%E0%A5%8B-%E0%A4%B9%E0%A4%AE%E0%A4%BE%E0%A4%B0%E0%A4%BE-%E0%A4%AE%E0%A4%A7%E0%A5%8D%E0%A4%AF-%E0%A4%AA%E0%A5%8D%E0%A4%B0%E0%A4%A6%E0%A5%87%E0%A4%B6-1748662735414427/" target="_new"><i class="fa fa-facebook" ></i></a> 
								<a href="mailto:sharma.ankur605@gmail.com"><i class="fa fa-envelope"></i></a> 
							</span>
						</li>
					</ul>
				</div>
			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Liquor-free Madhya Pradesh</strong></h1>
                            <br><h1>शराब मुक्त मध्य प्रदेश</h1>
                            <div class="description">
                            	<p>
	                            	आओ हम सब मिल कर बनाए मध्य प्रदेश को एक शराब मुक्त प्रदेश जुड़िये इस अभियान से और इस सफल बनाए, हमारा संकल्प है की हम अने वाले समय में प्रदेश को शराब मुक्त बना के इसे प्रगति और सफलता की और अग्रसर करे l 
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Add your views here</h3>
                            	</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-envelope"></i>
                        		</div>
                            </div>
                            <div class="form-bottom contact-form">
                            		 <?php if(!empty($_GET['s'])){ ?>
                                        <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Thank You!</strong><br>Your feedback has been sent successfully.</div>
                                    
                                    <?php } ?>
			                    <form role="form" action="submit.php" method="post">
                                    <div class="form-group">
			                        	<label class="sr-only" for="contact-subject">Full Name</label>
			                        	<input type="text" name="name" placeholder="Your name..." class="contact-subject form-control" id="name" required>
			                        </div>
                                    
			                    	<div class="form-group">
			                    		<label class="sr-only" for="contact-email">Email</label>
			                        	<input type="email" name="email" placeholder="Your email..." class="contact-email form-control" id="email" required>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="contact-subject">Phone</label>
			                        	<input type="text" name="phone" placeholder="Your contact number..." class="contact-subject form-control" id="phone" required>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="contact-message">Feedback Message</label>
			                        	<textarea name="message" placeholder="Put your views here..." class="contact-message form-control" id="message" required></textarea>
			                        </div>
                                    <div class="checkbox">
                                        <label class="mylabel" style="color: #fff !important;font-size: 30px !important;">
                                          <input type="checkbox" name="agree" id="agree" required style=" height: 26px;">Yes! I am Agree </label>
                                      </div>
			                        <button type="submit" class="btn">Send</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
      <!--<div class="top-content">   
         <div class="inner-bg">
         <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Next Heading </strong>Goes Here</h1>
                            <div class="description">
                            	<p>
	                            	There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. 
                            	</p>
                            </div>
                        </div>
                    </div>
          </div>          
 </div>  
  </div>--> 

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>