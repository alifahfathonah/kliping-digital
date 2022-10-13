<!--Counter Inbox-->
<?php 
    $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
    $jum_pesan=$query->num_rows();
  
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Rekap Media</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

   <?php 
    $this->load->view('admin/v_header');
  ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php 
    $this->load->view('admin/siderbar');
  ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Rekap Media
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Rekap Media</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
           
          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Add Rekap Media</a>
              <!-- &nbsp;
              <a class="btn btn-warning btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-file-pdf-o"></span> Buat Laporan</a> -->
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
                    <th>Bulan</th>
                    <th>Duta</th>
                    <th>Harian Bangsa</th>
                    <th>Jatim Pos</th>
                    <th>Memorandum</th>
                    <th>Metro</th>
                    <th>Pojok Kiri</th>
                    <th>Radar</th>
                    <th>Suara Publik</th>
                    <th>Suksesi</th>
                    <th>Total</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
				<?php
					$no=0;
					foreach ($data->result_array() as $i) :
					   $no++;
                       $id_rekap=$i['id_rekap'];
                       $bulan_rekap=$i['bulan_rekap'];
                       $duta=$i['duta'];
                       $harian_bangsa=$i['harian_bangsa'];
                       $jatim_pos=$i['jatim_pos'];
                       $memorandum=$i['memorandum'];
                       $metro=$i['metro'];
                       $pojok_kiri=$i['pojok_kiri'];
                       $radar=$i['radar'];
                       $suara_publik=$i['suara_publik'];
                       $suksesi=$i['suksesi'];
                       $total_berita=$i['total_berita'];
                    ?>
                <tr style="text-align:center;">
                  <td><?php echo $bulan_rekap;?></td>
                  <td><?php echo $duta;?></td>
                  <td><?php echo $harian_bangsa;?></td>
                  <td><?php echo $jatim_pos;?></td>
                  <td><?php echo $memorandum;?></td>
                  <td><?php echo $metro;?></td>
                  <td><?php echo $pojok_kiri;?></td>
                  <td><?php echo $radar;?></td>
                  <td><?php echo $suara_publik;?></td>
                  <td><?php echo $suksesi;?></td>
                  <td><?php echo $total_berita;?></td>
                  
                  <td style="text-align:right;">
                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $id_rekap;?>"><span class="fa fa-pencil"></span></a>
                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $id_rekap;?>"><span class="fa fa-trash"></span></a>
                  </td>
                </tr>
				<?php endforeach;?>
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
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    &copy; Copyright <strong>KLIPING DIGITAL</strong>. All Rights Reserved.
  </footer>

  
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!--Modal Add Pengguna-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Rekap Media</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/rekap/simpan_rekap'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                
                                      <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Bulan</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xbulan" class="form-control" id="inputUserName" placeholder="Masukkan Bulan" required>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Duta</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xduta" class="form-control" id="inputUserName" placeholder="Jumlah berita yang dipublish" required>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Harian Bangsa</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xharianbangsa" class="form-control" id="inputUserName" placeholder="Jumlah berita yang dipublish" required>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Jatim Pos</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xjatimpos" class="form-control" id="inputUserName" placeholder="Jumlah berita yang dipublish" required>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Memorandum</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xmemorandum" class="form-control" id="inputUserName" placeholder="Jumlah berita yang dipublish" required>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Metro</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xmetro" class="form-control" id="inputUserName" placeholder="Jumlah berita yang dipublish" required>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Pojok Kiri</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xpojokkiri" class="form-control" id="inputUserName" placeholder="Jumlah berita yang dipublish" required>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Radar</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xradar" class="form-control" id="inputUserName" placeholder="Jumlah berita yang dipublish" required>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Suara Publik</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xsuarapublik" class="form-control" id="inputUserName" placeholder="Jumlah berita yang dipublish" required>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Suksesi</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xsuksesi" class="form-control" id="inputUserName" placeholder="Jumlah berita yang dipublish" required>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Total Berita</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xtotal" class="form-control" id="inputUserName" placeholder="Total jumlah berita yang dipublish" required>
                                        </div>
                                      </div>
                                    

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
		
		
		<?php foreach ($data->result_array() as $i) :
              $id_rekap=$i['id_rekap'];
              $bulan_rekap=$i['bulan_rekap'];
              $duta=$i['duta'];
              $harian_bangsa=$i['harian_bangsa'];
              $jatim_pos=$i['jatim_pos'];
              $memorandum=$i['memorandum'];
              $metro=$i['metro'];
              $pojok_kiri=$i['pojok_kiri'];
              $radar=$i['radar'];
              $suara_publik=$i['suara_publik'];
              $suksesi=$i['suksesi'];
              $total_berita=$i['total_berita'];
            ?>
	<!--Modal Edit Pengguna-->
        <div class="modal fade" id="ModalEdit<?php echo $id_rekap;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Rekap Media</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/rekap/update_rekap'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Bulan</label>
                                        <div class="col-sm-7">
											                     <input type="hidden" name="kode" value="<?php echo $id_rekap;?>"/> 
                                            <input type="text" name="xbulan" class="form-control" id="inputUserName" value="<?php echo $bulan_rekap;?>" placeholder="Masukkan Bulan" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Duta</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xduta" class="form-control" id="inputUserName" value="<?php echo $duta;?>" placeholder="Masukkan Bulan" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Harian Bangsa</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xharianbangsa" class="form-control" id="inputUserName" value="<?php echo $harian_bangsa;?>" placeholder="Masukkan Bulan" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Jatim Pos</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xjatimpos" class="form-control" id="inputUserName" value="<?php echo $jatim_pos;?>" placeholder="Masukkan Bulan" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Memorandum</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xmemorandum" class="form-control" id="inputUserName" value="<?php echo $memorandum;?>" placeholder="Masukkan Bulan" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Metro</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xmetro" class="form-control" id="inputUserName" value="<?php echo $metro;?>" placeholder="Masukkan Bulan" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Pojok Kiri</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xpojokkiri" class="form-control" id="inputUserName" value="<?php echo $pojok_kiri;?>" placeholder="Masukkan Bulan" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Radar</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xradar" class="form-control" id="inputUserName" value="<?php echo $radar;?>" placeholder="Masukkan Bulan" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Suara Publik</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xsuarapublik" class="form-control" id="inputUserName" value="<?php echo $suara_publik;?>" placeholder="Masukkan Bulan" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Suksesi</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xsuksesi" class="form-control" id="inputUserName" value="<?php echo $suksesi;?>" placeholder="Masukkan Bulan" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Total Berita</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xtotal" class="form-control" id="inputUserName" value="<?php echo $total_berita;?>" placeholder="Masukkan Bulan" required>
                                        </div>
                                    </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php endforeach;?>  
	
	<?php foreach ($data->result_array() as $i) :
              $id_rekap=$i['id_rekap'];
              $bulan_rekap=$i['bulan_rekap'];
              $duta=$i['duta'];
              $harian_bangsa=$i['harian_bangsa'];
              $jatim_pos=$i['jatim_pos'];
              $memorandum=$i['memorandum'];
              $metro=$i['metro'];
              $pojok_kiri=$i['pojok_kiri'];
              $radar=$i['radar'];
              $suara_publik=$i['suara_publik'];
              $suksesi=$i['suksesi'];
              $total_berita=$i['total_berita'];
            ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $id_rekap;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Rekap Media</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/rekap/hapus_rekap'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">       
							<input type="hidden" name="kode" value="<?php echo $id_rekap;?>"/> 
                            <p>Apakah Anda yakin mau menghapus Rekap Bulan <b><?php echo $bulan_rekap;?></b> ?</p>
                               
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php endforeach;?>
	
	


<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FF4859'
                });
        </script>
    
    <?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "rekap Berhasil disimpan ke database.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "rekap berhasil di update",
                    showHideTransition: 'slide',
                    icon: 'info',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#00C9E6'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "rekap Berhasil dihapus.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php else:?>

    <?php endif;?>
</body>
</html>
