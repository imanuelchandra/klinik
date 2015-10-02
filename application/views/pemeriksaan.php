<?php $this->load->view('header');?>
<script languange ="javascript">
function hasil()
{
   var bbdn = parseFloat(document.pemeriksaan.beratbadan.value);
   var tbdn = parseFloat(document.pemeriksaan.tinggibadan.value);
   var tb = tbdn / 100;
   var tb2 = tb * tb;
   var x = bbdn / tb2;
    document.pemeriksaan.bmi.value = x;
}
</script> 

<h1><img src="<?php echo base_url();?>img/icons/posts.png" alt="" />Pemeriksaan</h1>
<form name="pemeriksaan" method="post" action="<?php echo base_url()?>index.php/pemeriksaan/ins_pemeriksaan">
<div class="bloc left">
    <div class="title">
       Data Pasien
    </div>
    

      <div class="content">  
        <table>
            <?php foreach($datapasien->result() as $dp) {?>
	  <input type="hidden" name="idpasien" value="<?php echo $dp->id_pasien;?>" />
                <tr>
                    <td><strong>Kode Pasien</strong></td>
                    <td ><input type="text" name="key_cari" disabled="disabled" value="<?php echo $dp->kode_pasien;?>" /></td>
                </tr>
		<tr>
                    <td><strong>Nama Pasien</strong></td>
                    <td ><input type="text" name="key_cari" disabled="disabled" value="<?php echo $dp->nama_pasien;?>" /></td>

                </tr>
               <tr>
                    <td><strong>TTL Pasien</strong></td>
                    <td><input type="text" name="key_cari" disabled="disabled" value="<?php echo $dp->tempat_lahir.",".$dp->tgl_lahir;?>" /></td>
                </tr>
                
                 <tr>
                    <td><strong>Umur</strong></td>
                    <td><input type="text" name="key_cari" disabled="disabled" value="<?php echo usia($dp->tgl_lahir);?>" /></td>
                </tr>
				
		<tr>
                    <td><strong>Jenis Kelamin</strong></td>
                    <td><input type="text" name="key_cari" disabled="disabled" value="<?php echo $dp->jenis_kelamin;?>" /></td>
                </tr>
		<tr>
                    <td><strong>Alamat Pasien</strong></td>
                    <td><textarea name="alamat" id="alamat" disabled="disabled" rows="3" cols="30"><?php echo $dp->alamat_pasien;?></textarea></td>
                </tr>
		<tr>
                    <td><strong>No.Telepon Pasien</strong></td>
                    <td><input type="text" name="key_cari" disabled="disabled" value="<?php echo $dp->no_telepon;?>" /></td>
                </tr>
		<tr>
                    <td><strong>Status Pasien</strong></td>
                    <td><input type="text" name="key_cari" disabled="disabled" value="<?php echo $dp->status;?>" /></td>
                </tr>
                <?php } ?>
          
        </table>
	</div>
</div>

<div class="bloc right">
    <div class="title">
       Riwayat Pemeriksaan Pasien
    </div>
      <div class="content"> 
        <table>
                <tr>
                    <td><strong>Riwayat Penyakit</strong></td>
                    <td ><input type="text" name="key_cari" disabled="disabled" value="" /></td>
                </tr>
		<tr>
                    <td><strong>Riwayat Pengobatan</strong></td>
                    <td ><input type="text" name="key_cari" disabled="disabled" value="" /></td>

                </tr>
        </table>
	</div>
</div>

<div class="cb"></div>

