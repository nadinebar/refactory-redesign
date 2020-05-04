<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Refactory - Startseite</title>
    <link rel="icon" type="image/png" href="/assets/image/favicon/ms-icon-150x150.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/assets/image/favicon/android-icon-192x192.png" sizes="96x96">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/image/favicon/apple-icon-180x180.png">
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="/assets/image/favicon/apple-icon-precomposed.png">
    <link rel="shortcut icon" href="/assets/image/favicon/favicon-96x96.png" type="image/x-icon">
	<!-- Bootstrap , fonts & icons  -->
	<link rel="stylesheet" href="assets/plugins/bootstrap-4/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/fonts/icon-font/css/style.css">
	<link rel="stylesheet" href="assets/fonts/typography-font/typo.css">
	<link rel="stylesheet" href="assets/fonts/fontawesome-5/css/all.css">
	<!-- Plugin'stylesheets  -->
	<link rel="stylesheet" href="assets/plugins/aos/aos.min.css">
	<link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">
	<link rel="stylesheet" href="assets/plugins/nice-select/nice-select.css">
	<link rel="stylesheet" href="assets/plugins/slick/slick.css">
	<!-- Vendor stylesheets  -->
	<link rel="stylesheet" href="assets/css/settings.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- Custom stylesheet -->
	<link rel="stylesheet" href="assets/css/custom.css">


</head>

<body>
<div id="loading">
	<div class="load-circle"><span class="one"></span></div>
</div>
<div class="site-wrapper overflow-hidden">
	<div class="landing-5 position-relative">
		<!-- Header Area -->
        <?php include 'shared/navigation.php' ?>
		<!-- Hero Area -->
        <?php include 'home/header.php' ?>
		<!-- Benefits section -->
        <?php include 'home/benefits.php' ?>
		<!-- Feature section -->
        <?php include 'home/features.php' ?>
		<!-- Search section -->
        <?php include 'home/search.php' ?>
		<!-- Carts Area 3-->
        <?php include 'home/carts.php' ?>
		<!-- Pricing section -->
        <?php include 'home/pricing.php' ?>
		<!-- Faq section -->
        <?php include 'home/faq.php' ?>
		<!-- Newsletter section -->
        <?php include 'home/newsletter.php' ?>
		<!-- Contact section -->
        <?php include 'home/contact.php' ?>
		<!-- Footer section -->
        <?php include 'shared/footer.php' ?>
	</div>
</div>
<!-- Vendor Scripts -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/jquery/jquery-migrate.min.js"></script>
<script src="assets/plugins/bootstrap-4/js/bootstrap.bundle.min.js"></script>
<!-- Plugin's Scripts -->
<script src="assets/plugins/fancybox/jquery.fancybox.min.js"></script>
<script src="assets/plugins/nice-select/jquery.nice-select.min.js"></script>
<script src="assets/plugins/aos/aos.min.js"></script>
<script src="assets/plugins/slick/slick.min.js"></script>
<!-- Polyfill Script -->
<script src="assets/js/smoothscroll.js"></script>
<!-- Activation Script -->
<script src="assets/js/custom.js"></script>
</body>

</html>