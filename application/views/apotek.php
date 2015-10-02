<?php $this->load->view('header');?>

<h1><img src="<?php echo base_url();?>img/icons/posts.png" alt="" />Apotek</h1>

<div class="bloc left">
    <div class="title">Data Obat</div>
	
    <div class="content">
		<br> 
		
		<div class="submit">
		<?php echo form_open('apotek/view_data_obat'); ?>
            <input type="submit" value="Tampilkan Semua Obat" name="ok" class="white" />
		<?php echo form_close(); ?>
        </div>

		<br>
		<div class="submit">
			<?php echo form_open('apotek/view_obat_expired'); ?>
            <input type="submit" value="Tampilkan Obat Expired" name="ok" class="white"/>	
		    <?php echo form_close(); ?>
        </div>
		<br>
        <div class="submit">
		<?php echo form_open('apotek/inputobat'); ?>
            <input type="submit" value="Input Obat" name="ok" class="white"/>	
		<?php echo form_close(); ?>
        <br>
		</div>
    </div>
</div>


<?php $this->load->view('footer');?>