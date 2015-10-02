<?php $this->load->view('header');?>

<h1><img src="<?php echo base_url();?>img/icons/posts.png" alt="" />Pengguna</h1>

<div class="bloc left">
    <div class="title">Pengguna</div>
	
    <div class="content">
		<br> 
		<div class="submit">
		<?php echo form_open('dokter/datauser'); ?>
                 <input type="submit" value="Daftar Pengguna" name="ok" class="white" />
		<?php echo form_close(); ?>
                </div>
		   <br>
                <div class="submit">
		<?php echo form_open('dokter/tambahuser'); ?>
                 <input type="submit" value="Tambah Pengguna" name="ok" class="white"/>	
		<?php echo form_close(); ?>
		</div>
                  <br>
    </div>
</div>

<?php $this->load->view('footer');?>