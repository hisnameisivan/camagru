<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $title; ?></title>
    <!-- <script src="/scripts/jquery.js"></script>
    <script src="/scripts/form.js"></script> -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="/icon/favicon-16x16.png">
  </head>
  <body>

    <header class="d-flex justify-content-between align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <div id=logo>
        <a id="logo" href="/">Camagru</a>
      </div>
      <div class="d-inline">
        <a class="btn btn-outline-primary" href="/account/login">Log in</a>
        <a class="btn btn-outline-primary" href="/account/register">Sign up</a>
      </div>
    </header>

    <main class="content">
      <?php echo $content; ?>
    </main>

    <footer class="d-flex justify-content-center align-items-center pt-4 my-md-5 pt-md-5 border-top">
      <div id="about">
        2020, <a href="https://profile.intra.42.fr/users/waddam">Ivan Guzeev</a>
      </div>
    </footer>
  </body>
</html>
