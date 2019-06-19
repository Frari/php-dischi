<!-- Stampare a schermo una decina di dischi musicali (vedi screenshot) in due modi diversi:
1 - Solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
2 - Attraverso l’utilizzo di AJAX: al caricamento della pagina ajax chiederà attraverso una chiamata i dischi a php e li stamperà attraverso handlebars.
Utilizzare: Html, Sass, JS, jQuery, handlebars, Php -->
<?php /*include 'data.php';*/ ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="public/js/app.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.js"></script>
    <link rel="stylesheet" href="public/css/app.css">
  </head>
  <body>
    <?php
    // stampa con PHP
      /*foreach ($dischi as $key => $value) { ?>
        <div class="container_disco">
          <img src="<?php echo $value['cover'] ?>" alt=""><br>
          <p><?php echo $value['nome disc'] ?></p>
          <p><?php echo $value['nome cant'] ?></p>
          <p><?php echo $value['anno'] ?></p>
        </div>
    <?php }*/

     ?>
     <div class="container">       
     </div>
     <script id="template-disco" type="text/x-handlebars-template">
       <div class="container_disco">
         <img src="{{copertina}}" alt="album {{titolo}}"><br>
         <p>{{titolo}}</p>
         <p>{{artista}}</p>
         <p>{{anno}}</p>
       </div>
     </script>
  </body>
</html>
