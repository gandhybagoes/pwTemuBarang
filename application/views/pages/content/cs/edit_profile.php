<!--main content start-->
        <section id="main-content">
            <section class="wrapper">

                <!-- BASIC FORM ELELEMNTS -->
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <h3 class="mb"><i class="fa fa-angle-right"></i>Edit Profile</h3>
                            <?php echo form_open_multipart('cs/editprof/'); ?>
                            <form action="<?php echo base_url();?>cs/editprof" method="post">
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="id" name="id" aria-describedby="emailHelp" value="<?php 
                  $profile = $this->session->userdata('profile');
                  echo $profile['0']['id_profile']; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="iduser" name="iduser" aria-describedby="emailHelp" value="<?php 
                  $profile = $this->session->userdata('profile');
                  echo $profile['0']['id_user']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" value="<?php 
                  $profile = $this->session->userdata('profile');
                  echo $profile['0']['nama_user']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" value="<?php 
                  $profile = $this->session->userdata('profile');
                  echo $profile['0']['username_user']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor Telepon</label>
                                    <input type="number" class="form-control" id="nomortlp" name="nomortlp" aria-describedby="emailHelp" value="<?php 
                  $profile = $this->session->userdata('profile');
                  echo $profile['0']['notelp_user']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Ganti Foto Profile</label>
                                    <?php echo form_upload('pic'); ?>
                                </div>
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>
                        </div>
                    </div>
                    <!-- col-lg-12-->
                </div>
                <!-- /row -->

            </section>
            <! --/wrapper -->
        </section>
        <!-- /MAIN CONTENT -->