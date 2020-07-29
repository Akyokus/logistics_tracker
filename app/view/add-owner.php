<?php require 'statics/header.php'; ?>
<?php require 'statics/sidebar.php'; ?>
<div class="adminx-content">
    <div class="adminx-main-content">
        <div class="card mb-grid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-grid text-center">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="card-tab-1" data-toggle="tab" href="#card-tab-content-1" role="tab" aria-controls="card-tab-content-1" aria-selected="true">Şoför Ekle</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="card-tab-2" data-toggle="tab" href="#card-tab-content-2" role="tab" aria-controls="card-tab-1" aria-selected="false">Acenta Ekle</a>
                                </li>
                            </ul>
                        </div>
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
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="card-tab-content-1" role="tabpanel" aria-labelledby="card-tab-1">
                                    <form action="<?= site_url('add-owner') ?>" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                    <div class="col-lg-6">

                                        <div class="card-body collapse show" id="card1">


                                                    <div class="form-group">
                                                        <label class="form-label">PROFİL FOTOĞRAFI</label>
                                                    <div class="custom-file">
                                                        <input name="file" type="file" class="custom-file-input" id="customFile">
                                                        <label class="custom-file-label" for="customFile"></label>
                                                    </div>
                                                    </div>

                                            <div class="form-group">
                                                <label class="form-label">ADI SOYADI</label>
                                                <input required class="form-control date-human" name="namesurname" type="text" placeholder="ŞOFÖR AD SOYAD">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">PLAKA</label>
                                                <input required class="form-control" name="plaka" type="text" placeholder="ARAÇ PLAKASI">
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-lg-6">

                                        <div class="card-body collapse show" id="card1">

                                            <div class="form-group">
                                                <label class="form-label">TELEFON NUMARASI</label>
                                                <input required class="form-control" name="phone" type="text" placeholder="ŞOFÖR TELEFON NUMARASI">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">EMAİL</label>
                                                <input required class="form-control" name="email" type="text" placeholder="ŞOFÖR E-MAİL">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">ŞİFRE</label>
                                                <input required class="form-control" name="password" type="password" placeholder="ŞOFÖR ŞİFRE">
                                            </div>
                                        </div>
                                        <div class="card mb-grid">
                                            <input type="hidden" name="submit" value="1">
                                            <button type="submit" class="btn btn-pill btn-lg btn-primary">OLUŞTUR</button>
                                        </div>



                                    </div>
                                    </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="card-tab-content-2" role="tabpanel" aria-labelledby="card-tab-2">
                                    <form action="<?= site_url('add-owner') ?>" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">

                                            <div class="card-body collapse show" id="card1">

                                                <div class="form-group">
                                                    <label class="form-label">ADI SOYADI</label>
                                                    <input required class="form-control date-human" name="namesurname" type="text" placeholder="YETKİLİ AD SOYAD">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">ACENTA ADI</label>
                                                    <input required class="form-control" name="acentaadi" type="text" placeholder="ACENTA ADI">
                                                </div>

                                            </div>

                                        </div>
                                        <div class="col-lg-6">

                                            <div class="card-body collapse show" id="card1">

                                                <div class="form-group">
                                                    <label class="form-label">TELEFON NUMARASI</label>
                                                    <input required class="form-control" name="phone" type="text" placeholder="YETKİLİ TELEFON NUMARASI">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">EMAİL</label>
                                                    <input required class="form-control" name="email" type="text" placeholder="YETKİLİ E-MAİL">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">ŞİFRE</label>
                                                    <input required class="form-control" name="password" type="password" placeholder="YETKİLİ ŞİFRE">
                                                </div>
                                            </div>
                                            <div class="card mb-grid">
                                                <input type="hidden" name="submitAcenta" value="1">
                                                <button type="submit" class="btn btn-pill btn-lg btn-primary">OLUŞTUR</button>
                                            </div>

                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
<?php require 'statics/footer.php'; ?>
