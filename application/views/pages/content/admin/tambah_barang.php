<!--main content start-->
        <section id="main-content">
            <section class="wrapper">

                <!-- BASIC FORM ELELEMNTS -->
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <h3 class="mb"><i class="fa fa-angle-right"></i><?= $judul ?></h3>
                            <?= form_open_multipart(($judul=="Tambah Barang")?base_url('admin/tambah_barang?act=kliktambah'):base_url('admin/edit_barang?act=klikedit')) ?>
                            <form method="post" action="<?= ($judul=="Tambah Barang")?base_url('admin/tambah_barang?act=kliktambah'):base_url('admin/edit_barang?act=klikedit') ?>">
                                <div class="form-group">
                                    <input type="hidden" class="form-control"  aria-describedby="emailHelp" placeholder="Masukkan Nama Barang" name="id_barang" value="<?= isset($isine)?$isine['0']['id_barang']:"" ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Barang</label>
                                    <input type="text" class="form-control" id="namabarang" aria-describedby="emailHelp" placeholder="Masukkan Nama Barang" name="nama_barang" value="<?= isset($isine)?$isine['0']['nama_barang']:"" ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea">Keterangan Barang</label>
                                    <textarea class="form-control" name="ket_barang" id="keteranganbarang" rows="3" ><?= isset($isine)?$isine['0']['ket_barang']:"" ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelect1">Jenis Barang</label>
                                    <select class="form-control" id="jenisbarang" name="jenis_barang">
                                      <option value="<?= isset($isine)?$isine['0']['jenis_barang']:"" ?>" selected><?= isset($isine)?$isine['0']['jenis_barang']:"Pilih Jenis" ?></option>
                                      <option value="crg">Charger</option>
                                      <option value="lpt">Laptop</option>
                                      <option value="hp">HP</option>
                                      <option value="kci">Kunci</option>
                                      <option value="spd">Sepeda</option>
                                      <option value="fd">Flash Disk</option>
                                      <option value="hdd">Hard Disk</option>
                                      <option value="dmpt">Dompet</option>
                                      <option value="prhsn">Perhiasan</option>
                                      <option value="dll">Lain-lain</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelect1">Lokasi Barang</label>
                                    <select class="form-control" id="lokasibarang" name="lokasi_barang">
                                      <option value="<?= isset($isine)?$isine['0']['lokasi_barang']:"" ?>"><?= isset($isine)?$isine['0']['lokasi_barang']:"Pilih Lokasi" ?></option>
                                      <!-- kelas 10 rpl -->
                                      <option value="X RPL 1">X RPL 1</option>
                                      <option value="X RPL 2">X RPL 2</option>
                                      <option value="X RPL 3">X RPL 3</option>
                                      <option value="X RPL 4">X RPL 4</option>
                                      <option value="X RPL 5">X RPL 5</option>
                                      <option value="X RPL 6">X RPL 6</option>
                                      <!-- kelas 10 tkj -->
                                      <option value="X TKJ 1">X TKJ 1</option>
                                      <option value="X TKJ 2">X TKJ 2</option>
                                      <option value="X TKJ 3">X TKJ 3</option>
                                      <option value="X TKJ 4">X TKJ 4</option>
                                      <option value="X TKJ 5">X TKJ 5</option>
                                      <option value="X TKJ 6">X TKJ 6</option>
                                      <!-- kelas 11 rpl -->
                                      <option value="XI RPL 1">XI RPL 1</option>
                                      <option value="XI RPL 2">XI RPL 2</option>
                                      <option value="XI RPL 3">XI RPL 3</option>
                                      <option value="XI RPL 4">XI RPL 4</option>
                                      <option value="XI RPL 5">XI RPL 5</option>
                                      <option value="XI RPL 6">XI RPL 6</option>
                                      <!-- kelas 11 tkj -->
                                      <option value="XI TKJ 1">XI TKJ 1</option>
                                      <option value="XI TKJ 2">XI TKJ 2</option>
                                      <option value="XI TKJ 3">XI TKJ 3</option>
                                      <option value="XI TKJ 4">XI TKJ 4</option>
                                      <option value="XI TKJ 5">XI TKJ 5</option>
                                      <!-- kelas 12 rpl -->
                                      <option value="XII RPL 1">XII RPL 1</option>
                                      <option value="XII RPL 2">XII RPL 2</option>
                                      <option value="XII RPL 3">XII RPL 3</option>
                                      <option value="XII RPL 4">XII RPL 4</option>
                                      <option value="XII RPL 5">XII RPL 5</option>
                                      <!-- kelas 12 tkj -->
                                      <option value="XII TKJ 1">XII TKJ 1</option>
                                      <option value="XII TKJ 2">XII TKJ 2</option>
                                      <option value="XII TKJ 3">XII TKJ 3</option>
                                      <option value="XII TKJ 4">XII TKJ 4</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Foto Barang</label>
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