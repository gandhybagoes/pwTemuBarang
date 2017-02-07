      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> List Barang</h3>
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover" id="listbrg">
	                  	  	 <!--  <h4><i class="fa fa-angle-right"></i> Advanced Table</h4> -->
                           <a href="<?= base_url('admin/tambah_barang') ?>"><button class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button></a>
	                  	  	  <hr>
                              <thead>
                              <tr >
                                  <th><center><i class="fa fa-bullhorn"></i> Name</center></th>
                                  <th class="hidden-phone"><center><i class="fa fa-question-circle"></i> Jenis</center></th>
                                  <th class="hidden-phone"><center><i class="fa fa-question-circle"></i> Keterangan</center></th>
                                  <th><center><i class="fa fa-bookmark"></i> Lokasi</center></th>
                                  <th><center><i class=" fa fa-edit"></i> Status</center></th>
                                  <th><center><i class=" fa fa-edit"></i> Foto</center></th>
                                  <th><center><i class=" fa fa-edit"></i> Action</center></th>

                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>

                              <?php 
                              //print_r($listbrg);
                              foreach($listbrg as $a) { ?>
                              <tr>
                                  <td><center><a href="basic_table.html#"><?= $a['nama_barang']; ?></a></center></td>
                                  <td class="hidden-phone"><center><?= $a['jenis_barang']; ?></center></td>
                                  <td class="hidden-phone"><center><?= $a['ket_barang']; ?></center></td>
                                  <td><center><?= $a['lokasi_barang']; ?></center></td>
                                   <?= $a['code_status']; ?>
                                  <td width="15%" class="row"><center><div class="">
                                      <div class="project-wrapper">
                                                  <div class="project">
                                                      <div class="photo-wrapper">
                                                          <div class="photo">
                                                            <a class="fancybox" href="<?= base_url('assets/img/brg/').$a['foto_barang']; ?>"><img class="img-responsive" src="<?= base_url('assets/img/brg/').$a['foto_barang']; ?>" alt=""></a>
                                                          </div>
                                                          <div class="overlay"></div>
                                                      </div>
                                                  </div>
                                              </div>
                                    </div><!-- col-lg-4 --></center></td>
                                  <!-- <td><span class="label label-info label-mini">Due</span></td> GET DARI DATABASE?? -->
                                  <?php $profile = $this->session->userdata('profile');  if(($a['confirmA'] == "1" && $profile['0']['username_user'] == "Suko" && $a['confirmB'] == "0") || ($a['confirmB'] == "1" && $profile['0']['username_user'] == "Emil" && $a['confirmA'] == "0")) {
                                    ?>
                                      <td><center>
                                      <button class="btn btn-success btn-xs " disabled><i class="fa fa-check"></i></button>
                                      <a href="<?= base_url('admin/edit_barang?id_brg='); echo $a['id_barang']; ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                     <button   class="btn btn-danger btn-xs hapusbarang" value="<?= $a['id_barang'] ?>"><i class="fa fa-trash-o "></i></button></center>
                                      </td> 
                                    <?php } else if($a['confirmA'] == "1" && $a['confirmB'] == "1") { ?>
                                      <td><center>
                                      <a href="<?= base_url('admin/edit_barang?id_brg='); echo $a['id_barang']; ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                      <button  class="btn btn-danger btn-xs hapusbarang" value="<?= $a['id_barang'] ?>"><i class="fa fa-trash-o "></i></button>
                                      <?php } else{?></center>
                                       <td><center>
                                          <button class="btn btn-success btn-xs confirmTake" value="<?= $a['id_barang'] ?>"><i class="fa fa-check"></i></button>
                                          <a href="<?= base_url('admin/edit_barang?id_brg='); echo $a['id_barang']; ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                          <button  class="btn btn-danger btn-xs hapusbarang" value="<?= $a['id_barang'] ?>"><i class="fa fa-trash-o "></i></button></center>
                                      </td> 
                                  <?php } ?>
                              </tr>
                              <?php } ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

		</section>
      </section><!-- /MAIN CONTENT -->