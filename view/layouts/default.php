<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $title; ?></title>
    <!-- <script src="/scripts/jquery.js"></script>
    <script src="/scripts/form.js"></script> -->
    <!-- <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../../css/styles.css"> -->
  </head>
  <body>
    <header class="d-flex justify-content-between align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <div id=logo>
        <!-- TODO camagru font -->
        <a href="/">Camagru</a>
      </div>
      <div class="d-inline">
        <a class="btn btn-outline-primary" href="/account/login">Log In</a>
        <a class="btn btn-outline-primary" href="/account/register">Sign up</a>
      </div>
    </header>
    <main>
    </main>
    <footer>
    </footer>
    <?php echo $content; ?>
  </body>
</html>
