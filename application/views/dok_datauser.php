<?php $this->load->view('header');?>

<h1><img src="<?php echo base_url();?>img/icons/posts.png" alt="" />Daftar Pengguna</h1>

<div class="bloc">
    <div class="title">
        Daftar Pengguna
    </div>
    <div class="content">
        <table>
            <thead>
                <tr>
	           <th><input type="checkbox" class="checkall"/></th>
                    <th>&nbsp;</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Umur</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
		    <th>Options</th>
					
                </tr>
            </thead>
            <tbody>
                 <?php
                    foreach($datauser->result() as $du){
                  ?>
                <tr>
		    <td><input type="checkbox" /></td>
                    <td class="picture" style="width:140px;"><a href="#" class="zoombox"><img src="<?php echo base_url();?>img/unknownUser.jpg" alt="" /></a></td>
                    <td><?php echo $du->kode_user;?></td>
                    <td><?php echo $du->nama_user;?></td>
                    <td><?php echo $du->tempat_lahir;?></td>
                    <td><?php echo $du->tanggal_lahir;?></td>
                    <td><?php echo $du->jenis_kelamin;?></td>
                    <td><?php echo $du->alamat_user;?></td>
                    <td><?php echo $du->no_telepon;?></td>
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