<?php $this->load->view('header');?>
<h1><img src="<?php echo base_url();?>img/icons/dashboard.png" alt="" />Dashboard</h1>

<div class="bloc left">
    <div class="title">
        Menu
    </div>
    <div class="content dashboard">
        <div class="center">
            <a href="<?php echo base_url();?>index.php/dokter/trans_pengguna" class="shortcut">
                <img src="<?php echo base_url();?>img/user.png" alt="" width="48" height="48"/>
                Pengguna
            </a>
            <a href="index.php/daftar_pemeriksaan" class="shortcut">
                <img src="<?php echo base_url();?>img/dokter.png" alt="" width="48" height="48" />
                Pemeriksaan
            </a>
            <a href="<?php echo base_url();?>index.php/apotek" class="shortcut last">
                <img src="<?php echo base_url();?>img/obat.png" alt="" width="48" height="48" />
                Data Obat
            </a>
            <div class="cb"></div>
        </div>
    </div>
</div>





<div class="cb"></div>



<?php $this->load->view('footer');?>