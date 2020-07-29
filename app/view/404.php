<!DOCTYPE html>
<html lang="en">
<head>
    <title>AdminX - Page not found</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="<?= public_url('css/adminx.css') ?>" media="screen" />
</head>
<body>
<div class="adminx-container d-flex justify-content-center align-items-center">
    <div class="page-error">
        <div class="error-code">
            <i data-feather="x"></i>
        </div>
        <h1>Bu Sayfaya Erişiminiz Bulunmamaktadır.</h1>

        <p class="text-muted mb-5">
            Bu sayfada işlem yapmak için üyeliğinizin yetkisi bulunmamaktadır.
        </p>

        <a href="<?= site_url() ?>" class="btn btn-primary">Anasayfaya geri dön</a>

    </div>
</div>

<!-- If you prefer jQuery these are the required scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<script src="<?= public_url('js/my.js') ?>"></script>
<script src="<?= public_url('js/vendor.js') ?>"></script>
<script src="<?= public_url('js/adminx.js') ?>"></script>

<!-- If you prefer vanilla JS these are the only required scripts -->
<!-- script src="../dist/js/vendor.js"></script>
<script src="../dist/js/adminx.vanilla.js"></script-->
</body>
</html>
