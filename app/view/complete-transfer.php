<?php require 'statics/header.php'?>
<?php require 'statics/sidebar.php'?>
<div class="adminx-content">
    <div class="adminx-main-content">
        <div class="card mb-grid">
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
            <div class="row">
                    <div id="demo" class="col">
                        <div class="card mb-grid">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="card-header-title">Transfer Listesi</div>
                            </div>
                            <div id="demo" class="table-responsive-md">
                                <table class="table table-actions table-striped table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th scope="col">
                                            <label class="custom-control custom-checkbox m-0 p-0">
                                                <input type="checkbox" class="custom-control-input table-select-all">
                                                <span class="custom-control-indicator"></span>
                                            </label>
                                        </th>
                                        <th scope="col">NEREDEN</th>
                                        <th scope="col">NEREYE</th>
                                        <th scope="col">TARİH</th>
                                        <th scope="col">SAAT</th>
                                        <th scope="col">KİŞİ SAYISI</th>
                                        <th scope="col">BAGAJ SAYISI</th>
                                        <th scope="col">UÇUŞ KODU</th>
                                        <th scope="col">AD SOYAD</th>
                                        <th scope="col">TELEFON</th>
                                        <th scope="col">TRANSFERİ TAMAMLA</th>
                                    </tr>
                                    </thead>
                                    <?php for ($i=0;$i<count($transfer);$i++): ?>
                                        <tbody>
                                        <tr>
                                            <th scope="row">
                                                <label class="custom-control custom-checkbox m-0 p-0">
                                                    <input type="checkbox" class="custom-control-input table-select-row">
                                                    <span class="custom-control-indicator"></span>
                                                </label>
                                            </th>
                                            <td><?= $transfer[$i]['from_city'] . '/' .$transfer[$i]['from_district'] ?></td>
                                            <td><?= $transfer[$i]['to_city'] . '/' . $transfer[$i]['to_district'] ?></td>
                                            <td><?= $transfer[$i]['transfer_date'] ?></td>
                                            <td><?= $transfer[$i]['transfer_time'] ?></td>
                                            <td><?= $transfer[$i]['person_count'] ?></td>
                                            <td><?= $transfer[$i]['luggage_count'] ?></td>
                                            <td><?= $transfer[$i]['flight_code'] ?></td>
                                            <td><?= $transfer[$i]['p_name'] ?></td>
                                            <td><?= $transfer[$i]['phone'] ?></td>
                                            <td>
                                                <form action="<?= site_url('complete') ?>" method="post">
                                                    <input type="hidden" name="id" value="<?= $transfer[$i]['id'] ?>">
                                                    <button class="btn btn-sm btn-primary">TAMAMLA</button>
                                                </form>
                                            </td>
                                        </tr>

                                        </tbody>

                                    <?php endfor; ?>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
<?php require 'statics/footer.php'?>

