<?php require 'statics/header.php' ?>
<?php require 'statics/sidebar.php' ?>
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
<div class="adminx-content">
    <div class="adminx-main-content">
        <div class="card mb-grid">
            <div class="row">
                <div id="demo" class="col">
                    <div class="card mb-grid">
                        <div class="col-lg-12">
                            <div class="card mb-grid text-center">
                                <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="card-tab-1" data-toggle="tab"
                                               href="#card-tab-content-1" role="tab" aria-controls="card-tab-content-1"
                                               aria-selected="true">Şoförler</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="card-tab-2" data-toggle="tab"
                                               href="#card-tab-content-2" role="tab" aria-controls="card-tab-1"
                                               aria-selected="false">Acentalar</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="card-tab-content-1" role="tabpanel"
                                             aria-labelledby="card-tab-1">

                                            <div class="row">
                                                <div id="demo" class="col">
                                                    <div class="card mb-grid">
                                                        <div id="demo" class="table-responsive-md">
                                                            <table class="table table-actions table-striped table-hover mb-0">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col">
                                                                        <label class="custom-control custom-checkbox m-0 p-0">
                                                                            <input type="checkbox"
                                                                                   class="custom-control-input table-select-all">
                                                                            <span class="custom-control-indicator"></span>
                                                                        </label>
                                                                    </th>
                                                                    <th scope="col">ADI SOYADI</th>
                                                                    <th scope="col">TELEFON NUMARASI</th>
                                                                    <th scope="col">EMAİL</th>
                                                                    <th scope="col">PLAKA</th>
                                                                    <th scope="col">İŞLEM</th>
                                                                </tr>
                                                                </thead>
                                                                <?php for ($i = 0; $i < count($drivers); $i++): ?>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <label class="custom-control custom-checkbox m-0 p-0">
                                                                                <input type="checkbox"
                                                                                       class="custom-control-input table-select-row">
                                                                                <span class="custom-control-indicator"></span>
                                                                            </label>
                                                                        </th>
                                                                        <td><?= $drivers[$i]['name_surname'] ?></td>
                                                                        <td><?= $drivers[$i]['phone'] ?></td>
                                                                        <td><?= $drivers[$i]['email'] ?></td>
                                                                        <td><?= $drivers[$i]['plaka'] ?></td>
                                                                        <td>
                                                                            <form action="<?= site_url('users') ?>" method="post">
                                                                                <input type="hidden" name="id" value="<?= $drivers[$i]['id'] ?>">
                                                                                <button href="#"
                                                                                        class="btn btn-sm btn-labeled btn-danger">
                      <span class="btn-label">
                        <span class="oi oi-trash" aria-hidden="true"></span>
                      </span>
                                                                                    <span class="btn-text">
                        SİL
                      </span>
                                                                                </button>
                                                                            </form></td>
                                                                    </tr>

                                                                    </tbody>

                                                                <?php endfor; ?>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="card-tab-content-2" role="tabpanel"
                                             aria-labelledby="card-tab-2">

                                            <div class="row">
                                                <div id="demo" class="col">
                                                    <div class="card mb-grid">
                                                        <div id="demo" class="table-responsive-md">
                                                            <table class="table table-actions table-striped table-hover mb-0">
                                                                <thead>
                                                                <tr>
                                                                    <th scope="col">
                                                                        <label class="custom-control custom-checkbox m-0 p-0">
                                                                            <input type="checkbox"
                                                                                   class="custom-control-input table-select-all">
                                                                            <span class="custom-control-indicator"></span>
                                                                        </label>
                                                                    </th>
                                                                    <th scope="col">ADI SOYADI</th>
                                                                    <th scope="col">TELEFON NUMARASI</th>
                                                                    <th scope="col">EMAİL</th>
                                                                    <th scope="col">ACENTA ADI</th>
                                                                    <th scope="col">İŞLEM</th>

                                                                </tr>
                                                                </thead>
                                                                <?php for ($i = 0; $i < count($owner); $i++): ?>
                                                                    <tbody>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <label class="custom-control custom-checkbox m-0 p-0">
                                                                                <input type="checkbox"
                                                                                       class="custom-control-input table-select-row">
                                                                                <span class="custom-control-indicator"></span>
                                                                            </label>
                                                                        </th>
                                                                        <td><?= $owner[$i]['name_surname'] ?></td>
                                                                        <td><?= $owner[$i]['phone'] ?></td>
                                                                        <td><?= $owner[$i]['email'] ?></td>
                                                                        <td><?= $owner[$i]['acenta_name'] ?></td>
                                                                        <td>
                                                                            <form action="<?= site_url('users') ?>" method="post">
                                                                                <input type="hidden" name="id" value="<?= $owner[$i]['id'] ?>">
                                                                            <button href="#"
                                                                               class="btn btn-sm btn-labeled btn-danger">
                      <span class="btn-label">
                        <span class="oi oi-trash" aria-hidden="true"></span>
                      </span>
                                                                                <span class="btn-text">
                        SİL
                      </span>
                                                                            </button>
                                                                            </form></td>

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
    </div>
    <?php require 'statics/footer.php' ?>
