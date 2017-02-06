<!--main content start-->
            <!-- The Modal -->
              <div id="myModal" class="modal">

                <!-- The Close Button -->
                <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

                <!-- Modal Content (The Image) -->
                <img class="modal-content" id="img01">

                <!-- Modal Caption (Image Text) -->
                <div id="caption"></div>
              </div>
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
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Name</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Jenis</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Keterangan</th>
                                  <th><i class="fa fa-bookmark"></i> Lokasi</th>
                                  <th><i class=" fa fa-edit"></i> Status</th>
                                  <th><i class=" fa fa-edit"></i> Foto</th>
                                  <th><i class=" fa fa-edit"></i> Action</th>

                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>

                              <?php 
                              //print_r($listbrg);
                              foreach($listbrg as $a) { ?>
                              <tr>
                                  <td><?= $a['nama_barang']; ?></td>
                                  <td class="hidden-phone"><?= $a['jenis_barang']; ?></td>
                                  <td class="hidden-phone"><?= $a['ket_barang']; ?></td>
                                  <td><?= $a['lokasi_barang']; ?></td>
                                   <?= $a['code_status']; ?>
                                   <td><img id="myImg" src="<?= base_url('assets/img/brg/').$a['foto_barang'] ?>" alt="<?= $a['foto_barang']; ?>" width="200" height="200"></td>
                                  <!-- <td><span class="label label-info label-mini">Due</span></td> GET DARI DATABASE?? -->
                                  <?php if(($a['confirmA'] == 1 && $profile['0']['username_user'] == "Suko") || ($a['confirmB'] == 1 && $profile['0']['username_user'] == "Emil")) {
                                    ?>
                                      <td>
                                      <button class="btn btn-success btn-xs" disabled><i class="fa fa-check"></i></button>
                                      <a href="<?= base_url('admin/edit_barang?id_brg='); echo $a['id_barang']; ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                     <button id="hapusbarang"  class="btn btn-danger btn-xs" value="<?= $a['id_barang'] ?>"><i class="fa fa-trash-o "></i></button>
                                      </td> 
                                    <?php } else if($a['confirmA'] == 1 && $a['confirmB'] == 1) { ?>
                                      <td>
                                      <a href="<?= base_url('admin/edit_barang?id_brg='); echo $a['id_barang']; ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                      <button id="hapusbarang" class="btn btn-danger btn-xs" value="<?= $a['id_barang'] ?>"><i class="fa fa-trash-o "></i></button>
                                      <?php } else{?>
                                       <td>
                                          <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                          <a href="<?= base_url('admin/edit_barang?id_brg='); echo $a['id_barang']; ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                          <button id="hapusbarang"  class="btn btn-danger btn-xs" value="<?= $a['id_barang'] ?>"><i class="fa fa-trash-o "></i></button>
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