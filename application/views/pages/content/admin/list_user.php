main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> List User</h3>
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover" id="listbrg">
	                  	  	 <!--  <h4><i class="fa fa-angle-right"></i> Advanced Table</h4> -->
                           <a href="<?= base_url('admin/tambah_user') ?>"><button class="btn btn-success"><i class="fa fa-plus"></i> Tambah User</button></a>
	                  	  	  <hr>
                              <thead>
                              <tr>
<<<<<<< HEAD
                                  <th><i class="glyphicon glyphicon-user"></i> Name</th>
                                  <th class="hidden-phone"><i class="glyphicon glyphicon-home"></i> Kelas</th>
                                  <th class="hidden-phone"><i class="glyphicon glyphicon-list-alt"></i> No Absen</th>
                                  <th><i class="glyphicon glyphicon-earphone"></i> No Telepon</th>
                                  <th><i class="glyphicon glyphicon-eye-open"></i> Status</th>
                                  <th><i class="glyphicon glyphicon-picture"></i> Foto</th>
=======
                                  <th><i class="fa fa-bullhorn"></i> Nama</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Username</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Password</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> No Telp</th>
                                  <th><i class="fa fa-bookmark"></i> Foto</th>
                                  <th><i class=" fa fa-edit"></i> Kelas</th>
                                  <th><i class=" fa fa-edit"></i> No Absen</th>
>>>>>>> 0806aec992a8934fc2bcfba559f84acc3e397a99
                                  <th><i class=" fa fa-edit"></i> Action</th>

                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php 
                              //print_r($listbrg);
                              foreach($listusr as $a) {
                              ?>
                              <tr>
                                <td><?php echo $a['nama_user']; ?></td>
                                <td><?php if($a['kelas_user'] == null) { echo "Tidak ada kelas"; } else { echo $a['kelas_user']; } ?></td>
                                <td><?php if($a['noabsen_user'] == null) { echo "Tidak ada nomor absen"; } else { echo $a['noabsen_user']; }?></td>
                                <td><?php echo $a['notelp_user']; ?></td>
                                <td><?php if($a['type_user'] == 1) { echo "Admin"; } elseif($a['type_user'] == 2) { echo "CS"; } else { echo "Siswa"; }?></td>
                                <td><img src="<?php echo base_url();?>assets/img/pp/<?php echo $a['foto_user']; ?>" width="80" height="80"></td>
                                <!-- button action -->
                                
                                      <td>
                                      <a href="<?= base_url('admin/edit_user?id_usr='); echo $a['id_user']; ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                     <button id="hapususer"  class="btn btn-danger btn-xs" value="<?= $a['id_user'] ?>"><i class="fa fa-trash-o "></i></button>
                                      </td>  
                              </tr>
                              <?php } ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

		</section>
      </section><!-- /MAIN CONTENT 