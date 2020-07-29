<?php require 'statics/header.php' ?>
<?php require 'statics/sidebar.php' ?>
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
            <form action="<?= site_url('add-transfer') ?>" method="post">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card-body collapse show" id="card1">
                        <div class="card mb-grid">
                            <div class="card-header">
                                <div class="card-header-title">NEREDEN</div>
                            </div>
                            <div class="card-body">
                                <form id="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label" for="validationCustom01">İl</label>
                                            <select class="form-control" name="il" id="il" required>
                                                <option value="">-- İL SEÇİNİZ --</option>
                                                <?php foreach ($cities as $city): ?>
                                                    <option value="<?= $city['il_no'] ?>"><?= $city['isim'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label" for="validationCustom02">İlçe</label>
                                            <select class="form-control" name="ilce" id="ilce" required disabled>
                                                <option value="">-- İLÇE SEÇİNİZ --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label" for="validationCustom03">Açık Adres</label>
                                            <input type="text" name="acikadres" class="form-control" id="validationCustom03"
                                                   placeholder="Açık Adres" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card-body collapse show" id="card1">

                        <div class="card mb-grid">
                            <div class="card-header">
                                <div class="card-header-title">NEREYE</div>
                            </div>
                            <div class="card-body">

                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label" for="validationCustom01">İl</label>
                                            <select class="form-control" name="il2" id="il2" required>
                                                <option value="">-- İL SEÇİNİZ --</option>
                                                <?php foreach ($cities as $city): ?>
                                                    <option value="<?= $city['il_no'] ?>"><?= $city['isim'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label" for="validationCustom02">İlçe</label>
                                            <select class="form-control" name="ilce2" id="ilce2" required disabled>
                                                <option value="">-- İLÇE SEÇİNİZ --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label" for="validationCustom03">Açık Adres</label>
                                            <input type="text" name="acikadres2" class="form-control" id="validationCustom03"
                                                   placeholder="Açık Adres" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="card-body collapse show" id="card1">

                        <div class="form-group">
                            <label class="form-label">TARİH</label>
                            <input class="form-control date-human" name="date" type="date" placeholder="Pick date">
                        </div>
                        <div class="form-group">
                            <label class="form-label">KİŞİ SAYISI</label>
                            <input required class="form-control" name="personcount" type="text" placeholder="Kişi Sayısı">
                        </div>
                        <div class="form-group">
                            <label class="form-label">AD SOYAD</label>
                            <input required class="form-control" name="namesurname" type="text" placeholder="Adınız ve Soyadınız">
                        </div>
                        <div class="form-group">
                            <label class="form-label">UÇUŞ KODU</label>
                            <input required class="form-control" name="code" type="text" placeholder="Uçuş Kodu">
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="card-body collapse show" id="card1">

                        <div class="form-group">
                            <label class="form-label">SAAT</label>
                            <input required class="form-control" name="time" type="time" placeholder="Tarih Seçiniz">
                        </div>
                        <div class="form-group">
                            <label class="form-label">BAGAJ SAYISI</label>
                            <input required class="form-control" name="luggage" type="text" placeholder="Bagaj Sayısı">
                        </div>
                        <div class="form-group">
                            <label class="form-label">TELEFON</label>
                            <input required class="form-control" name="phone" type="text" placeholder="Telefon Numaranız">
                        </div>
                            <div class="form-group">
                                <label class="form-label">KARŞILAMA</label>
                                <input  class="form-control"  type="text" name="karsilama" id="">
                            </div>
                            <div class="form-group">
                                <label class="form-label">NAKİT</label>
                                <input  class="form-control" type="text" name="cost" id="">
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

        <?php require 'statics/footer.php' ?>
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
