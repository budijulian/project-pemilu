<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar ">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url()?>assets/img/himasi.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info ">
            <p>PEMILU HIMASI</p>
                <a href="#"><i class="fa fa-circle text-success">
                </i>  <?= base64_decode($this->session->userdata('ket'))?>
               </a>
            </div>
        </div>
        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class=" active">
                <a href="<?php echo base_url().'admin/index'?>">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    
                </a>
                
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Mahasiswa</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none">
                    <!-- <li class="active"><a href="<?php echo base_url().'admin/mahasiswa/'?>"><i
                                class="fa fa-circle-o"></i>Data Mahasiswa SI</a></li> -->
                     <li class="active"><a href="<?php echo base_url().'admin/mahasiswa/pendaftar/'?>"><i
                                class="fa fa-circle-o"></i>Data Pendaftar</a></li>
                </ul>
            </li>
            <li class=" treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Kandidat</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none">
                    <!-- <li class="active"><a href="<?php echo base_url().'admin/pesan/'?>"><i
                                class="fa fa-circle-o"></i>Data Pesan</a></li> -->
                    <li class="active"><a href="<?php echo base_url().'admin/kandidat/'?>"><i
                                class="fa fa-circle-o"></i>Data Kandidat</a></li>
                      <!-- <li class="active"><a href="<?php echo base_url().'admin/kandidat/tambah'?>"><i
                                class="fa fa-plus"></i>Tambah Data</a></li> -->
                </ul>
            </li>
            <li class=" treeview">
                <a href="#">
                    <i class="fa fa-tasks"></i> <span>Voting</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none">
                    <li class="active"><a href="<?php echo base_url().'admin/voting/data/'?>"><i class="fa fa-circle-o"></i>
                            Data Voting</a></li>
                    <!-- <li class="active"><a href="<?php 
                    // echo base_url().'admin/reminder'?>"><i class="fa fa-circle-o"></i>
                            Waktu Pengingat</a></li> -->
                    <li class="active"><a href="<?php echo base_url().'admin/voting/'?>"><i class="fa fa-circle-o"></i>
                             Quick Count</a></li>
               
                </ul>
            </li>
            <li class=" treeview">
                <a href="#">
                    <i class="fa fa-calendar"></i> <span>Periode</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none">
                <li class="active"><a href="<?php echo base_url().'admin/periode'?>"><i class="fa fa-circle-o"></i>
                           Data Periode</a></li>
                    <li class="active"><a href="<?php echo base_url().'admin/history'?>"><i class="fa fa-circle-o"></i>
                            History</a></li>
                </ul>
            </li>
             <li class=" treeview">
                <a href="#">
                    <i class="fa fa-cog"></i> <span>Setting</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none">
                <li class="active"><a href="<?php echo base_url().'admin/server'?>"><i class="fa fa-circle-o"></i>
                           SMTP Server</a></li>
                <li class="active"><a href="<?php echo base_url().'admin/profile'?>"><i class="fa fa-circle-o"></i>
                           Profile</a></li>
                <li class="active"><a href="<?php echo base_url().'admin/developer'?>"><i class="fa fa-circle-o"></i>
                           Developer</a></li>
                    <li class="active"><a href="<?php echo base_url().'admin/tentang'?>"><i class="fa fa-circle-o"></i>
                            Tentang</a></li>
                </ul>
            </li>
            <!-- <li class="active treeview">
                <a href="#">
                    <i class="fa fa-info"></i> <span>Konten</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="
                    // echo base_url().'admin/konten'
                    <i class="fa fa-circle-o"></i>
                            Konten</a></li>
                </ul>
            </li> -->

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>