<div class="bloc">
    <div class="title">
       Pemeriksaan
    </div>
    <div class="content">
		<table>
		<thead>
		    <th width="100"></th>
                    <th width="30"></th>
                    <th></th>
                   
		</thead>
		
		<tbody>
			<tr>
            <td><strong>Tensi</strong></td>
			<td><input type="text" name="tensi" id="inputt" size="10" maxlength ="10"/></td>
			<td><strong>&nbsp;&nbsp;mmHg</strong></td>
			</tr>
			<tr>
			<td><strong>Nadi</strong></td>
			<td><input type="text" name="nadi" id="inputt"size="10" maxlength ="10"/></td>
			<td><strong>&nbsp;&nbsp;x/menit</strong></td>
			</tr>
			<tr>
            <td><strong>Respirasi</strong>			
			<td><input type="input" name="respirasi" id="inputt"size="10" maxlength ="10"/>
			<td><strong>&nbsp;&nbsp;x/mA</strong>
			</tr>
			<tr>
			<td><strong>Suhu</strong>
			<td><input type="input" name="suhu" id="inputt"size="10" maxlength ="10"/>
			<td><strong>&nbsp;&nbsp;C</strong>
			</tr>
			<tr>
          	<td><strong>Berat Badan</strong>
			<td><input type="text" value="" name="beratbadan" id="inputt"/>
			<td><strong>&nbsp;&nbsp;Kg</strong>
			</tr>
			<tr>
			<td><strong>Tinggi Badan</strong>
			<td><input type="text"  value="" name="tinggibadan" id="inputt"/>
			<td><strong>&nbsp;&nbsp;Cm</strong>
			</tr>
			<tr>
			<td><strong>BMI</strong>
			<td><input type="text" name="bmi" onclick="hasil()" id="inputt" maxlength ="10"/>
			<td><strong>&nbsp;&nbsp;Kg/m</strong>
			</tr>
			<tr>
			<td><strong>Lingkar Kepala</strong>
			<td><input type="text" name="lingkarkepala" id="inputt" size="10" maxlength ="10"/>
			<td><strong>&nbsp;&nbsp;Cm</strong>
			</tr>
			 </tbody>
			</table>
			  <table>
				<tr>
                    <td></br>
					<strong>Keluhan Utama</strong>
					<div class="input textarea">
					<textarea name="keluhan" id="keluhan" rows="2" cols="2"></textarea>
					</div>
					</td>
                </tr>
				<tr>
                    <td></br>
					<div class="input">
					<label for="alergi">Status Alergi</label>
					<input type="text" name="alergi" id="alergi"/>
					<label for="file">Upload Foto Pasien</label>
					<input type="file" id="file" />
					</div>
					</td>
                </tr>
				<tr>
                    <td></br>
					<strong>Diagnosa</strong>
					<div class="input">
					<?php //$gjp['#'] = '--Pilih--'; ?>
					<?php $penyakit['#'] = '-Pilih-'; ?>
					1&nbsp;:&nbsp<?php echo form_dropdown('jnspenyakit[]', $gjp, '', 'id="jnspenyakit"'); ?>               
					<?php echo form_dropdown('penyakit[]', $penyakit, '#', 'id="penyakit"'); ?>
                                        <br/><br/>
                                        <?php //$gjp['#'] = '--Pilih--'; ?>
					<?php $penyakit['#'] = '-Pilih-'; ?>
					2&nbsp;:&nbsp<?php echo form_dropdown('jnspenyakit[]', $gjp, '', 'id="jnspenyakit1"'); ?>               
					<?php echo form_dropdown('penyakit[]', $penyakit, '#', 'id="penyakit1"'); ?>
                                        <br/><br/>
                                        <?php //$gjp['#'] = '--Pilih--'; ?>
					<?php $penyakit['#'] = '-Pilih-'; ?>
					3&nbsp;:&nbsp<?php echo form_dropdown('jnspenyakit[]', $gjp, '', 'id="jnspenyakit2"'); ?>               
					<?php echo form_dropdown('penyakit[]', $penyakit, '#', 'id="penyakit2"'); ?>
                                         <br/><br/>
                                        <?php //$gjp['#'] = '--Pilih--'; ?>
					<?php $penyakit['#'] = '-Pilih-'; ?>
					4&nbsp;:&nbsp<?php echo form_dropdown('jnspenyakit[]', $gjp, '', 'id="jnspenyakit3"'); ?>               
					<?php echo form_dropdown('penyakit[]', $penyakit, '#', 'id="penyakit3"'); ?>
                                         <br/><br/>
                                        <?php //$gjp['#'] = '--Pilih--'; ?>
					<?php $penyakit['#'] = '-Pilih-'; ?>
					5&nbsp;:&nbsp<?php echo form_dropdown('jnspenyakit[]', $gjp, '', 'id="jnspenyakit4"'); ?>               
					<?php echo form_dropdown('penyakit[]', $penyakit, '#', 'id="penyakit4"'); ?>
                                         <br/><br/>
                                        <?php //$gjp['#'] = '--Pilih--'; ?>
					<?php $penyakit['#'] = '-Pilih-'; ?>
					6&nbsp;:&nbsp<?php echo form_dropdown('jnspenyakit[]', $gjp, '', 'id="jnspenyakit5"'); ?>               
					<?php echo form_dropdown('penyakit[]', $penyakit, '#', 'id="penyakit5"'); ?>
					</div>
					</td>
                </tr>
			</table>
            <table>
                <tr>
                    <td width="168"><strong>Therapi</strong></td>
					<td width="200"></td>
					<td width="120">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em>Dosis</em></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em>Jumlah</em></td>
                </tr>
                <tr>
					<td>
					<div class="input">
					<?php //$tg['#'] = '--Pilih--'; ?>
				        <?php echo form_dropdown('gol_obat[]', $tg, '', 'id="gol_obat"'); ?>               
                                        </div>
					</td>
                                        <td><div class="input">
					<?php $to['#'] = '-Pilih-'; ?>             
					<?php echo form_dropdown('nm_obat[]', $to, '#', 'id="nm_obat"');?>
					</div>
					</td>
                                        
                                        <td>
						<input type="text" name="dosis_obat[]" id="inputt"/>
					</td>
					<td>
						<input type="text" name="jumlah_obat[]" id="inputt"/>
					</td>
                                       
					</tr>
                                        
                                      <tr>
					<td>
					<div class="input">
					<?php //$tg['#'] = '--Pilih--'; ?>
					<?php echo form_dropdown('gol_obat[]', $tg, '', 'id="gol_obat1"'); ?>               
					</div>
					</td>
                    <td><div class="input">
					<?php $to['#'] = '-Pilih-'; ?>             
					<?php echo form_dropdown('nm_obat[]', $to, '#', 'id="nm_obat1"');?>
					</div>
					</td>
                    <td>
						<input type="text" name="dosis_obat[]" id="inputt"/>
					</td>
					<td>
						<input type="text" name="jumlah_obat[]" id="inputt"/>
					</td>
					</tr>
                                        
                                        <tr>
					<td>
					<div class="input">
					<?php //$tg['#'] = '--Pilih--'; ?>
					<?php echo form_dropdown('gol_obat[]', $tg, '', 'id="gol_obat2"'); ?>               
					</div>
					</td>
                    <td><div class="input">
					<?php $to['#'] = '-Pilih-'; ?>             
					<?php echo form_dropdown('nm_obat[]', $to, '#', 'id="nm_obat2"');?>
					</div>
					</td>
                    <td>
						<input type="text" name="dosis_obat[]" id="inputt"/>
					</td>
					<td>
						<input type="text" name="jumlah_obat[]" id="inputt"/>
					</td>
					</tr> 
                                        
                                        <tr>
					<td>
					<div class="input">
					<?php //$tg['#'] = '--Pilih--'; ?>
					<?php echo form_dropdown('gol_obat[]', $tg, '', 'id="gol_obat3"'); ?>               
					</div>
					</td>
                    <td><div class="input">
					<?php $to['#'] = '-Pilih-'; ?>             
					<?php echo form_dropdown('nm_obat[]', $to, '#', 'id="nm_obat3"');?>
					</div>
					</td>
                    <td>
						<input type="text" name="dosis_obat[]" id="inputt"/>
					</td>
					<td>
						<input type="text" name="jumlah_obat[]" id="inputt"/>
					</td>
					</tr>
                                        
                                         <tr>
					<td>
					<div class="input">
					<?php //$tg['#'] = '--Pilih--'; ?>
					<?php echo form_dropdown('gol_obat[]', $tg, '', 'id="gol_obat4"'); ?>               
					</div>
					</td>
                    <td><div class="input">
					<?php $to['#'] = '-Pilih-'; ?>             
					<?php echo form_dropdown('nm_obat[]', $to, '#', 'id="nm_obat4"');?>
					</div>
					</td>
                    <td>
						<input type="text" name="dosis_obat[]" id="inputt"/>
					</td>
					<td>
						<input type="text" name="jumlah_obat[]" id="inputt"/>
					</td>
					</tr>
                                        
                                        <tr>
					<td>
					<div class="input">
					<?php //$tg['#'] = '--Pilih--'; ?>
					<?php echo form_dropdown('gol_obat[]', $tg, '', 'id="gol_obat5"'); ?>               
					</div>
					</td>
                    <td><div class="input">
					<?php $to['#'] = '-Pilih-'; ?>             
					<?php echo form_dropdown('nm_obat[]', $to, '#', 'id="nm_obat5"');?>
					</div>
					</td>
                    <td>
						<input type="text" name="dosis_obat[]" id="inputt"/>
					</td>
					<td>
						<input type="text" name="jumlah_obat[]" id="inputt"/>
					</td>
					</tr>
                                        
        </table>
			<strong>Tindakan</strong>
			<div class="input">
                             <div id="input1" style="margin-bottom:4px;" class="clonedInput">
                           
                           <?php //$i=1; ?>
                           <?php $jpm['#']='-Pilih-'; ?>
                           1&nbsp;:&nbsp<?php echo form_dropdown('tmedis[]', $tm, '', 'id="tmedis"'); ?>
	                   <?php echo form_dropdown('jns_pmedis[]', $jpm, '#', 'id="jns_pmedis"');?>
                            <br/><br/>     
                           <?php $jpm['#']='-Pilih-'; ?>
                           2&nbsp;:&nbsp<?php echo form_dropdown('tmedis[]', $tm, '', 'id="tmedis1"'); ?>  
	                   <?php echo form_dropdown('jns_pmedis[]', $jpm, '#', 'id="jns_pmedis1"');?>
                           <br/><br/>      
                           <?php $jpm['#']='-Pilih-'; ?>
                           3&nbsp;:&nbsp<?php echo form_dropdown('tmedis[]', $tm, '', 'id="tmedis2"'); ?>  
	                   <?php echo form_dropdown('jns_pmedis[]', $jpm, '#', 'id="jns_pmedis2"');?>
                           <?php //$i++;?>     
                           <br/><br/>  
                            <?php //$i=1; ?>
                           <?php $jpm['#']='-Pilih-'; ?>
                           4&nbsp;:&nbsp<?php echo form_dropdown('tmedis[]', $tm, '', 'id="tmedis3"'); ?>
	                   <?php echo form_dropdown('jns_pmedis[]', $jpm, '#', 'id="jns_pmedis3"');?>
                            <br/><br/>     
                           <?php $jpm['#']='-Pilih-'; ?>
                           5&nbsp;:&nbsp<?php echo form_dropdown('tmedis[]', $tm, '', 'id="tmedis4"'); ?>  
	                   <?php echo form_dropdown('jns_pmedis[]', $jpm, '#', 'id="jns_pmedis4"');?>
                           <br/><br/>      
                           <?php $jpm['#']='-Pilih-'; ?>
                           6&nbsp;:&nbsp<?php echo form_dropdown('tmedis[]', $tm, '', 'id="tmedis5"'); ?>  
	                   <?php echo form_dropdown('jns_pmedis[]', $jpm, '#', 'id="jns_pmedis5"');?>
                           <?php //$i++;?>  
			   </div>
                         
                        </div>
			
        <div class="submit">
            <input type="submit" name="pemeriksaan" value="Confirm" />
			
        </div></br>
		
    </div>
