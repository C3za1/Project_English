<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-12">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Maestros</title>
      <link rel="stylesheet" href="Css/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <link rel="stylesheet" href="assets/Css/main.css" />
      <link rel="stylesheet" type="text/css" href="Css/login.css">

</head>
<body>



      <div class="wrapper">
            <header>
                  <nav>
                        <div class="menu-icon">
                              <i class="fa fa-bars fa-2x"></i>
                        </div>
                        
                        <div class="logo" >UPAM</div>
                        <div class="menu">
                              <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="F_Articulo.php">Autorizar Articulos</a></li>
                                    <li><a href="Editor.html">Escribir Articulo</a></li>
                              </ul>
                        </div>
                  </nav>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
      <script type="text/javascript" src="Js/jquery-1.12.0.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
     <!-- <script type="text/javascript" src="Js/editor.js"></script> -->
      <script type="text/javascript">

      // Menu-toggle button

      $(document).ready(function() 
      {

            $('#txt-content').Editor();

            $('#txt-content').Editor('setText', ['<p style="color:black;"></p>']);    


            $(".menu-icon").on("click", function() 
            {
                  $("nav ul").toggleClass("showing");
            });

            $('#btn-enviar').click(function(e)
           {
                  e.preventDefault();
                  $('#txt-content').text($('#txt-content').Editor('getText'));
                  $('#frm-test').submit();                        
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() 
      {
            if($(window).scrollTop()) 
            {
                  $('nav').addClass('black');
            }

            else 
            {
                  $('nav').removeClass('black');
            }
      })


      </script>

</body>
</html>
<?php
}
?>