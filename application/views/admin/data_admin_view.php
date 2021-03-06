<div id="content-wrapper">
    <section class="content-header">
      <h1 style="padding-bottom: 7px;">
        <span>Data Guru Admin</span>
      </h1>
      <button class="btn btn-danger btn-flat" onclick="history.back(-1)"><i class="fa fa-angle-double-left" style="padding-right: 5px;"></i>Kembali</button>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Admin Prakerin SMK Telkom Malang <?php echo date("Y"); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table style="width: 100%; table-layout: auto; " class="table table-bordered table-hover" id="dataTables-admin">
                <thead>
                <tr>
                    <th width="5%">No.</th>
                    <th>Nama Admin</th>
                    <th>No. Telp</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                        $no=1;
                        foreach($admin as $data) {
                            echo '
                                <tr>
                                    <td>'.$no.'</td>
                                    <td>'.$data->nama.'</td>
                                    <td>'.$data->no_telp_admin.'</td>
                                    <td style="width:9%;">
                                        <a href="'.base_url().'admin/lihatadmin/'.$data->id_user.'" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-eye-open"></i></a>
                                    </td>
                                </tr>
                            ';
                            $no++;
                        };
                    ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<style type="text/css">
    .button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>