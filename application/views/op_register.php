<?php $this->load->view('header');?>

<h1><img src="<?php echo base_url();?>img/icons/posts.png" alt="" />Registrasi Pasien</h1>

<div class="bloc left">
    <div class="title">Registrasi Pasien</div>
	
    <div class="content">
         <?php echo form_open('pasien/register'); ?>
		<div class="input">
            <label for="pilihpasien">Pilih Pasien</label>
            <select name="pilihpasien" id="pilihpasien">
                <option selected>--Pilih--</option>
                <option value="pasienlama">Pasien Lama</option>
                <option value="pasienbaru">Pasien Baru</option>
            </select>
        </div>
        <div class="submit">
            <input type="submit" value="OK" name="ok"/>
			
        </div>
         <?php echo form_close(); ?>
    </div>
</div>


<?php $this->load->view('footer');?>