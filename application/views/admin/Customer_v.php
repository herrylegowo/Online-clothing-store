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
            <small>Customers</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Customers</li>
          </ol>
        </section>

        <section class="content">
          <div class="row">
          
            <div class="col-xs-12">
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Data Customers</h3>
                </div>
                <div class="box-body">
                  <table id="tableCustomers" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>#NO</th>
                        <th>Nama Customers</th>
                        <th>Alamat</th>
                        <th>Pesanan</th>
                        <th>Transaksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      $i = 1;
                      foreach ($dataCustomer as $row) :
                    ?>
                          <tr>
                              <td><?= $i++ ?></td>
                              <td><?= $row["nama"] ?></td>
                              <td><?= $row["alamat"] ?></td>
                              <td><?= $row["id_produk"] ?></td>
                              <td><?= $row["id_transaksi"] ?></td>
                          </tr>
                    <?php endforeach ; ?>
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
    <script type="text/javascript">
        $("#tableCustomers").DataTable();

        $(document).ready(function() {
            $("#messages").trigger('click');
        });
        $(".success").click(function(){
            $.bootstrapGrowl('<?= $this->session->flashdata("success") ?>',{
                type: 'success',
                delay: 2000,
            });
        });
        $(".error").click(function(){
            $.bootstrapGrowl('<?= $this->session->flashdata("error") ?>',{
                type: 'danger',
                delay: 2000,
            });
        });
    </script>
  </body>
</html>
