<?php $this->load->view('header');?>

<h1><img src="<?php echo base_url();?>img/icons/posts.png" alt="" />Upah Karyawan</h1>

<div class="bloc">
    <div class="title">Upah Karyawan</div>

	<?php if ($this->session->flashdata('berhasil')){?>
	<div class="notif success">
            <strong>Success :</strong> <?php echo $this->session->flashdata('berhasil');?>
            <a href="#" class="close"></a>

        </div>
	<?php } ?>
	
	
    <div class="content">
	<?php echo form_open(''); ?>
        <fieldset>
        <legend>Dokter</legend>
		</br>
        <label for="total">Total Upah</label>
		<table>
                <tr>
                    <td><strong>Jasa Periksa</strong></td>
                    <td ><input type="text" name="key_cari" disabled="disabled" value="Rp." /></td>
                    
                </tr>
				<tr>
                    <td><strong>Jasa Tindakan</strong></td>
                    <td ><input type="text" name="key_cari" disabled="disabled" value="Rp." /></td>

                </tr>
				<tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><strong>Jumlah</strong></td>
                    <td><input type="text" name="key_cari" disabled="disabled" value="Rp." /></td>
                </tr>
        </table>
        </fieldset>
		
         <fieldset>
        <legend>Perawat</legend>
		</br>
        <label for="total">Total Upah</label>
		<table>
                <tr>
                    <td><strong>Uang Transport</strong></td>
                    <td ><input type="text" name="key_cari" disabled="disabled" value="Rp." /></td>
                    
                </tr>
				<tr>
                    <td><strong>Pasien</strong></td>
                    <td ><input type="text" name="key_cari" disabled="disabled" value="Rp." /></td>

                </tr>
				<tr>
                    <td><strong>Jasa Tindakan</strong></td>
                    <td><input type="text" name="key_cari" disabled="disabled" value="Rp." /></td>
                </tr>
				<tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><strong>Jumlah</strong></td>
                    <td><input type="text" name="key_cari" disabled="disabled" value="Rp." /></td>
                </tr>
        </table>
        </fieldset>
		
        <fieldset>
        <legend>Operator</legend>
		</br>
        <label for="total">Total Upah</label>
		<table>
                <tr>
                    <td><strong>Uang Transport</strong></td>
                    <td ><input type="text" name="key_cari" disabled="disabled" value="Rp." /></td>
                    
                </tr>
				<tr>
                    <td><strong>Pasien</strong></td>
                    <td ><input type="text" name="key_cari" disabled="disabled" value="Rp." /></td>

                </tr>
				<tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td><strong>Jumlah</strong></td>
                    <td><input type="text" name="key_cari" disabled="disabled" value="Rp." /></td>
                </tr>
        </table>
          </fieldset>
		<?php echo form_close(); ?>
		 <script>$("input:disabled")</script>
    </div>
</div>

<?php $this->load->view('footer');?>