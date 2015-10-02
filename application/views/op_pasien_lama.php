<?php $this->load->view('header');?>

<h1><img src="<?php echo base_url();?>img/icons/posts.png" alt="" />Data Pasien</h1>

<div class="bloc">
    <div class="title">
       Data Pasien
    </div>
    <div class="content">
        <table>
            <thead>
                <tr>
                    <th>&nbsp;</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>TTL</th>
                    <th>Umur</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Akses Level</th>

                </tr>
            </thead>
            <tbody>
                 <?php
                    foreach($datadata as $du){
                  ?>
                <tr>
                    <td class="picture" style="width:140px;"><a href="#" class="zoombox"><img src="<?php echo base_url();?>img/unknownUser.jpg" alt="" /></a></td>
                    <td><?php echo $du->getKodePasien();?></td>
                    <td><?php echo $du->getNamaPasien();?></td>
                    <td><?php echo $du->getTtlPasien();?></td>
                    <td><?php echo $du->getUmurPasien();?></td>
                    <td><?php echo $du->getJenisKelamin();?></td>
                    <td><?php echo $du->getAlamatPasien();?></td>
                    <td><?php echo $du->getNoTelepon();?></td>
                    <td><?php echo $du->getStatus();?></td>
                </tr>
                <?php } ?>
             </tbody>
        </table>

    </div>
</div>

<?php $this->load->view('footer');?>