</div>
</form>
<script type="text/javascript">//<![CDATA[
    $(document).ready(function(){
       
       //diagnosa
        $('#jnspenyakit').change(function(){ //any select change on the dropdown with id country trigger this code
            $("#penyakit > option").remove(); //first of all clear select items
            var idjp = $('#jnspenyakit').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
                url: "http://localhost/klinik/index.php/pemeriksaan/get_penyakit/"+idjp, //here we are calling our user controller and get_cities method with the country_id
 
                success: function(penyakit) //we're calling the response json array 'cities'
                {
                    $.each(penyakit, function(id_penyakit, nama_penyakit) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(id_penyakit);
                        opt.text(nama_penyakit);
                        $('#penyakit').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                    });
                }
            });
        });
        
        $('#jnspenyakit1').change(function(){ //any select change on the dropdown with id country trigger this code
            $("#penyakit1 > option").remove(); //first of all clear select items
            var idjp = $('#jnspenyakit1').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
                url: "http://localhost/klinik/index.php/pemeriksaan/get_penyakit/"+idjp, //here we are calling our user controller and get_cities method with the country_id
 
                success: function(penyakit1) //we're calling the response json array 'cities'
                {
                    $.each(penyakit1, function(id_penyakit, nama_penyakit) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(id_penyakit);
                        opt.text(nama_penyakit);
                        $('#penyakit1').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                    });
                }
            });
        });
        
          $('#jnspenyakit2').change(function(){ //any select change on the dropdown with id country trigger this code
            $("#penyakit2 > option").remove(); //first of all clear select items
            var idjp = $('#jnspenyakit2').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
                url: "http://localhost/klinik/index.php/pemeriksaan/get_penyakit/"+idjp, //here we are calling our user controller and get_cities method with the country_id
 
                success: function(penyakit2) //we're calling the response json array 'cities'
                {
                    $.each(penyakit2, function(id_penyakit, nama_penyakit) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(id_penyakit);
                        opt.text(nama_penyakit);
                        $('#penyakit2').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                    });
                }
            });
        });
        
          $('#jnspenyakit3').change(function(){ //any select change on the dropdown with id country trigger this code
            $("#penyakit3 > option").remove(); //first of all clear select items
            var idjp = $('#jnspenyakit3').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
                url: "http://localhost/klinik/index.php/pemeriksaan/get_penyakit/"+idjp, //here we are calling our user controller and get_cities method with the country_id
 
                success: function(penyakit3) //we're calling the response json array 'cities'
                {
                    $.each(penyakit3, function(id_penyakit, nama_penyakit) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(id_penyakit);
                        opt.text(nama_penyakit);
                        $('#penyakit3').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                    });
                }
            });
        });
        
          $('#jnspenyakit4').change(function(){ //any select change on the dropdown with id country trigger this code
            $("#penyakit4 > option").remove(); //first of all clear select items
            var idjp = $('#jnspenyakit4').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
                url: "http://localhost/klinik/index.php/pemeriksaan/get_penyakit/"+idjp, //here we are calling our user controller and get_cities method with the country_id
 
                success: function(penyakit4) //we're calling the response json array 'cities'
                {
                    $.each(penyakit4, function(id_penyakit, nama_penyakit) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(id_penyakit);
                        opt.text(nama_penyakit);
                        $('#penyakit4').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                    });
                }
            });
        });
        
          $('#jnspenyakit5').change(function(){ //any select change on the dropdown with id country trigger this code
            $("#penyakit5 > option").remove(); //first of all clear select items
            var idjp = $('#jnspenyakit5').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
                url: "http://localhost/klinik/index.php/pemeriksaan/get_penyakit/"+idjp, //here we are calling our user controller and get_cities method with the country_id
 
                success: function(penyakit5) //we're calling the response json array 'cities'
                {
                    $.each(penyakit5, function(id_penyakit, nama_penyakit) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(id_penyakit);
                        opt.text(nama_penyakit);
                        $('#penyakit5').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                    });
                }
            });
        });
        //end diagnosa
        
        //terapi
          $('#gol_obat').change(function(){ //any select change on the dropdown with id country trigger this code
            $("#nm_obat > option").remove(); //first of all clear select items
            var idgo = $('#gol_obat').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
                url: "http://localhost/klinik/index.php/pemeriksaan/get_nm_obat/"+idgo, //here we are calling our user controller and get_cities method with the country_id
 
                success: function(nm_obat) //we're calling the response json array 'cities'
                {
                    $.each(nm_obat, function(id_obat, nama_obat) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(id_obat);
                        opt.text(nama_obat);
                        $('#nm_obat').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                    });
                }
 
            });
 
        });
        
         $('#gol_obat1').change(function(){ //any select change on the dropdown with id country trigger this code
            $("#nm_obat1 > option").remove(); //first of all clear select items
            var idgo = $('#gol_obat1').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
                url: "http://localhost/klinik/index.php/pemeriksaan/get_nm_obat/"+idgo, //here we are calling our user controller and get_cities method with the country_id
 
                success: function(nm_obat1) //we're calling the response json array 'cities'
                {
                    $.each(nm_obat1, function(id_obat, nama_obat) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(id_obat);
                        opt.text(nama_obat);
                        $('#nm_obat1').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                    });
                }
 
            });
 
        });
        
         $('#gol_obat2').change(function(){ //any select change on the dropdown with id country trigger this code
            $("#nm_obat2 > option").remove(); //first of all clear select items
            var idgo = $('#gol_obat2').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
                url: "http://localhost/klinik/index.php/pemeriksaan/get_nm_obat/"+idgo, //here we are calling our user controller and get_cities method with the country_id
 
                success: function(nm_obat2) //we're calling the response json array 'cities'
                {
                    $.each(nm_obat2, function(id_obat, nama_obat) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(id_obat);
                        opt.text(nama_obat);
                        $('#nm_obat2').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                    });
                }
 
            });
 
        });
        
         $('#gol_obat3').change(function(){ //any select change on the dropdown with id country trigger this code
            $("#nm_obat3 > option").remove(); //first of all clear select items
            var idgo = $('#gol_obat3').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
                url: "http://localhost/klinik/index.php/pemeriksaan/get_nm_obat/"+idgo, //here we are calling our user controller and get_cities method with the country_id
 
                success: function(nm_obat3) //we're calling the response json array 'cities'
                {
                    $.each(nm_obat3, function(id_obat, nama_obat) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(id_obat);
                        opt.text(nama_obat);
                        $('#nm_obat3').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                    });
                }
 
            });
 
        });
        
         $('#gol_obat4').change(function(){ //any select change on the dropdown with id country trigger this code
            $("#nm_obat4 > option").remove(); //first of all clear select items
            var idgo = $('#gol_obat4').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
                url: "http://localhost/klinik/index.php/pemeriksaan/get_nm_obat/"+idgo, //here we are calling our user controller and get_cities method with the country_id
 
                success: function(nm_obat4) //we're calling the response json array 'cities'
                {
                    $.each(nm_obat4, function(id_obat, nama_obat) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(id_obat);
                        opt.text(nama_obat);
                        $('#nm_obat4').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                    });
                }
 
            });
 
        });
        
         $('#gol_obat5').change(function(){ //any select change on the dropdown with id country trigger this code
            $("#nm_obat5 > option").remove(); //first of all clear select items
            var idgo = $('#gol_obat5').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
                url: "http://localhost/klinik/index.php/pemeriksaan/get_nm_obat/"+idgo, //here we are calling our user controller and get_cities method with the country_id
 
                success: function(nm_obat5) //we're calling the response json array 'cities'
                {
                    $.each(nm_obat5, function(id_obat, nama_obat) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(id_obat);
                        opt.text(nama_obat);
                        $('#nm_obat5').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                    });
                }
 
            });
 
        });
        //end terapi
        
        //Tindakan medis
          $('#tmedis').change(function(){ //any select change on the dropdown with id country trigger this code
           $("#jns_pmedis > option").remove(); //first of all clear select items
            var idtm = $('#tmedis').val() || [];  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
                url: "http://localhost/klinik/index.php/pemeriksaan/get_jns_pelayanan/"+idtm, //here we are calling our user controller and get_cities method with the country_id
 
                success: function(jns_pmedis) //we're calling the response json array 'cities'
                {
                    $.each(jns_pmedis, function(id_jasa, jenis_pelayanan) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(id_jasa);
                        opt.text(jenis_pelayanan);
                        $('#jns_pmedis').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                    });
                }
 
            });
 
        });
        
         $('#tmedis1').change(function(){ //any select change on the dropdown with id country trigger this code
           $("#jns_pmedis1 > option").remove(); //first of all clear select items
            var idtm = $('#tmedis1').val() || [];  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
                url: "http://localhost/klinik/index.php/pemeriksaan/get_jns_pelayanan/"+idtm, //here we are calling our user controller and get_cities method with the country_id
 
                success: function(jns_pmedis1) //we're calling the response json array 'cities'
                {
                    $.each(jns_pmedis1, function(id_jasa, jenis_pelayanan) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(id_jasa);
                        opt.text(jenis_pelayanan);
                        $('#jns_pmedis1').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                    });
                }
 
            });
 
        });
        
         $('#tmedis2').change(function(){ //any select change on the dropdown with id country trigger this code
           $("#jns_pmedis2 > option").remove(); //first of all clear select items
            var idtm = $('#tmedis2').val() || [];  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
                url: "http://localhost/klinik/index.php/pemeriksaan/get_jns_pelayanan/"+idtm, //here we are calling our user controller and get_cities method with the country_id
 
                success: function(jns_pmedis2) //we're calling the response json array 'cities'
                {
                    $.each(jns_pmedis2, function(id_jasa, jenis_pelayanan) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(id_jasa);
                        opt.text(jenis_pelayanan);
                        $('#jns_pmedis2').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                    });
                }
 
            });
 
        });
        
        $('#tmedis3').change(function(){ //any select change on the dropdown with id country trigger this code
           $("#jns_pmedis3 > option").remove(); //first of all clear select items
            var idtm = $('#tmedis3').val() || [];  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
                url: "http://localhost/klinik/index.php/pemeriksaan/get_jns_pelayanan/"+idtm, //here we are calling our user controller and get_cities method with the country_id
 
                success: function(jns_pmedis3) //we're calling the response json array 'cities'
                {
                    $.each(jns_pmedis3, function(id_jasa, jenis_pelayanan) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(id_jasa);
                        opt.text(jenis_pelayanan);
                        $('#jns_pmedis3').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                    });
                }
 
            });
 
        });
        
         $('#tmedis4').change(function(){ //any select change on the dropdown with id country trigger this code
           $("#jns_pmedis4 > option").remove(); //first of all clear select items
            var idtm = $('#tmedis4').val() || [];  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
                url: "http://localhost/klinik/index.php/pemeriksaan/get_jns_pelayanan/"+idtm, //here we are calling our user controller and get_cities method with the country_id
 
                success: function(jns_pmedis4) //we're calling the response json array 'cities'
                {
                    $.each(jns_pmedis4, function(id_jasa, jenis_pelayanan) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(id_jasa);
                        opt.text(jenis_pelayanan);
                        $('#jns_pmedis4').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                    });
                }
 
            });
 
        });
        
         $('#tmedis5').change(function(){ //any select change on the dropdown with id country trigger this code
           $("#jns_pmedis5 > option").remove(); //first of all clear select items
            var idtm = $('#tmedis5').val() || [];  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
                url: "http://localhost/klinik/index.php/pemeriksaan/get_jns_pelayanan/"+idtm, //here we are calling our user controller and get_cities method with the country_id
 
                success: function(jns_pmedis5) //we're calling the response json array 'cities'
                {
                    $.each(jns_pmedis5, function(id_jasa, jenis_pelayanan) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(id_jasa);
                        opt.text(jenis_pelayanan);
                        $('#jns_pmedis5').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                    });
                }
 
            });
 
        });
       //end tindakan medis 

    });
    
    // ]]>
</script>
<?php $this->load->view('footer');?>