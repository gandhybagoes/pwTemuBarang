main content start-->
        <section id="main-content">
            <section class="wrapper">

                <!-- BASIC FORM ELELEMNTS -->
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <h3 class="mb"><i class="fa fa-angle-right"></i>Data Barang</h3>
                            <?php echo form_open_multipart('cs/tambah/'); ?>
                            <form action="<?php echo base_url();?>cs/tambah/" method="post" id="frm">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Barang</label>
                                    <input required type="text" class="form-control" id="namabarang" name="namabarang" aria-describedby="emailHelp" placeholder="Masukkan Nama Barang">
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea">Keterangan Barang</label>
                                    <textarea required class="form-control" id="keteranganbarang" name="keteranganbarang" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelect1">Jenis Barang</label>
                                    <select class="form-control" id="jenisbarang" name="jenisbarang">
                                      <option value="kosong">--Pilih Jenis Barang--</option>
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
                                    <select class="form-control" id="lokasibarang" name="lokasibarang">
                                      <option value="kosong">--Pilih Lokasi Barang--</option>
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
                                <button type="submit" class="btn btn-primary">Tambah Barang</button>
                            </form>
                        </div>
                    </div>
                    <!-- col-lg-12-->
                </div>
                <!-- /row -->

            </section>
            <! --/wrapper -->
        </section>
        <!-- /MAIN CONTENT 