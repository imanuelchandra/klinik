<?php $this->load->view('header');?>

<h1><img src="<?php echo base_url();?>img/icons/posts.png" alt="" />Registrasi Pasien</h1>

<div class="bloc left">
    <div class="title">Registrasi Pasien Lama</div>
	
    <div class="content">
        <?php echo form_open('pasien/registerlama'); ?>
	<div class="input">
            <label for="id">Cari</label>
            <input type="text" name="key_cari" id="key_cari" />
        </div>

         <div class="input">
            <label class="label">Kriteria Pencarian</label>
            <input type="radio" id="laki" name="cari_pasien_lama" value="id" checked="checked"/><label for="id" class="inline">ID Pasien</label><br/>
            <input type="radio" id="perempuan"  name="cari_pasien_lama" value="nama"/><label for="nama" class="inline">Nama Pasien</label>
        </div>
          <em>Pilih Kriteria Pencarian</em>
        <div class="submit">
            <label class="label"></label>
            <input type="submit" value="OK" name="ok"/>	
        </div>
	  <?php echo form_close(); ?>
    </div>
</div>


<?php $this->load->view('footer');?>