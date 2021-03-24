 <div class="content-wrapper">
     <div class="row">
         <div class="col col-sm-12 col-xs-12">
             <section class="content-header">
                 <h1>
                     Email Mahasiswa

                 </h1>
                 <ol class="breadcrumb">
                     <li><a href="<?php echo base_url().'mahasiswa/'?>"><i class="fa fa-dashboard"></i>
                             Mahasiswa</a>
                     </li>
                     <li class="active">Email</li>
                 </ol>
             </section>
             <section class="content">
                 <div class="callout callout-info">
                     <h4>Reminder!</h4>
                     Email akan dikirimkan email mahasiswa masing - masing.
                 </div>
                 <?php foreach ($mahasiswa as $mhs) ?>
                 <form action="<?php echo base_url().'admin/mahasiswa/sent/'.$mhs->npm_mhs?>" method="post">
                     <div class="col col-sm-12">
                         <div class="box-header with-border">
                             <h3 class="box-title">Email</h3>
                         </div>
                         <div class="form-group">
                             <input class="form-control" name="pengirim" type="text"
                                 value="<?= $this->session->userdata('email')?>" placeholder="To:">
                         </div>
                         <div class="form-group">
                             <input class="form-control" name="penerima" value="<?= $mhs->email?>" placeholder="To:">
                         </div>
                         <div class="form-group">
                             <input class="form-control" name="subjek" placeholder="Subject:">
                         </div>
                         <div class="form-group">
                             <textarea id="compose-textarea" class="form-control" name="text" style="height: 300px"></textarea>
                         </div>
                     </div>
                     <!-- /.box-body -->
                     <div class="box-footer">
                         <div class="pull-right">
                             <input type="submit" value="Kirim" class="btn btn-primary ">
                         </div>
                         <input value="Hapus" type="reset" class="btn btn-default"><span class="fa fa-times"></span>

                     </div>
                     <!-- /.box-footer -->

                 </form>
             </section>
         </div>
     </div>
 </div>