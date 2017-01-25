<!--main content start-->
        <section id="main-content">
            <section class="wrapper">

                <!-- BASIC FORM ELELEMNTS -->
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <h3 class="mb"><i class="fa fa-angle-right"></i>Tambah Barang</h3>
                            <?php echo form_open_multipart('cs/tambah/'); ?>
                            <form action="<?php echo base_url();?>cs/tambah/" method="post" id="frm">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Barang</label>
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
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelect1">Lokasi Barang</label>
                                    <select class="form-control" id="lokasibarang" name="lokasibarang">
                                      <option value="kosong">--Pilih Lokasi Barang--</option>
                                      <option value="XII RPL 1">XII RPL 1</option>
                                      <option value="XII RPL 2">XII RPL 2</option>
                                      <option value="XII RPL 3">XII RPL 3</option>
                                      <option value="XII RPL 4">XII RPL 4</option>
                                      <option value="XII RPL 5">XII RPL 5</option>
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
        <!-- /MAIN CONTENT -->