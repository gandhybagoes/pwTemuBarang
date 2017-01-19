<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> List Barang</h3>
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover" id="listbrg">
	                  	  	 <!--  <h4><i class="fa fa-angle-right"></i> Advanced Table</h4> -->
                           <button class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> Name</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Jenis</th>
                                  <th><i class="fa fa-bookmark"></i> Lokasi</th>
                                  <th><i class=" fa fa-edit"></i> Status</th>
                                  <th><i class=" fa fa-edit"></i> Foto</th>
                                  <th><i class=" fa fa-edit"></i> Action</th>

                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php 
                              // print_r($listbrg);
                              foreach($listbrg as $a) { ?>
                              <tr>
                                  <td><a href="basic_table.html#"><?php echo $a['nama_barang']; ?></a></td>
                                  <td class="hidden-phone"><?php echo $a['jenis_barang']; ?></td>
                                  <td><?php echo $a['lokasi_barang']; ?></td>
                                   <td><?php echo $a['status_barang']; ?></td>
                                    <td><?php echo $a['foto_barang']; ?></td>
                                  <!-- <td><span class="label label-info label-mini">Due</span></td> GET DARI DATABASE?? -->
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <?php } ?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

		</section>
      </section><!-- /MAIN CONTENT -->