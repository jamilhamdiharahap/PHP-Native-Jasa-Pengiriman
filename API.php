<?php
include './controller/model.php';

$model = new Model();


$data_transaksi = $model->select_transaksi();

while ($data = $data_transaksi->fetch_object()) {
    $api[] = $data;
}
echo json_encode($api);
