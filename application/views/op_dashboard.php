<?php $this->load->view('header');?>
<h1><img src="<?php echo base_url();?>img/icons/dashboard.png" alt="" />Dashboard</h1>
                
<div class="bloc left">
    <div class="title">
        Dashboard
    </div>
    <div class="content dashboard">
        <div class="center">
            <a href="<?php echo base_url();?>index.php/pasien/register" class="shortcut">
                <img src="<?php echo base_url();?>img/register.png" alt="" width="48" height="48"/>
                Registrasi
            </a>

            <a href="<?php echo base_url();?>index.php/apotek" class="shortcut">
                <img src="<?php echo base_url();?>img/obat.png" alt="" width="48" height="48" />
                Data Obat
            </a>
            <a href="#" class="shortcut">
                <img src="<?php echo base_url();?>img/page.png" alt="" width="48" height="48" />
                Pembayaran
            </a>
            <div class="cb"></div>
        </div>
       
    </div>
</div>


                


  


<?php $this->load->view('footer');?>