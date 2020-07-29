<?php require 'statics/header.php'?>
<?php require 'statics/sidebar.php'?>
<div class="adminx-content">
    <div class="adminx-main-content">
        <div class="card mb-grid">
            <div class="row">
                <?php if(isset($error)): ?>
                    <script>
                        alert('<?= $error ?>');
                    </script>

                <?php endif; ?>
                <?php if (isset($success)): ?>
                    <script>
                        alert('<?= $success ?>');
                    </script>
                <?php endif; ?>
                <div class="col">
                    <div class="card mb-grid">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div id="icerik" class="card-header-title">Transferi Tamamla</div>
                        </div>
                        <div class="table-responsive-md">
                            <table class="table table-actions table-striped table-hover mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">
                                        <label class="custom-control custom-checkbox m-0 p-0">
                                            <input type="checkbox" class="custom-control-input table-select-all">
                                            <span class="custom-control-indicator"></span>
                                        </label>
                                    </th>
                                    <th scope="col">NEREYE</th>
                                    <th scope="col">NEREYE</th>
                                    <th scope="col">TARİH</th>
                                    <th scope="col">SAAT</th>
                                    <th scope="col">KİŞİ SAYISI</th>
                                    <th scope="col">BAGAJ SAYISI</th>
                                    <th scope="col">UÇUŞ KODU</th>
                                    <th scope="col">AD SOYAD</th>
                                    <th scope="col">TELEFON</th>
                                </tr>
                                </thead>

                                    <tbody>
                                    <tr>
                                        <th scope="row">
                                            <label class="custom-control custom-checkbox m-0 p-0">
                                                <input type="checkbox" class="custom-control-input table-select-row">
                                                <span class="custom-control-indicator"></span>
                                            </label>
                                        </th>
                                        <td><?= $transfer['from_city'] . '/' .$transfer['from_district'] ?></td>
                                        <td><?= $transfer['to_city'] . '/' .$transfer['to_district']?></td>
                                        <td><?= $transfer['transfer_date'] ?></td>
                                        <td><?= $transfer['transfer_time'] ?></td>
                                        <td><?= $transfer['person_count'] ?></td>
                                        <td><?= $transfer['luggage_count'] ?></td>
                                        <td><?= $transfer['flight_code'] ?></td>
                                        <td><?= $transfer['p_name'] ?></td>
                                        <td><?= $transfer['phone'] ?></td>
                                    </tr>

                                    </tbody>


                            </table>
                        </div>
                        <?php if (!$transfer['cost']): ?>
                        <form action="<?= site_url('complete') ?>" method="post">
                        <div class="form-group">
                            <label class="form-label">Lütfen Ücreti Giriniz (TL)</label>
                            <input type="text" class="form-control" name="cost">
                        </div>
                            <div class="card mb-grid">
                                <input type="hidden" name="transfer_id" value="<?= $transfer['id'] ?>">
                            <button class="btn btn-pill btn-lg btn-primary">TAMAMLA</button>
                            </div>
                        </form>
                        <?php else: ?>
                        <label class="form-label">Transfer Ücreti (TL)</label>
                        <h2><?= $transfer['cost'] ?></h2>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>

        <?php require 'statics/footer.php'?>
        <script>
            var choices = new Choices('.js-choice');

            var choices2 = new Choices('.js-choice-remove', {
                removeItemButton: true,
            });

            var cleave = new Cleave('.input-credit-card', {
                creditCard: true,
                onCreditCardTypeChanged: function (type) {
                    // update UI ...
                }
            });

            var cleave2 = new Cleave('.input-date', {
                date: true,
                datePattern: ['Y', 'm', 'd']
            });

            var cleave3 = new Cleave('.input-numeral', {
                numeral: true,
                numeralThousandsGroupStyle: 'thousand'
            });

            var cleave = new Cleave('.input-prefix', {
                prefix: 'INVOICE-',
                uppercase: true
            });

            flatpickr(".date-default", {
                allowInput: true
            });
            flatpickr(".date-time", {
                allowInput: true,
                enableTime: true,
            });
            flatpickr(".date-human", {
                allowInput: true,
                altInput: true,
            });
            flatpickr(".date-inline", {
                allowInput: true,
                inline: true,
            });
        </script>
