<?php $this->load->view('header');?>

<h1><img src="<?php echo base_url();?>img/icons/posts.png" alt="" />Daftar Pemeriksaan</h1>

<div class="bloc">
    <div class="title">
        Daftar Pemeriksaan
    </div>
    <div class="content">
        <table>
            <thead>
                <tr>
		<th><input type="checkbox" class="checkall"/></th>
                    <th>&nbsp;</th>
					<th>Kode Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Keluhan Utama</th>
                    <th>Tanggal Pemeriksaan</th>
					<th>Options</th>
					
                </tr>
            </thead>
            <tbody>
                 <?php
                    foreach($datapemeriksaan->result() as $dp){
                  ?>
                <tr>
					<td><input type="checkbox" /></td>
                    <td class="picture" style="width:140px;"><a href="<?php echo base_url();?>img/unknownUser.jpg" class="zoombox"><img src="<?php echo base_url();?>img/unknownUser.jpg" alt="" /></a></td>
                    <td><?php echo $dp->kode_pasien;?></td>
                    <td><?php echo $dp->nama_pasien;?></td>
                    <td><?php echo $dp->keluhan_utama;?></td>
                    <td><?php echo $dp->tgl_lahir;?></td>
					<td class="actions"><a href="#" title="Edit this content"><img src="<?php echo base_url();?>img/icons/edit.png" alt="" /></a><a href="#" title="Delete this content"><img src="<?php echo base_url();?>img/icons/delete.png" alt="" /></a></td>
				</tr>
                <?php } ?>
             </tbody>
        </table>
		<div class="center input">
            <select name="action" id="tableaction">
                <option value="">Edit</option>
                <option value="delete">Hapus</option>
            </select>
        </div>
		<div class="submit">
            <input type="submit" value="OK" name="ok"/>
		</div>
    </div>
</div>

<?php $this->load->view('footer');?>