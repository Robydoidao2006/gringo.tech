<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gringo.Tech - Novo </title>
  
  <!-- style -->
  <link rel="stylesheet" type="text/css"  href="../../../assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css"  href="../../../assets/css/style.css">
  <link rel="stylesheet" type="text/css"  href="../../../assets/css/psx.css">
  <link rel="stylesheet" type="text/css"  href="../../../assets/css/contact.css">
  <link rel="stylesheet" type="text/css"  href="../../../assets/css/recrutamento.css">
	
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">

</head>
<body>
<!-- navbar -->
<?php include('../../../views/components/navbar.php');?> 





<!-- ========================= -->
<!--           Content         -->
<!-- ========================= -->


<!-- recruiting form -->
  <div id="contact" class="text-center">
    <div class="container contact-form">
      <div class="section-title center">
          
        <h3>Então, voçê quer fazer parte da team?</h3>
      </div>
      <div>
        <form name="sentMessage" id="contactForm" novalidate>
            <hr>
            <p>Voçê é bem humorado e cheio de energias positivas?
            Por que não se unir a nôs e encher de alegria os nossos leitores</p>
            <hr>

            <h3>Qualificações minimas</h3>
            <hr>
                <p>Idade minima : 15 anos.</p>
                <p>Ama o tipo de conteúdo que o site fornece</p>
                <p>Sabe escrever bem Português</p>
                <p>Disposto a colocar +10 horas de trabalho por semana</p>
                <p>Deve ser amigavel e respeitoso</p>
            <hr>
            <h3>Posições Abertas</h3>
            <hr>
                <p>Mod Talk - administra os comentarios</p>
                <p>Chief Editor - Criador de conteúdos</p>
                <p>Designer - Edita fotos e logos</p>
                <p>Programador - Responsável pelo mantenimento do site</p>
                <hr>
            <h3>Como aplicar?</h3>
            <hr>
                <p>
                Primeiramente obrigado pelo interese em fazer parte da team,
                para aplicar para qualquer posição, basta pre-encher 
                o formulario abaixo. Por gentileza, na "sua messagem" inclua as seguintes
                respostas:
                </p>
                <p>1) Qual a posição desejada</p>
                <p>2) Motivo pelo qual aplicou </p>
                <p>3) Por que deveriamos escolher voçê</p>
            <hr>

            <p>IMPORTANTE, leia antes de aplicar. - Nosso site & suas funcionalidades são mantidas por trabalhadores
             voluntarios, isto é dizer, que todos os responsaveis pela manutenção do site não
            recebem nenhum tipo de beneficio monetario  </p>

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
  </div><!-- recruiting form  ennd-->

    </div> <!-- row ends -->
</div> <!--  col ends-->




<!-- Stars -->

<?php include('../../../views/components/footer.php');?>

</section>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</body>

</html>