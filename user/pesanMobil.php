<?php
include 'header.php';
include 'sidebar.php';
// include '../controller/model.php';
$mobil = new Model();
$tampil = new Model();
?>
<div class="main-panel">
    <div class="content">
        <div class="container-fluid" style="justify-content: center;">
            <div class="col-8">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">PESAN SEKARANG</h4>
                            <p class="card-category">KAPANPUN DAN DIMANAPUN</p>
                        </div>
                        <div class="card-body">
                            <form action="insertTransaksi.php" method="POST">
                                <div class="row">
                                    <!-- <div class="col-md-5">
                                            <div class="form-group">
                                            <label class="bmd-label-floating">Company (disabled)</label>
                                            <input type="text" class="form-control" disabled>
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Username</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email address</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div> -->
                                </div>
                                <!-- <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Fist Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Last Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Adress</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div> -->
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>MOBIL</label>
                                            <select name="mobil" class="form-control mobil">
                                                <?php foreach ($mobil->select_mobil() as $value) : ?>
                                                    <option value="<?= $value['tarif'] ?>" data-harga="<?= $value['tarif'] ?>"><?= strtoupper($value['merek'])  ?></option>

                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">TARIF</label>
                                            <input type="text" id="harga" name="harga" disabled required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">HARI</label>
                                            <input type="text" pattern="[0-9]" class=" form-control" name="hari" autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>message</label>
                                            <div class="form-group">
                                                <label class="bmd-label-floating"></label>
                                                <textarea class="form-control" pattern="[a-zA-Z0-9]{2,35}]" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">PESAN</button>
                                <div class="clearfix"></div>
                                <button type="submit" class="btn btn-primary pull-right">DRIVER</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        const updateMobil = document.querySelector('.mobil');
        updateMobil.addEventListener('change', function(e) {
            const harga = document.querySelector('#harga');
            const opsiDipilih = updateMobil.options[updateMobil.selectedIndex];
            harga.value = opsiDipilih.getAttribute('data-harga');

        });
    </script>

    <?php include 'footer.php' ?>