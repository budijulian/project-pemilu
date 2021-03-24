
    <!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
<div class="content-wrapper">
    <div class="box-body">
        <h3>Data Mahasiswa </h3>
            <table id="datamahasiswa" class="table table-bordered">
                            <thead>
                                <tr class="border-left-0">
                                    <th>No</th>
                                    <th>NPM</th>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th>Fakultas</th>
                                    <th>Jalur</th>
                                    <th>Ket</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                // variabel array mahasiswa menyimpan data dari database
                                foreach($mahasiswa as $u){?>
                                <tr>
                                    <!-- $u-> nama : nama dari column didalam database -->
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $u->npm_mhs ?></td>
                                    <td><?php echo $u->nama ?></td>
                                    <td><?php echo $u->jurusan ?></td>
                                    <td><?php echo $u->fakultas ?></td>
                                    <td><?php echo $u->jalur ?></td>
                                    <td><?php echo $u->ket ?></td>
                                    
                                </tr>
                                <?php }?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>NPM</th>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th>Fakultas</th>
                                    <th>Jalur</th>
                                    <th>Ket</th>
                                </tr>
                            </tfoot>
                        </table>
            </div>
</div>
<script type="text/javascript">
    window.print();
</script>
<!-- DataTables -->
  <script src="<?php echo base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js">
  
  
  </script>
  