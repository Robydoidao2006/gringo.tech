<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gringo.Tech</title>

    <!-- style  = Bootstrap - CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css"  href="../../../../assets/css/style.css">
    <link rel="stylesheet" type="text/css"  href="../../../../assets/css/navbar.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">

</head>

<body>

  
<!-- NavBar -->
<nav class="navbar navbar-inverse navbar-fixed-top" id="myDIV">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
            <ul class="navbar-brand">
                <li class="thumbnail homenail"><img src="../../../../assets/images/logo/homer.png" id="buttonlogo"><a href="../../../../index.php" class="active">HOME</a></li>
            </ul> 
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
            <li class="thumbnail"><img src="../../../../assets/images/logo/novo.png" id="buttonlogo"><a href="../../../../views/pages/novo/novo.php">NOVO</a></li>
            <li class="thumbnail"><img src="../../../../assets/images/logo/ps3.png" id="buttonlogo"><a href="../../../../views/pages/ps3/ps3.php">PS3</a></li>
            <li class="thumbnail"><img src="../../../../assets/images/logo/ps4.png" id="buttonlogo"><a href="../../../../views/pages/ps4/ps4.php">PS4</a></li>
            <li class="thumbnail"><img src="../../../../assets/images/logo/psvita.png" id="buttonlogo"><a href="../../../../views/pages/psvita/psvita.php">PS VITA</a></li>
        </ul>
        
        <!-- gringo.tech logo -->
        <div class="text-center"><img src="../../../../assets/images/logo/LogoNova.png" id="logo-img"></li>

            <ul class="nav navbar-nav navbar-right">          
                <li class="thumbnail"><img src="../../../../assets/images/logo/games.png" id="buttonlogo"><a href="../../../../views/pages/games/games.php">GAMES</a></li>
                <li class="thumbnail"><img src="../../../../assets/images/logo/chat.png" id="buttonlogo"><a href="../../../../views/pages/chat/chat.php">CHAT</a></li>
                <li class="thumbnail"><img src="../../../../assets/images/logo/forum.png" id="buttonlogo"><a href="../../../../views/pages/forum/forum.php">FORUM</a></li>     
                <li class="thumbnail"><img class="profilePicture" id="buttonlogo" src="../../../../assets/images/logo/profile.png"/>
                    <div id="fbUserPhoto"></div>
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">PROFILE<span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="../../../../views/pages/signinup/signinup.php">User login</a></li>
                            <li><a href="../../../../views/pages/admin/adminsignin.html">Admin login</a></li>
                            <li><a href="../../../../views/pages/dashbord/dashboard.html">Dashboard</a></li>
                            <li><a href="javascript:void(0);" onclick="fbLogin()" id="fbLink"><span></span>Facebook Login</a></li>
                            <li><a href="#">Ranking</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#" id="fbUserName">User Profile</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        <!-- end of logo-->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="../../../../assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="../../../../assets/js/script.js"></script> 
  <script type="text/javascript" src="../../../../assets/js/facebook.js"></script>





