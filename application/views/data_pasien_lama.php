<?php $this->load->view('header');?>

<h1><img src="<?php echo base_url();?>img/icons/posts.png" alt="" />Data Pasien</h1>

<div class="bloc left">
    <div class="title">
       Data Pasien
    </div>
	<?php echo form_open('notifikasi/notif_reg_pasien'); ?>
    <div class="content">
	    <?php foreach($pasien_lama->result() as $du){ ?>
        <table>
	  <input type="hidden" name="kodepasien" value="<?php echo $du->id_pasien;?>" />
                <tr>
                    <td><strong>Kode Pasien</strong></td>
                    <td ><input type="text" name="key_cari" disabled="disabled" value="<?php echo $du->kode_pasien;?>" /></td>
                    
                </tr>
		<tr>
                    <td><strong>Nama Pasien</strong></td>
                    <td ><input type="text" name="key_cari" disabled="disabled" value="<?php echo $du->nama_pasien;?>" /></td>

                </tr>
               <tr>
                    <td><strong>TTL Pasien</strong></td>
                    <td><input type="text" name="key_cari" disabled="disabled" value="<?php echo $du->tempat_lahir.",".$du->tgl_lahir;?>" /></td>
                </tr>
                
                 <tr>
                    <td><strong>Umur</strong></td>
                    <td><input type="text" name="key_cari" disabled="disabled" value="<?php echo usia($du->tgl_lahir);?>" /></td>
                </tr>
				
		<tr>
                    <td><strong>Jenis Kelamin</strong></td>
                    <td><input type="text" name="key_cari" disabled="disabled" value="<?php echo $du->jenis_kelamin;?>"/></td>
                </tr>
		<tr>
                    <td><strong>Alamat Pasien</strong></td>
                    <td><textarea name="alamat" id="alamat" disabled="disabled" rows="3" cols="30"><?php echo $du->alamat_pasien;?></textarea>
					</td>
                </tr>
		<tr>
                    <td><strong>No.Telepon Pasien</strong></td>
                    <td><input type="text" name="key_cari" disabled="disabled" value="<?php echo $du->no_telepon;?>" /></td>
                </tr>
		<tr>
                    <td><strong>Status Pasien</strong></td>
                    <td><input type="text" name="key_cari" disabled="disabled" value="<?php echo $du->status;?>" /></td>
                </tr>
                <?php } ?>
          
        </table>
		<br>
			<div class="submit">
            <input type="submit" value="OK" name="ok"/>
			
        </div></br>
		<?php echo form_close(); ?>
        <script>$("input:disabled")</script>

    </div>
</div>

<?php $this->load->view('footer');?>