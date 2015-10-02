<?php $this->load->view('header');?>

<h1><img src="<?php echo base_url();?>img/icons/posts.png" alt="" />Data Pasien</h1>

<div class="bloc">
    <div class="title">
       Data Pasien
    </div>
	<?php echo form_open(''); ?>
    <div class="content">
	
	  
        <table>
		
            <thead>
                <tr>
		    <th width="5"></th>
                    <th width="200">Kode Pasien</th>
                    <th width="200">Nama</th>
                    <th width="200">TTL</th>
                    <th width="200">Umur</th>
					<th></th>
                </tr>
            </thead>
			
           <tbody>
                 <?php
                    foreach($pasien_lama->result() as $du){
                   
				  ?>
				 <input type="hidden" name="kodepasien" value="<?php echo $du->id_pasien;?>" />
                <tr>
					<td width="5"></td>
                    <td><?php echo $du->kode_pasien;?></td>
                    <td><?php echo $du->nama_pasien;?></td>
                    <td><?php echo $du->tempat_lahir.",".$du->tgl_lahir;?></td>
                    <td><?php echo usia($du->tgl_lahir);?></td>
					<td class="actions"><a href="<?php echo base_url("index.php/pasien/cek_registerlama/$du->id_pasien");?>" title="Edit this content"><img src="<?php echo base_url();?>img/icons/ok.png" alt="" /></a></td>
			   </tr>
                <?php } ?>
             </tbody>
        </table>
		<br></br>
		<?php echo form_close(); ?>
        <script>$("input:disabled")</script>

    </div>
</div>

<?php $this->load->view('footer');?>