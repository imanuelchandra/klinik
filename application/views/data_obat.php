<?php $this->load->view('header');?>

<h1><img src="<?php echo base_url();?>img/icons/posts.png" alt="" />Data Obat</h1>

<div class="bloc">
    <div class="title">
       Data Obat
    </div>
    <div class="content">
	<?php if($this->session->userdata('level') == 1){ ?>
	
        <table>
            <thead>
                <tr>
					
					<th>&nbsp;&nbsp;</th>
                    <th width="50">No</th>
                    <th width="160">Nama Obat</th>
                    <th width="160">Golongan</th>
                    <th width="60">Stok Obat</th>
                    <th width="100">Harga Beli/Box</th>
                    <th width="60">Isi/Box</th>
                    <th width="100">Harga Beli/Satuan</th>
					<th width="100">Harga Jual</th>
					<th width="80">Exp.Date</th>
					<th width="160">Apotek</th>
					
                </tr>
            </thead>
			
           <tbody>
                 <?php
                    foreach($dt_obat as $du1){
                   
				  ?>
				 
                <tr>
					
					<td>&nbsp;&nbsp;</td>
                      <td><?php echo $du1->id_obat ?></td>
                    <td><?php echo $du1->nama_obat?></td>
                    <td><?php echo $du1->golongan?></td>
                    <td><?php echo $du1->stok_obat?></td>
                    <td><?php echo $du1->harga_beli_box?></td>
                    <td><?php echo $du1->isi_box?></td>
                    <td><?php echo $du1->harga_beli?></td>
					<td><?php echo $du1->harga_jual?></td>
                    <td><?php echo $du1->Exp_date?></td>
                    <td><?php echo $du1->apotik?></td>	
			   </tr>
                <?php } ?>
             </tbody>
			
        </table>
		<?php }else if($this->session->userdata('level') == 2){ ?>
		
		<table>
            <thead>
                <tr>
					<th><input type="checkbox" class="checkall"/></th>
					<th>&nbsp;&nbsp;</th>
                    <th width="50">No</th>
                    <th width="160">Nama Obat</th>
                    <th width="160">Golongan</th>
                    <th width="60">Stok Obat</th>
                    <th width="100">Harga Beli/Box</th>
                    <th width="60">Isi/Box</th>
                    <th width="100">Harga Beli/Satuan</th>
					<th width="100">Harga Jual</th>
					<th width="80">Exp.Date</th>
					<th width="160">Apotek</th>
					<th>Options</th>
                </tr>
            </thead>
			
            <tbody>
                 <?php
                    foreach($dt_obat as $du1){
                   
				  ?>
				  
                <tr>
					
					<td><input type="checkbox" /></td>
					<td><input type="hidden" name="id_obat" value="<?php echo $du1->id_obat;?>" /></td>
                    <td><?php echo $du1->id_obat ?></td>
                    <td><?php echo $du1->nama_obat?></td>
                    <td><?php echo $du1->golongan?></td>
                    <td><?php echo $du1->stok_obat?></td>
                    <td><?php echo $du1->harga_beli_box?></td>
                    <td><?php echo $du1->isi_box?></td>
                    <td><?php echo $du1->harga_beli?></td>
					<td><?php echo $du1->harga_jual?></td>
                    <td><?php echo $du1->Exp_date?></td>
                    <td><?php echo $du1->apotik?></td>
					
					<td class="actions"><a href="#" title="Edit this content"><img src="<?php echo base_url();?>img/icons/edit.png" alt="" /></a>
					<a href="<?php echo base_url();?>index.php/apotek/delete_obat" title="Delete this content"><img src="<?php echo base_url();?>img/icons/delete.png" alt="" /></a></td>
					
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
		<?php } ?>
         <div class="pagination"><?php echo $this->pagination->create_links();?></div>
        
    </div>
</div>

<?php $this->load->view('footer');?>