<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gringo.Tech - Sign Up</title>

	<!-- style -->
	  <link rel="stylesheet" type="text/css"  href="../../../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css"  href="../../../assets/css/style.css">
    <link rel="stylesheet" type="text/css"  href="../../../assets/css/psx.css">
    <link rel="stylesheet" type="text/css"  href="../../../assets/css/signinup.css">

	
 <!-- fonts -->
  <!-- <link href="http://allfont.net/allfont.css?fonts=zrnic" rel="stylesheet" type="text/css" /> -->
  <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">

</head>
<body>
<?php include('../../../views/components/navbar.php');?> 

  <!-- *************************** -->
  <!-- Sign Up  option starts here -->
  <!-- *************************** -->
  <div class="form-sign ">
      
    <ul class="tab-group">
      <li class="tab active"><a href="#signup">Sign Up</a></li>
      <li class="tab"><a href="#login">Log In</a></li>
    </ul>
        
        <div class="tab-content">
          <div id="signup">   
            <h1>Sign Up é de graça</h1>
            
            <form action="cadastra-usuario.php" method="post">
            
            <div class="top-row">
              <div class="field-wrap">
                <label>
                  Seu Nome<span class="req">*</span>
                </label>
                <input type="text" name="name" required autocomplete="off"/>
              </div>
          
              <div class="field-wrap">
                <label>
                  nickName<span class="req">*</span>
                </label>
                <input type="text" name="nickName" maxlength="16" required autocomplete="off"/>
              </div>
            </div>
  
            <div class="field-wrap">
              <label>
                Seu Email <span class="req">*</span>
              </label>
              <input type="email" name="email" required autocomplete="off"/>
            </div>
            
            <div class="field-wrap">
              <label>
                Sua Senha<span class="req">*</span>
              </label>
              <input type="password" name="senha" maxlength="16" required autocomplete="off"/>
            </div>
            
            <button type="submit" class="button button-block"/>Envia Cadastro</button>
            
            </form> 
            </div>

  <!-- ************************ -->
  <!-- Login option starts here -->
  <!-- ************************ -->

         
          
          <div id="login">   
            <h1>Bem-vindo!</h1>
            
            <form action="acesso-usuario.php" method="get">
            
              <div class="field-wrap">
              <label>
              Seu Email <span class="req">*</span>
              </label>
              <input type="email"required autocomplete="off"/>
            </div>
            
            <div class="field-wrap">
              <label>
                Sua Senha<span class="req">*</span>
              </label>
              <input type="password"required autocomplete="off"/>
            </div>
            
            <p class="forgot"><a href="#">Esqueceu Sua Senha?</a></p>
            
            <button class="button button-block"/>Log In</button>
            
            </form>
  
          </div>
          
        </div><!-- tab-content -->

  </div> <!-- /form -->

  <?php include('../../../views/components/footer.php');?> 

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- <script src="https://www.gstatic.com/firebasejs/5.0.4/firebase.js"></script> -->
    <!-- <script type="text/javascript" src="../../../assets/js/bootstrap.js"></script> -->
    <!-- <script type="text/javascript" src="../../../assets/js/script.js"></script>  -->
    <script type="text/javascript" src="../../../assets/js/signinup.js"></script>

</html>