<!DOCTYPE html>
<html lang="en">
<head>
    <title>AdminX - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="<?= public_url('css/adminx.css') ?>" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?= public_url('js/sweet/sweet.css') ?>" media="screen" />
</head>
<body>
<?php if(isset($error)): ?>
    <script>
        alert('<?= $error ?>');
    </script>

<?php endif; ?>
<?php if (isset($success)): ?>
    <script>
        alert('<?= $success ?>')
    </script>
<?php endif; ?>
<div class="adminx-container d-flex justify-content-center align-items-center">
    <div class="page-login">

        <div class="card mb-0">

            <div class="card-body">
                <form action="<?= site_url('login') ?>" method="post">
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail1" class="form-label">E MAİL</label>
                        <input name="email" type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleDropdownFormPassword1" class="form-label">ŞİFRE</label>
                        <input name="password" type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Şifre">
                    </div>

                    <input name="submit" value="1" type="hidden">
                    <button name="submit" type="submit" class="btn btn-sm btn-block btn-primary">GİRİŞ YAP</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- If you prefer jQuery these are the required scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<script src="<?= public_url('js/my.js') ?>"></script>
<script src="<?= public_url('js/vendor.js') ?>"></script>
<script src="<?= public_url('js/adminx.js') ?>"></script>
<script src="<?= public_url('js/sweet/sweet.js') ?>"></script>

<!-- If you prefer vanilla JS these are the only required scripts -->
<!-- script src="../dist/js/vendor.js"></script>
<script src="../dist/js/adminx.vanilla.js"></script-->
</body>
</html>
