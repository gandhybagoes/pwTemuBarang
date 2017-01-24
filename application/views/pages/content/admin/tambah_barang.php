<!--main content start-->
        <section id="main-content">
            <section class="wrapper">

                <!-- BASIC FORM ELELEMNTS -->
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="form-panel">
                            <h3 class="mb"><i class="fa fa-angle-right"></i><?= $judul ?></h3>
                            <form method="post" action="<?= ($judul=="Tambah Barang")?base_url('admin/kliktambah'):base_url('admin/klikedit') ?>">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Barang</label>
                                    <input type="text" class="form-control" id="namabarang" aria-describedby="emailHelp" placeholder="Masukkan Nama Barang" value="<?= isset($isine)?$isine['0']['nama_barang']:"" ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea">Keterangan Barang</label>
                                    <textarea class="form-control" id="keteranganbarang" rows="3" ><?= isset($isine)?$isine['0']['ket_barang']:"" ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelect1">Jenis Barang</label>
                                    <select class="form-control" id="jenisbarang">
                                      <option value="<?= isset($isine)?$isine['0']['jenis_barang']:"" ?>" selected><?= isset($isine)?$isine['0']['jenis_barang']:"Pilih Jenis" ?></option>
                                      <option value="charger">Charger</option>
                                      <option value="laptop">Laptop</option>
                                      <option value="hp">HP</option>
                                      <option value="kunci">Kunci</option>
                                      <option value="sepeda">Sepeda</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleSelect1">Lokasi Barang</label>
                                    <select class="form-control" id="lokasibarang">
                                      <option value="<?= isset($isine)?$isine['0']['lokasi_barang']:"" ?>"><?= isset($isine)?$isine['0']['lokasi_barang']:"Pilih Lokasi" ?></option>
                                      <option>XII RPL 1</option>
                                      <option>XII RPL 2</option>
                                      <option>XII RPL 3</option>
                                      <option>XII RPL 4</option>
                                      <option>XII RPL 5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Gambar Barang</label>
                                    <input type="file" class="form-control-file" id="gambarbarang" aria-describedby="fileHelp">
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