<?php $this->load->view('header');?>

<h1><img src="<?php echo base_url();?>img/icons/posts.png" alt="" />Registrasi Pasien Baru</h1>

<div class="bloc">
    <div class="title">Registrasi</div>
	
	
    <div class="content">

	<?php echo form_open('pasien/registerbaru'); ?>
		<input type="hidden" name="register" value="register" />
        <div class="input">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" value="<?php echo set_value('nama'); ?>" />
            <span class="error-message"><?php echo form_error('nama'); ?></span>
        </div>
        <div class="input">
            <label for="tmpt_lahir">Tempat Lahir</label>
            <input type="text" name="tmpt_lahir" id="tmpt_lahir" value="<?php echo set_value('tmpt_lahir'); ?>"/>
             <span class="error-message"><?php echo form_error('tmpt_lahir'); ?></span>
        </div>
        <div class="input">
            <?php
            $bln=array(1=>"Januari","Februari","Maret","April","Mei",
                          "Juni","July","Agustus","September","Oktober",
                          "November","Desember"
                       );
            ?>
            <label for="tgl_lahir">Tanggal Lahir</label>
            <select name="tgl_lahir" id="tgl_lahir" value="<?php echo set_value('tgl_lahir'); ?>">
                <option value="0" selected>--Tanggal--</option>
                 <?php for($tl=1; $tl<=31; $tl++){
                   $tgl_leng=strlen($tl);
                    if ($tgl_leng==1)
                      $i="0".$tl;
                    else
                      $i=$tl; 
                 ?>
                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php }?>
            </select>
            &nbsp;
            <select name="bln_lahir" id="bln_lahir" value="<?php echo set_value('bln_lahir'); ?>">
                <option value="0" selected>--Bulan--</option>
                <?php for($bl=1; $bl<=12; $bl++){?>
                <option value="<?php echo $bl;?>"><?php echo $bln[$bl];?></option>
                <?php }?>
            </select>
            &nbsp;
            <select name="th_lahir" id="th_lahir" value="<?php echo set_value('th_lahir'); ?>">
                <option value="0" selected>--Tahun--</option>
                 <?php
                      $now=date("Y");
                      for($tl=1901; $tl<=$now; $tl++){
                 ?>
                <option value="<?php echo $tl;?>"><?php echo $tl;?></option>
                <?php }?>
            </select>
            <span class="error-message"><?php echo form_error('tgl_lahir'); ?></span>
            <span class="error-message"><?php echo form_error('bln_lahir'); ?></span>
            <span class="error-message"><?php echo form_error('th_lahir'); ?></span>
        </div>

        <div class="input">
            <label class="label">Jenis Kelamin</label>
            <input type="radio" id="laki" name="jns_kelamin" value="laki" checked="checked"/><label for="laki" class="inline">Laki-Laki</label><br/>
            <input type="radio" id="perempuan"  name="jns_kelamin" value="perempuan"/><label for="perempuan" class="inline">Perempuan</label>
        </div>

        <div class="input textarea">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" value="<?php echo set_value('alamat'); ?>" rows="5" cols="3"></textarea>
             <span class="error-message"><?php echo form_error('alamat'); ?></span>
        </div>
	<div class="input">
            <label for="telepon">No.Telepon/HP</label>
            <input type="text" name="telepon" id="telepon" />
        </div>

         <div class="input">
            <label class="label">Status</label>
            <input type="radio" id="umum" name="status" value="umum" checked="checked"/><label for="umum" class="inline">Umum</label><br/>
            <input type="radio" id="askes"  name="status" value="askes"/><label for="askes" class="inline">Askes</label><br/>
			<input type="radio" id="jamsostek"  name="status" value="jamsostek"/><label for="jamsostek" class="inline">Jamsostek</label>
         </div>
       
        <div class="submit">
            <input type="submit" value="Register" />
			
        </div>
		<?php echo form_close(); ?>
    </div>
</div>

<?php $this->load->view('footer');?>