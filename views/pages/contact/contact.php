<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Gringo.Tech - Contate-nos</title>
<!-- Stylesheet -->
	  <link rel="stylesheet" type="text/css"  href="../../../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css"  href="../../../assets/css/style.css">
    <link rel="stylesheet" type="text/css"  href="../../../assets/css/psx.css">
    <link rel="stylesheet" type="text/css"  href="../../../assets/css/contact.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>

</head>

<body>
<!-- Navbar -->
<?php include('../../../views/components/navbar.php');?> 

  <div id="contact" class="text-center">
    <div class="container contact-form">
      <div class="section-title center">
        <h1>Alguma Sugestão ou pergunta?</h1>
      </div>
      <div>
        <form name="sentMessage" id="contactForm" novalidate>
        
              <div class="field-wrap">
                  <label>
                    Seu Nome<span class="req">*</span>
                  </label>
                <input type="text" id="name" class="form-control" required="required">
                <p class="help-block text-danger"></p>
              </div>
              <div class="field-wrap">
                  <label>
                    Seu Email<span class="req">*</span>
                  </label>
                <input type="email" id="email" class="form-control"  required="required">
                  <p class="help-block text-danger"></p>
            </div>


          <div class="field-wrap">
              <label>
                Sua Mensagem<span class="req">*</span>
              </label>
            <textarea name="message" id="message" class="form-control" rows="1" required></textarea>
              <p class="help-block text-danger"></p>
          </div>
          <!-- user feedback - sucess sent /or error -->
          <div id="success"></div>
          <button type="submit" class="button button-block"/>Enviar Mensagem</button>
        </form>
      </div>
    </div>
  </div>

<!-- ps-stars -->
<?php include('../../../views/components/ps-stars.php');?>
<!-- footer -->
<?php include('../../../views/components/footer.php');?>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- <script type="text/javascript" src="js/jquery.1.11.1.js"></script>  -->
<!-- <script type="text/javascript" src="js/bootstrap.js"></script>  -->
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/test.js"></script> 



</body>
</html>