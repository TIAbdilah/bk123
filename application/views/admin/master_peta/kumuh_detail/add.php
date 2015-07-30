
<?php $this->load->view('admin/master_peta/kumuh/breadcrumbs') ?>

<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <?php echo $title_page ?>
            </header>
            <div class="panel-body">
                <form class="form-horizontal" role="form" action="<?php echo site_url('master_peta/kumuh_detail/process/add/') ?>" method="POST">
                    <input type="hidden" name="inpKategori" value="<?php echo $kategori?>" />
                    <input type="hidden" name="inpIdKawKumuh" value="<?php echo $id_kaw_kumuh?>" />
                    <div class="form-group">
                        <label for="inpTingkat" class="col-lg-3 col-sm-3 control-label">A. FISIK</label>
                    </div>
                    <div class="form-group">
                        <label for="inpKeteraturanBangunan" class="col-lg-3 col-sm-3 control-label">Keteraturan Bangunan</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpKeteraturanBangunan" name="inpKeteraturanBangunan" placeholder="Keteraturan Bangunan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpKepadatanBangunan" class="col-lg-3 col-sm-3 control-label">Kepadatan Bangunan</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpKepadatanBangunan" name="inpKepadatanBangunan" placeholder="Kepadatan Bangunan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpKondisiFisikBangunan" class="col-lg-3 col-sm-3 control-label">Kondisi Fisik Bangunan</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpKondisiFisikBangunan" name="inpKondisiFisikBangunan" placeholder="Kondisi Fisik Bangunan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpJalanLingkungan" class="col-lg-3 col-sm-3 control-label">Jalan Lingkungan</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpJalanLingkungan" name="inpJalanLingkungan" placeholder="Jalan Lingkungan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpDrainaseLingkungan" class="col-lg-3 col-sm-3 control-label">Saluran Air Hujan (Drainase Lingkungan)</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpDrainaseLingkungan" name="inpDrainaseLingkungan" placeholder="Drainase Lingkungan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpPembuanganAirLimbah" class="col-lg-3 col-sm-3 control-label">Pembuangan Air Limbah</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpPembuanganAirLimbah" name="inpPembuanganAirLimbah" placeholder="Pembuangan Air Limbah">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpPAB_PAM" class="col-lg-3 col-sm-3 control-label">Penyediaan Air Bersih dan Air Minum</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpPAB_PAM" name="inpPAB_PAM" placeholder="Penyediaan Air Bersih dan Air Minum">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpPengelolaanPersampahan" class="col-lg-3 col-sm-3 control-label">Pengelolaan Persampahan</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpPengelolaanPersampahan" name="inpPengelolaanPersampahan" placeholder="Pengelolaan Persampahan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpPengamananBahayaKebakaran" class="col-lg-3 col-sm-3 control-label">Pengamanan Bahaya Kebakaran</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpPengamananBahayaKebakaran" name="inpPengamananBahayaKebakaran" placeholder="Pengamanan Bahaya Kebakaran">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpTingkat" class="col-lg-3 col-sm-3 control-label">B. Non FISIK</label>
                    </div>
                    <div class="form-group">
                        <label for="inpLegalitasPendirianBangunan" class="col-lg-3 col-sm-3 control-label">Legalitas Pendirian Bangunan</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpLegalitasPendirianBangunan" name="inpLegalitasPendirianBangunan" placeholder="Legalitas Pendirian Bangunan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpKepadatanPenduduk" class="col-lg-3 col-sm-3 control-label">Kepadatan Penduduk</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpKepadatanPenduduk" name="inpKepadatanPenduduk" placeholder="Kepadatan Penduduk">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpMataPencaharianPenduduk" class="col-lg-3 col-sm-3 control-label">Mata Pencaharian Penduduk</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpMataPencaharianPenduduk" name="inpMataPencaharianPenduduk" placeholder="Mata Pencaharian Penduduk">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpPenghasilanRatarata" class="col-lg-3 col-sm-3 control-label">Penghasilan Rata-rata Keluarga</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpPenghasilanRatarata" name="inpPenghasilanRatarata" placeholder="Penghasilan Rata-rata Keluarga">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpTingkat" class="col-lg-3 col-sm-3 control-label">C. Lainya</label>
                    </div>
                    <div class="form-group">
                        <label for="inpKesesuaianRencanaTataRuang" class="col-lg-3 col-sm-3 control-label">Kesesuaian dengan Rencana Tata Ruang</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpKesesuaianRencanaTataRuang" name="inpKesesuaianRencanaTataRuang" placeholder="Kesesuaian dengan Rencana Tata Kota">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpStatusLahan" class="col-lg-3 col-sm-3 control-label">Status Lahan</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpStatusLahan" name="inpStatusLahan" placeholder="Status Lahan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpNilaiStrategisLokasi" class="col-lg-3 col-sm-3 control-label">Nilai Strategis Lokasi</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpNilaiStrategisLokasi" name="inpNilaiStrategisLokasi" placeholder="Nilai Strategis Lokasi">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpKegiatanEkonomi" class="col-lg-3 col-sm-3 control-label">Kegiatan Ekonomi Dalam Lokasi / Kawasan</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpKegiatanEkonomi" name="inpKegiatanEkonomi" placeholder="Kegiatan Ekonomi Dalam Lokasi / Kawasan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpResponUmumMasyarakat" class="col-lg-3 col-sm-3 control-label">Respon Umum Masyarakat Setempat Terhadap Upaya Perbaikan Lingkungan Permukiman</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpResponUmumMasyarakat" name="inpResponUmumMasyarakat" placeholder="Respon Umum Masyarakat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpHarapanMasyarakat" class="col-lg-3 col-sm-3 control-label">Harapan Masyarakat Setempat Terhadap Perbaikan Lingkungan Permukiman</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpHarapanMasyarakat" name="inpHarapanMasyarakat" placeholder="Harapan Masyarakat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpKeberadaanAktifitasDanKelompok" class="col-lg-3 col-sm-3 control-label">Keberadaan dan Aktifitas Sistem / Kelompok Pengelola Lingkungan </label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpKeberadaanAktifitasDanKelompok" name="inpKeberadaanAktifitasDanKelompok" placeholder="Keberadaan dan Aktifitas Sistem / Kelompok Pengelola Lingkungan ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inpKomitmenPemerintahKota" class="col-lg-3 col-sm-3 control-label">Komitmen Pemerintah Kota</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="inpKomitmenPemerintahKota" name="inpKomitmenPemerintahKota" placeholder="Komitmen Pemerintah Kota">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-lg-3 col-sm-3 control-label">Upload KMZ File</label>
                        <div class="col-lg-4">
                            <input type="file" class="form-control fileinput-button" name="inpGbr" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-lg-3 col-sm-3 control-label">Upload Report File</label>
                        <div class="col-lg-4">
                            <input type="file" class="form-control fileinput-button" name="inpGbr" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn"><?php echo $text['txt']->button['save_add'] ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>