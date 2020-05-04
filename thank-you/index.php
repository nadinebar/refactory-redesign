<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Refactory - Thank you</title>
  <link rel="icon" type="image/png" href="/assets/image/favicon/ms-icon-150x150.png" sizes="32x32">
  <link rel="icon" type="image/png" href="/assets/image/favicon/android-icon-192x192.png" sizes="96x96">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/image/favicon/apple-icon-180x180.png">
  <link rel="apple-touch-icon-precomposed" sizes="180x180" href="/assets/image/favicon/apple-icon-precomposed.png">
  <link rel="shortcut icon" href="/assets/image/favicon/favicon-96x96.png" type="image/x-icon">
  <!-- Bootstrap , fonts & icons  -->
  <link rel="stylesheet" href="../assets/plugins/bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/fonts/icon-font/css/style.css">
  <link rel="stylesheet" href="../assets/fonts/typography-font/typo.css">
  <link rel="stylesheet" href="../assets/fonts/fontawesome-5/css/all.css">
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" href="../assets/plugins/aos/aos.min.css">
  <link rel="stylesheet" href="../assets/plugins/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="../assets/plugins/nice-select/nice-select.css">
  <link rel="stylesheet" href="../assets/plugins/slick/slick.css">
  <!-- Vendor stylesheets  -->
  <link rel="stylesheet" href="../assets/css/settings.css">
  <link rel="stylesheet" href="../assets/css/main.css">
  <!-- Custom stylesheet -->
  <link rel="stylesheet" href="../assets/css/custom.css">
</head>

<body>
  <div id="loading">
    <div class="load-circle"><span class="one"></span></div>
  </div>
  <div class="site-wrapper overflow-hidden">
    <div class="thank-page">
      <!-- Header Area -->
        <?php include '../shared/second-navigation.php' ?>
      <main class="thank-page-main">
        <div class="container">
            <?php if($_GET['type'] === 'success' && isset($_GET['message'])) : ?>
                <div class="contents">
                    <div class="content-icon">
                        <img style="max-width: 50%; margin-top: 5px;" src="../assets/image/png/newsletter-succes.png" alt="">
                    </div>
                    <div class="content-text">
                        <h1 class="title">Vielen Dank</h1>
                        <p><?php echo($_GET['message']); ?> </p>
                    </div>
                    <div class="content-btn">
                        <a href="/" class="btn btn-primary--outlined">Zurück zur Startseite</a>
                    </div>
                </div>
            <?php elseif ($_GET['type'] === 'failed' && isset($_GET['message'])) : ?>
                <div class="contents">
                    <div class="content-icon">
                        <img style="max-width: 50%; margin-top: 5px;" src="../assets/image/png/newsletter-error.png" alt="">
                    </div>
                    <div class="content-text">
                        <h1 class="title">Ein Fehler ist aufgetreten</h1>
                        <p><?php echo($_GET['message']); ?></p>
                    </div>
                    <div class="content-btn">
                        <a href="/" class="btn btn-primary--outlined">Zurück zur Startseite</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
      </main>
      <!-- Footer section -->
        <div class="landing-5">
            <?php include '../shared/footer.php' ?>
        </div>
    </div>
  </div>
  <!-- Vendor Scripts -->
  <script src="../assets/plugins/jquery/jquery.min.js"></script>
  <script src="../assets/plugins/jquery/jquery-migrate.min.js"></script>
  <script src="../assets/plugins/bootstrap-4/js/bootstrap.bundle.min.js"></script>
  <!-- Plugin's Scripts -->
  <script src="../assets/plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="../assets/plugins/nice-select/jquery.nice-select.min.js"></script>
  <script src="../assets/plugins/aos/aos.min.js"></script>
  <script src="../assets/plugins/slick/slick.min.js"></script>
  <!-- Activation Script -->
  <script src="../assets/js/custom.js"></script>
</body>

</html>