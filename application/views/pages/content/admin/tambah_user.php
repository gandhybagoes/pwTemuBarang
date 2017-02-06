<!--main content start-->
        <section id="main-content">
            <section class="wrapper">

                <!-- BASIC FORM ELELEMNTS -->
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <h3 class="mb"><i class="fa fa-angle-right"></i><?= $judul ?></h3>
                            <?= form_open_multipart(($judul=="Tambah User")?base_url('admin/tambah_user?act=kliktambah'):base_url('admin/edit_user?act=klikedit'), 'class="formm"') ?>
                            <form method="post"  action="<?= ($judul=="Tambah User")?base_url('admin/tambah_user?act=kliktambah'):base_url('admin/edit_user?act=klikedit') ?>">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama User</label>
                                    <input type="text" class="form-control" id="namauser" aria-describedby="emailHelp" placeholder="Masukkan Nama User" name="nama_user" value="<?= isset($isine)?$isine['0']['nama_barang']:"" ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Masukkan Username" name="user_name" value="<?= isset($isine)?$isine['0']['nama_barang']:"" ?>" />
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Password</label>
                                    <input type="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Masukkan Password" name="password" value="<?= isset($isine)?$isine['0']['nama_barang']:"" ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Confirm Password</label>
                                    <input type="password" class="form-control" id="conpassword" aria-describedby="emailHelp" placeholder="Masukkan Kembali Password" name="con_password" value="<?= isset($isine)?$isine['0']['nama_barang']:"" ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor Telepon</label>
                                    <input type="text" class="form-control" id="telepon" aria-describedby="emailHelp" placeholder="Masukkan Nomor Telepon" name="telepon" value="<?= isset($isine)?$isine['0']['nama_barang']:"" ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelect1">Tipe User</label>
                                    <select class="form-control" id="tipeuser" name="tipe_user">
                                      <option value="<?= isset($isine)?$isine['0']['jenis_barang']:"" ?>" selected><?= isset($isine)?$isine['0']['jenis_barang']:"Pilih Jenis" ?></option>
                                      <option value="0">Siswa</option>
                                      <option value="1">Admin</option>
                                      <option value="2">CS</option>
                                    </select>
                                </div>
                                <div class="form-group" id="tambah">
                                    
                                </div>
                                <div class="form-group" id="tambahlagi">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Foto Profile</label>
                                    <?php echo form_upload('pic'); ?>
                                </div>
                                <button type="submit" class="btn btn-primary"><?= $judul ?></button>
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
