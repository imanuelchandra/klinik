<?php $this->load->view('header');?>
<script languange ="javascript">
function hasil()
{
     if ((document.inputobat.isibox.value) =="" && (document.inputobat.hargabelibox.value) ==""){
	 var x = 0;
	 document.inputobat.hargabelisatuan.value = x;
	 }else{
		var ipb = parseFloat(document.inputobat.isibox.value);
		var hpb = parseFloat(document.inputobat.hargabelibox.value);
		var x = hpb / ipb;
		document.inputobat.hargabelisatuan.value = x;
	 } 
}
function hasil2()
{
	var x = parseFloat(document.inputobat.hargabelisatuan.value);   
	var j = ((130/100) * x)+x;
	document.inputobat.hargajual.value = j;
}
function pesan(){
	
	 if ((document.inputobat.namaobat.value) ==""
	 && (document.inputobat.stokmasuk.value) =="" && (document.inputobat.isibox.value) ==""
	 && (document.inputobat.hargabelibox.value) =="" 
	 && (document.inputobat.hargabelisatuan.value) ==""
	 && (document.inputobat.hargajual.value) ==""
	 && (document.inputobat.apotek.value) ==""
	 ){
	 }else {
	 alert ("Berhasil!!!!!!!!!!!");
	 }
	
}
</script> 


<?php $attributes = array('name' => 'inputobat'); 
echo form_open('apotek/inputresult',$attributes); ?>
<h1><img src="<?php echo base_url();?>img/icons/posts.png" alt="" />Input Data Obat Baru</h1>

<div class="bloc">
    <div class="title">Input Obat</div>
	<?php if (validation_errors()){?>
	<div class="notif error">
            <strong>Error :</strong> <?php echo validation_errors(); ?>
            <a href="#" class="close"></a>
        </div>
	<?php } ?>
	
    <div class="content">
	
        <div class="input">
            <label for="namaobat">Nama Obat</label>
            <input type="text" name="namaobat" id="namaobat"/>
        
            <label for="golongan">Golongan</label>
			<select name="golongan" id="golongan">
                <option value="0" selected>--Golongan--</option>
                 <?php
                    foreach($dt_golongan as $du){
                   
				  ?>
				  <option value="<?php echo $du->id_golongan_obat?>"><?php echo $du->golongan?></option>
                <?php }?>	  
            </select>
			<br></br>
            <label for="stokmasuk">Stok Masuk</label>
            <input type="text" name="stokmasuk" id="stokmasuk" />
        
            <label for="isibox">Isi per Box</label>
            <input type="text" name="isibox" id="isibox" />
      
            <label for="hargabelibox">Harga Beli per Box</label>
            <input type="text" name="hargabelibox" id="hargabelibox" />
		
            <label for="hargabelisatuan">Harga Beli per Satuan</label>
            <input type="text" name="hargabelisatuan" onclick="hasil()" id="hargabelisatuan" />
			
			<label for="hargajual">Harga Jual per Satuan</label>
            <input type="text" name="hargajual" onclick="hasil2()" id="hargajual" />
			
            <?php
            $bln=array(1=>"Januari","Februari","Maret","April","Mei",
                          "Juni","July","Agustus","September","Oktober",
                          "November","Desember"
                       );
            ?>
            <label for="Exp_date">Expired Date</label>
            <select name="tgl_exp" id="tgl_exp" value="<?php echo set_value('tgl_exp'); ?>">
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
            <select name="bln_exp" id="bln_exp" value="<?php echo set_value('bln_exp'); ?>">
                <option value="0" selected>--Bulan--</option>
                <?php for($bl=1; $bl<=12; $bl++){?>
                <option value="<?php echo $bl;?>"><?php echo $bln[$bl];?></option>
                <?php }?>
            </select>
            &nbsp;
            <select name="th_exp" id="th_exp" value="<?php echo set_value('th_exp'); ?>">
                <option value="0" selected>--Tahun--</option>
                 <?php
                      $now=date("Y")+20;
                      for($tl=2011; $tl<=$now; $tl++){
                 ?>
                <option value="<?php echo $tl;?>"><?php echo $tl;?></option>
                <?php }?>
            </select>
            <span class="error-message"><?php echo form_error('tgl_exp'); ?></span>
            <span class="error-message"><?php echo form_error('bln_exp'); ?></span>
            <span class="error-message"><?php echo form_error('th_exp'); ?></span>
            <label for="apotek">Apotik</label>
            <input type="text" name="apotek" id="apotek" />
        </div>
		
        <div class="submit">
		
            <input type="submit" value="Submit" onclick="pesan()"/>
			
        </div>
		
		<?php echo form_close(); ?>
    </div>
</div>

<?php $this->load->view('footer');?>