<?php $this->load->view('header');?>
<h1><img src="<?php echo base_url();?>img/icons/posts.png" alt="" />Billing</h1>

<div class="bloc">
    <div class="title">Billing</div>

	<?php if ($this->session->flashdata('berhasil')){?>
	<div class="notif success">
            <strong>Success :</strong> <?php echo $this->session->flashdata('berhasil');?>
            <a href="#" class="close"></a>

        </div>
	<?php } ?>
	
	
    <div class="content">
	<?php echo form_open(''); ?>
        <fieldset>
        <legend>Informasi Pasien</legend>
        <div class="input">
            <label for="kodepasien">Kode Pasien</label>
            <input type="text" disabled="disabled" name="kodepasien" id="kodepasien" value="<?php echo $kode_pasien;?>"/>
        </div>
        
        <div class="input">
            <label for="nama">Nama Pasien</label>
            <input type="text" disabled="disabled" name="nama" id="nama" value="<?php echo $nama_pasien;?>"/>
        </div>
        <div class="input">
            <label for="tglpemeriksaan">Tanggal Pemeriksaan</label>
            <input type="text" disabled="disabled" name="tglpemeriksaan" id="tglpemeriksaan" value="<?php echo $tgl_pemeriksaan;?>"/>
        </div>
        </fieldset>
        
        <fieldset>
        <legend>Pembayaran</legend>
		</br>
        <label for="nm_lengkap">Daftar Obat</label>
		<table>
            <thead>
                <tr>
	            <th width="5"></th>
                    <th width="300">Nama Obat</th>
                    <th width="160">Dosis</th>
                    <th width="160">Jumlah</th>
                  
                </tr>
            </thead>
			<tbody>
                <tr>
                 <td></td>
                    <td>
                    <table>  
                    <?php foreach($arr_obat as $nama_obat){?>
                    <tr>
                      <td>
                      <?php echo $nama_obat;?>
                    </td>        
                       </tr>
                       <?php }?>
                    </table>   
                   </td>
                    <td>
                        <table>
                      <?php foreach($dosis_obat as $rdo){?>
                        <tr>
                         <td> 
                         <?php echo $rdo;?>
                        </td>        
                       </tr>
                       <?php } ?>
                      </table>       
                    </td>
                    <td>
                       <table>  
                    <?php foreach($jumlah_obat as $rjo){?>
                    <tr>
                      <td>
                      <?php echo $rjo;?>
                    </td>        
                       </tr>
                       <?php }?>
                    </table>      
                    </td>
			   </tr>
             </tbody>
        </table>
        </br>
        <label for="total">Total Pembayaran</label>
		<table>
                <tr>
                    <td><strong>Jasa Periksa</strong></td>
                    <td ><input type="text" name="hjp" disabled="disabled" value="Rp.<?php echo $harga_jperiksa;?>" /></td>
                    
                </tr>
				<tr>
                    <td><strong>Obat</strong></td>
                    <td ><input type="text" name="hto" disabled="disabled" value="Rp.<?php echo $total_hrgobat;?>" /></td>

                </tr>
				<tr>
                    <td><strong>Tindakan</strong></td>
                    <td><input type="text" name="httm" disabled="disabled" value="Rp.<?php echo $htot_tindakan;?>" /></td>
                </tr>
				<tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><strong>Jumlah</strong></td>
                    <td><input type="text" name="key_cari" disabled="disabled" value="Rp.<?php echo $totby_pempasien;?>" /></td>
                </tr>
        </table>
          </fieldset>
        
        <div class="submit">
            <input type="submit" value="OK" />
			
        </div>
		<?php echo form_close(); ?>
		 <script>$("input:disabled")</script>
    </div>
</div>
<?php $this->load->view('footer');?>