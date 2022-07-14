   <?php
    include 'header.php';
    include 'sidebar.php';
    $data = new Model();
    ?>


   <div class="main-content">
       <section class="section">
           <div class="section-header">
               <h1>
                   DRIVER</h1>
               <!-- <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Bootstrap Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div> -->
           </div>
           <div class="section-body">
               <div class="col-12 col-md-6 col-lg-12">
                   <div class="card">
                       <div class="card-header">
                           <div style="text-align: center;">
                               <h4 style="color:black;">Add</h4>
                           </div>
                           <div class="" style="display: flex-end;justify-content:end;">
                               <a href="#addEmployeeModal" data-toggle="modal"><i class="fas fa-plus btn btn-outline-primary fas-5px"></i></a>
                           </div>
                       </div>
                       <div class="card-body">
                           <?php if ($data->select_supir()->num_rows == null) : ?>
                               <h1>DATA DRIVER EMPTY</h1>
                           <?php else : ?>
                               <table class="table">
                                   <thead>
                                       <tr>
                                           <th>NO</th>
                                           <th>NAMA</th>
                                           <th>ALAMAT</th>
                                           <th>TELEPON</th>
                                           <th>JENIS KELAMIN</th>
                                           <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ACTION</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <?php $no = 1;
                                        foreach ($data->select_supir() as $value) : ?>
                                           <tr>
                                               <td><?= $no++ ?></td>
                                               <td><?= strtoupper($value['nama'])  ?></td>
                                               <td><?= strtoupper($value['alamat'])  ?></td>
                                               <td><?= $value['telepon'] ?></td>
                                               <td><?= strtoupper($value['jenisKelamain'])  ?></td>
                                               <td>
                                                   <a href="#editEmployeeModal<?= $value['id'] ?>" data-toggle="modal"><i class="fas fa-edit btn btn-outline-warning"></i></a>
                                                   <a href="#deleteEmployeeModal<?= $value['id'] ?>" data-toggle="modal"><i class=" far fa-trash-alt btn btn-outline-danger"></i></a>
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
                   <h4 class="modal-title">ADD
                       DRIVER</h4>
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               </div>
               <form action="./insertSupir.php" method="post">
                   <div class="modal-body">
                       <div class="form-group">
                           <label>NAMA</label>
                           <input type="text" name="nama" class="form-control" autocomplete="off" required>
                       </div>
                       <div class="form-group">
                           <label>ALAMAT</label>
                           <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="5"></textarea>
                       </div>
                       <div class="form-group">
                           <label>TELEPON</label>
                           <input type="text" name="telepon" class="form-control" autocomplete="off" required>
                       </div>
                       <div class="form-group">
                           <label>JENIS KELAMIN</label>
                           <select class="form-control" name="gender">
                               <option value="LAKI-LAKI">Laki-laki</option>
                               <option value="PEREMPUAN">Perempuan</option>
                           </select>
                       </div>
                   </div>
                   <div class="modal-footer">
                       <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                       <input type="submit" name="" class="btn btn-success" value="Add">
                   </div>
               </form>
           </div>
       </div>
   </div>
   <?php foreach ($data->select_supir() as $value) : ?>
       <div id="deleteEmployeeModal<?= $value['id'] ?>" class="modal fade">
           <div class="modal-dialog">
               <div class="modal-content">
                   <form action="">
                       <div class="modal-header">
                           <h4 class="modal-title">Delete Driver</h4>
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                       </div>
                       <div class="modal-body">
                           <p>Apakah anda yakin ingin menghapus ?</p>
                           <p class="text-warning"><?= strtoupper($value['nama']) ?> <?= strtoupper($value['alamat']) ?></p>
                       </div>
                       <div class="modal-footer">
                           <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                           <a href="deleteSupir.php?id=<?= $value['id'] ?>" class="btn btn-danger">Hapus</a>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   <?php endforeach; ?>

   <?php foreach ($data->select_supir() as $value) : ?>
       <div id="editEmployeeModal<?= $value['id'] ?>" class="modal fade">
           <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                       <h4 class="modal-title">Edit Data Draiver</h4>
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                   </div>
                   <form action="./updateTabelSupir.php" method="post">
                       <input type="hidden" name="id" value="<?= $value['id'] ?>">
                       <div class="modal-body">
                           <div class="form-group">
                               <label>NAMA</label>
                               <input type="text" value="<?= $value['nama'] ?>" name="nama" class="form-control" autocomplete="off" required>
                           </div>
                           <div class="form-group">
                               <label>ALAMAT</label>
                               <input class="form-control" value="<?= $value['alamat'] ?>" name="alamat" autocomplete="off" required></input>
                           </div>
                           <div class="form-group">
                               <label>TELEPON</label>
                               <input type="text" value="<?= $value['telepon'] ?>" name="telepon" class="form-control" autocomplete="off" required>
                           </div>
                           <div class="form-group">
                               <label>JENIS KELAMIN</label>
                               <select class="form-control" name="gender">
                                   <option value="LAKI-LAKI">Laki-laki</option>
                                   <option value="PEREMPUAN">Perempuan</option>
                               </select>
                           </div>
                       </div>
                       <div class="modal-footer">
                           <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                           <input type="submit" class="btn btn-success" value="update">
                       </div>
                   </form>
               </div>
           </div>
       </div>
   <?php endforeach; ?>
   </div>
   <?php include 'footer.php'; ?>