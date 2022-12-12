<!-- 
# WhatsApp EasyForm - Versão 3.3 - Março, 2022
# Formulário de Cotação
# Desenvolvedor: Gustavo Henrique Ribeiro
# Contato - gustavoribeiro1011@gmail.com - Telefone/WhatsApp +55 (43) 99626-2702
# Canal no Youtube: https://www.youtube.com/channel/UCNhMTC1yj-h5D3FALy_gy6g/
-->
<!doctype html>
<html lang="pt-br">

<head>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
  <!-- Floatlabel -->
  <link href="dist/float-label/jquery.FloatLabel.css" rel="stylesheet">
  <!-- EasyForm Template CSS-->
  <?php include("css/wef-default.php"); ?>
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="img/wef-ico.ico" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <title id="title_page"></title>
</head>

<body>


  <div class="logo"></div>
  <div class="formulario form-contato">

    <!--ANOTAÇÕES -->
    <div style="color:pink; margin-bottom:30px;display:none;" align="left">
      <small>Anotações:<br></small>
      <small>- fazer data picker (data ida e data volta)<br></small>
      <small>- validar formatação da mensagem no whatsapp<br></small>
      <small>- colocar um navbar<br></small>
    </div>

    <h3 id="title_form" style="font-size:1.2rem;" align="left"></h3>
    <p>





  </div>
  <div class="formulario form-sucesso" style="display:none;"></div>

  <div id="certificate"></div>

  <div id='pixFac'></div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
  <script src="https://kit.fontawesome.com/c8a127f596.js" crossorigin="anonymous"></script>
  <!-- Floatlabel -->
  <script src="dist/float-label/jquery.FloatLabel.js"></script>



  <!-- Wef -->
  <?php include("config.php"); ?>

  <!-- Builder -->
  <?php include("../wef_builder/wef_builder.php"); ?>


  <!-- Custom -->
  <?php include("custom.php"); ?>

  <script>
    $('.js-float-label-wrapper').FloatLabel();
  </script>

</body>

</html>