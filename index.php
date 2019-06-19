<!-- Stampare a schermo una decina di dischi musicali (vedi screenshot) in due modi diversi:
1 - Solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
2 - Attraverso l’utilizzo di AJAX: al caricamento della pagina ajax chiederà attraverso una chiamata i dischi a php e li stamperà attraverso handlebars.
Utilizzare: Html, Sass, JS, jQuery, handlebars, Php -->
<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="public/js/app.js" charset="utf-8"></script>
    <link rel="stylesheet" href="public/css/app.css">
  </head>
  <body>
    <?php
      foreach ($dischi as $key => $value) { ?>
        <div class="container_disco">
          <img src="<?php echo $value['cover'] ?>" alt=""><br>
          <p><?php echo $value['nome disc'] ?></p>
          <p><?php echo $value['nome cant'] ?></p>
          <p><?php echo $value['anno'] ?></p>
        </div>
    <?php } ?>
  </body>
</html>
