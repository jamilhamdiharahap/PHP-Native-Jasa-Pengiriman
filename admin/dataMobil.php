<?php
include 'header.php';
include 'sidebar.php';
// include '../controller/model.php';
$data = new Model();
?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>MOBIL</h1>
            <!-- <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div> -->
        </div>
        <div class="section-body">
            <div>
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-header" style="background: dimgray;">
                            <div style="text-align: center;">
                                <h4 style="color: ghostwhite;">Add</h4>
                            </div>
                            <div class="" style="display: flex-end;justify-content:end;">
                                <a href="#addEmployeeModal" data-toggle="modal"><i class="fas fa-plus btn btn-outline-primary fas-5px"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php if ($data->select_mobil()->num_rows == null) : ?>
                                <h1>DATA CAR EMPTY</h1>
                            <?php else : ?>
                                <table class="table table-dark">
                                    <thead class="thead thead-danger">
                                        <tr>
                                            <th>NO</th>
                                            <th>OBJECT</th>
                                            <th>MERK</th>
                                            <th>NO SERI</th>
                                            <th>JUMLAH</th>
                                            <th>KAPASITAS</th>
                                            <th>TARIF</th>
                                            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $no = 0;
                                        foreach ($data->select_mobil() as $value) : ?>
                                            <tr>
                                                <td><?= ++$no ?></td>
                                                <td><img src="../image/<?= $value['foto']; ?>" width="70" height="50"></td>
                                                <td><?= strtoupper($value['merek']); ?></td>
                                                <td><?= $value['noSeri']; ?></td>
                                                <td><?= $value['jumlah'] ?></td>
                                                <td><?= $value['kapasitas'] ?></td>
                                                <td><?= "Rp. " . number_format($value['tarif'], 2, ',', '.'); ?></td>
                                                <td>
                                                    <a href="#editEmployeeModal<?= $value['id'] ?>" data-toggle="modal"><i class="fas fa-edit btn btn-outline-warning"></i></a>
                                                    <a href="#deleteEmployeeModal<?= $value['id'] ?>" data-toggle="modal"><i class="far fa-trash-alt btn btn-outline-danger"></i></a>
                                                </td>
                                            <?php endforeach; ?>
                                            </tr>
                                    </tbody>
                                </table>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="addEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">ADD MOBIL</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <form action="./insertMobil.php" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>IMAGE</label>
                            <input type="file" accept="image/png,image/jpeg,image/jpg" name="avatar" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label>MERK</label>
                            <input type="text" name="merk" class="form-control" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>NO SERI</label>
                            <input class="form-control" name="noseri" autocomplete="off" required></input>
                        </div>
                        <div class="form-group">
                            <label>JUMLAH</label>
                            <input type="text" name="jumlah" class="form-control" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>KAPASITAS</label>
                            <input type="text" name="kapasitas" class="form-control" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>TARIF</label>
                            <input type="text" name="tarif" class="form-control" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" name="insertMobil" class="btn btn-success" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php foreach ($data->select_mobil() as $value) : ?>
        <div id="deleteEmployeeModal<?= $value['id'] ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="">
                        <div class="modal-header">
                            <h4 class="modal-title">Delete Mobil</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>Apakah anda yakin ingin menghapus ?</p>
                            <p class="text-warning"><small><?= strtoupper($value['merek']); ?></small></p>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <a href="deleteTabelMobil.php?id=<?= $value['id'] ?>" class="btn btn-danger">Hapus</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?php foreach ($data->select_mobil() as $value) : ?>
        <div id="editEmployeeModal<?= $value['id'] ?>" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Data Mobil</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form action="./updateTabelMobil.php" method="post">
                        <input type="hidden" name="id" value="<?= $value['id'] ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>IMAGE</label>
                                <input type="file" accept="image/png,image/jpeg,image/jpg" name="avatar" value="image/<?= $value['foto'] ?>" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label>MERK</label>
                                <input type="text" value="<?= $value['merek'] ?>" name="merk" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>NO SERI</label>
                                <input class="form-control" value="<?= $value['noSeri'] ?>" name="noseri" autocomplete="off" required></input>
                            </div>
                            <div class="form-group">
                                <label>JUMLAH</label>
                                <input type="text" value="<?= $value['jumlah'] ?>" name="jumlah" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>KAPASITAS</label>
                                <input type="text" value="<?= $value['kapasitas'] ?>" name="kapasitas" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label>TARIF</label>
                                <input type="text" value="<?= $value['tarif'] ?>" name="tarif" class="form-control" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" name="insertMobil" class="btn btn-success" value="update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

</div>
<?php
include 'footer.php';

?>