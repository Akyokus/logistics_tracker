<?php
require 'statics/header.php';
require 'statics/sidebar.php'; ?>
<!-- adminx-content-aside -->
<div class="adminx-content">


    <div class="adminx-main-content">
        <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb adminx-page-breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ana Sayfa</li>
                </ol>
            </nav>



            <div class="row">


                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="card border-0 bg-primary text-white text-center mb-grid w-100">
                        <div class="d-flex flex-row align-items-center h-100">
                            <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                                <i data-feather="alert-circle"></i>
                            </div>
                            <div class="card-body">
                                <div class="card-info-title">İşlemdeki Transfer</div>
                                <h3 class="card-title mb-0">
                                    <?= count($waiting_transfer) ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 d-flex">
                    <div class="card border-0 bg-success text-white text-center mb-grid w-100">
                        <div class="d-flex flex-row align-items-center h-100">
                            <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                                <i data-feather="check"></i>
                            </div>
                            <div class="card-body">
                                <div class="card-info-title">Tamamlanan Transfer</div>
                                <h3 class="card-title mb-0">
                                    <?= count($completed_transfer) ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card mb-grid text-center">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="card-tab-1" data-toggle="tab" href="#card-tab-content-1" role="tab" aria-controls="card-tab-content-1" aria-selected="true">Bekleyen Transferler</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="card-tab-2" data-toggle="tab" href="#card-tab-content-2" role="tab" aria-controls="card-tab-1" aria-selected="false">İşlemdeki Transferler</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="card-tab-3" data-toggle="tab" href="#card-tab-content-3" role="tab" aria-controls="card-tab-1" aria-selected="false">Tamamlanmış Transferler</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="card-tab-content-1" role="tabpanel" aria-labelledby="card-tab-1">

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
                                                                </tr>

                                                                </tbody>

                                                            <?php endfor; ?>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                                <div class="tab-pane fade" id="card-tab-content-2" role="tabpanel" aria-labelledby="card-tab-2">

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
                                                            </tr>
                                                            </thead>
                                                            <?php for ($i=0;$i<count($waiting_transfer);$i++): ?>
                                                                <tbody>
                                                                <tr>
                                                                    <th scope="row">
                                                                        <label class="custom-control custom-checkbox m-0 p-0">
                                                                            <input type="checkbox" class="custom-control-input table-select-row">
                                                                            <span class="custom-control-indicator"></span>
                                                                        </label>
                                                                    </th>
                                                                    <td><?= $waiting_transfer[$i]['from_city'] . '/' .$waiting_transfer[$i]['from_district'] ?></td>
                                                                    <td><?= $waiting_transfer[$i]['to_city'] . '/' . $waiting_transfer[$i]['to_district'] ?></td>
                                                                    <td><?= $waiting_transfer[$i]['transfer_date'] ?></td>
                                                                    <td><?= $waiting_transfer[$i]['transfer_time'] ?></td>
                                                                    <td><?= $waiting_transfer[$i]['person_count'] ?></td>
                                                                    <td><?= $waiting_transfer[$i]['luggage_count'] ?></td>
                                                                    <td><?= $waiting_transfer[$i]['flight_code'] ?></td>
                                                                    <td><?= $waiting_transfer[$i]['p_name'] ?></td>
                                                                    <td><?= $waiting_transfer[$i]['phone'] ?></td>

                                                                </tr>

                                                                </tbody>

                                                            <?php endfor; ?>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                                <div class="tab-pane fade" id="card-tab-content-3" role="tabpanel" aria-labelledby="card-tab-3">

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
                                                        </tr>
                                                        </thead>
                                                        <?php for ($i=0;$i<count($completed_transfer);$i++): ?>
                                                            <tbody>
                                                            <tr>
                                                                <th scope="row">
                                                                    <label class="custom-control custom-checkbox m-0 p-0">
                                                                        <input type="checkbox" class="custom-control-input table-select-row">
                                                                        <span class="custom-control-indicator"></span>
                                                                    </label>
                                                                </th>
                                                                <td><?= $completed_transfer[$i]['from_city'] . '/' .$completed_transfer[$i]['from_district'] ?></td>
                                                                <td><?= $completed_transfer[$i]['to_city'] . '/' . $completed_transfer[$i]['to_district'] ?></td>
                                                                <td><?= $completed_transfer[$i]['transfer_date'] ?></td>
                                                                <td><?= $completed_transfer[$i]['transfer_time'] ?></td>
                                                                <td><?= $completed_transfer[$i]['person_count'] ?></td>
                                                                <td><?= $completed_transfer[$i]['luggage_count'] ?></td>
                                                                <td><?= $completed_transfer[$i]['flight_code'] ?></td>
                                                                <td><?= $completed_transfer[$i]['p_name'] ?></td>
                                                                <td><?= $completed_transfer[$i]['phone'] ?></td>
                                                            </tr>

                                                            </tbody>

                                                        <?php endfor; ?>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<?php require 'statics/footer.php'; ?>

