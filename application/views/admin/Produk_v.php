<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php $this->load->view("templates/head") ?>
    <title>Dashboard</title>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php $this->load->view("templates/sidebar") ?>

      <div class="content-wrapper">
        <section class="content-header">
          <h1>
            Dashboard
            <small>Barang</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Barang</li>
          </ol>
        </section>

        <section class="content">
          <div class="row">

            <div class="col-xs-12">
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Data Barang</h3>
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">

                      <form role="form" action="<?= base_url("admin/produk/tambahProduk") ?>" method="POST">
                        <div class="box-body">
                          <div class="col-xs-6">
                          <div class="form-group">
                              <label>Id Produk</label>
                              <input type="hidden" class="form-control" name="id_produk" required>
                            </div>
                            <div class="form-group">
                              <label>Nama produk</label>
                              <input type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="form-group">
                              <label>Gambar</label>
                              <input type="text" class="form-control" name="gambar" required>
                            </div>
                            <div class="form-group">
                              <label>Harga Produk</label>
                              <input type="text" class="form-control" name="harga" required>
                            </div>
                            <div class="form-group">
                              <label>ID Kurir</label>
                              <input type="text" class="form-control" name="id_kurir" required>
                            </div>
                          </div>
                        </div> <!-- /box-body -->
                        <div class="box-footer">
                          <div class="col-xs-6">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                      </form>
                </div>
                <div class="box-body">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th>Harga</th>
                        <th>Kurir</th>
                        <th>AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($dataProduk as $key => $row): ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $row["nama"] ?></td>
                            <td><?= $row["gambar"] ?></td>
                            <td><?= $row["harga"] ?></td>
                            <td><?= $row["id_kurir"] ?></td>
                            <td>
                            <a href="<?= base_url("admin/produk/hapusProduk/").$row["id_produk"] ?>" class="btn btn-danger btn-xs">Delete</a>
                            </td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
        </section>

      </div>
      <?php $this->load->view("templates/footer") ?>
      <div class="control-sidebar-bg"></div>
    </div>
    <?php $this->load->view("templates/script") ?>
  </body>
</html>
