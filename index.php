<!DOCTYPE html>

<html>

<head>
    
    <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/FontAwesome.otf">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/carousel.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/register-style.css"/>
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <meta charset='utf-8'/>

</head>

<body> 
    
                                       <!--  TOP-BAR-->
   
<header>

    <div id="top-bar">

        <div class="container">

            <div class="row">

                <img class="col-md-2" style="height: 12%" src="images/Logo.jpg">

                <div class="col-md-6 col-md-offset-1">

                    <h1 style="margin: 0" class="text-uppercase text-center">Title</h1>

                    <div class="center-block row">

                        <div class="row">

                          <div class="col-md-2 col-md-offset-5" style="height: 2px; margin-top: 3px; background-color: #fce374; box-shadow: inset 0 1px 0 #fff6ce, inset 0 -1px 0 #e3c852, inset 0 0 0 1px #fce88d, 0 2px 4px rgba(0, 0, 0, 0.2)" >
                            
                          </div>


                        </div>

                        <div class="col-md-4 nav-links">

                            <a class="text-uppercase text-center">Acceuil</a>

                        </div>

                        <div class="col-md-4 nav-links">

                            <a class="text-uppercase text-center">Catégories</a>

                        </div>

                        <div class="col-md-4 nav-links">

                            <a class="text-uppercase text-center">A propos</a>

                        </div>

                        <div class="row">

                            <div style="height: 2px; width: 100%; background-color: #fce374; box-shadow: inset 0 1px 0 #fff6ce, inset 0 -1px 0 #e3c852, inset 0 0 0 1px #fce88d, 0 2px 4px rgba(0, 0, 0, 0.2)" class="col-md-12">


                            </div>

                    </div>


                </div>

            </div>

                 <!--   LOGIN/ SIGN IN -->

                  <div class="col-md-2 col-md-offset-1 dropdown">

                      <span class=" dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Connexion
                        <span class="caret"></span>
                      </span>
                                    <!--         SIGN IN-->

                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

                          <div class="row">

                            <div class="col-md-12">

                                <p class="text-center">Se connecter via</p>
                                <div class="social-buttons center-block">
                                    <a href="#" style="padding: 6px"class="btn btn-fb"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                                    <a href="#" class="right btn btn-tw"><i class="fa fa-twitter"></i>Google</a>
                                </div>
                                <span style="display: block" class="text-center">ou</span>
                                 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                        <div class="form-group">
                                             <label class="sr-only" for="exampleInputEmail2">Adresse email</label>
                                             <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                        </div>
                                        <div class="form-group">
                                             <label class="sr-only" for="exampleInputPassword2">Mot de passe</label>
                                             <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                             <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                                        </div>
                                 </form>
                            </div>

                                    <!--                        SIGN UP-->

                            <div class="bottom text-center">
                                <a id="signUp" href="#"><b>S'enregistrer</b></a>
                            </div>

                        </div>

                     </ul>

                </div>
                
            </div>

        </div>
        
    </div>


</header>
  
                                        <!--  TOP BAR-->
                                        
        
                           
                            
    <div id="separator" class="col-md-12"></div>
                                                
                                                
<!--                                                SECTION-->
               
    <div class="container">
               
    <div class="row">
                
    <section class="col-md-6">
    
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 50%">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" >
          <div class="container">
            <div class="carousel-caption">
              <h1>Coup de coeur</h1>
              <p> <?php echo $dataOne[0] ?></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
   
    
    </section>
    
    </div>
    
    </div>
    
    
<!--                                                        ASIDE-->
    
    <aside style="width: 20%; height: 100%; float: right">
      
        <p>wesh</p>
       
    </aside>
    
    
    <footer>
       
       <div class="container">
       
        
          <p><a href="http://www.freepik.com/free-vector/infinite-logo_798107.htm">Designed by Freepik</a></p>
        
       </div>
        
    </footer>



<!--                                        LOGIN WINDOW-->
    
    <div id="windowLogin">            
        <div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Inscrivez-vous pour créer, modifier des article et des commentaires.</h5>
					<form class="" method="post" action="#">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Votre nom</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Votre email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Pseudo</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Mot de passe</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<a target="_blank" type="button" id="button" class="btn btn-success btn-lg btn-block login-button">S'inscrire</a>
						</div>
						<div class="form-group ">
							<a target="_blank" type="button" id="closeLogin" class="btn btn-danger btn-lg btn-block login-button">Fermer</a>
						</div>
						
					</form>
				</div>
			</div>
		</div>
     </div>
    
    <div id="page">  
   
    </div>



<!--                                        LOGIN WINDOW-->

    <div id="windowLogin">
        <div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Inscrivez-vous pour créer, modifier des article et des commentaires.</h5>
                <form name="beephp_registration" class="" method="POST" action="php/beephp_register.php">

                    <div class="form-group">
                        <label for 'nom' class="cols-sm-2 control-label">Your Name</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="prenom" id="name"  placeholder="Enter your Name"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for 'mail' class="cols-sm-2 control-label">Your Email</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="mail" id="email"  placeholder="Enter your Email"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for 'login' class="cols-sm-2 control-label">Username</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="login" id="username"  placeholder="Enter your Username"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for 'm_passe' class="cols-sm-2 control-label">Password</label>
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" name="m_passe" id="password"  placeholder="Enter your Password"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group ">
                        <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                    </div>
						<div class="form-group ">
							<a target="_blank" type="button" id="closeLogin" class="btn btn-danger btn-lg btn-block login-button">Fermer</a>
						</div>

					</form>
				</div>
			</div>
		</div>
     </div>

                <!--                           LOGIN WINDOW-->


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/script.js"></script>

</body>

</html>
