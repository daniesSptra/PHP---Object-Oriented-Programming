<?php 

Class Dokumen{
    public  $nama_dokumen,
            $format_dokumen,
            $kategori,
            $asal,
            $pengupload,
            $waktu_upload,
            $waktu_perbarui,
            $bagian;

    public function __construct($isi_nama, $isi_format, $isi_kategori, $isi_asal, $isi_pengupload, $isi_waktuUp, $isi_waktuPer, $isi_bagian ){
        $this->nama_dokumen = $isi_nama;
        $this->format_dokumen = $isi_format;
        $this->kategori = $isi_kategori;
        $this->asal = $isi_asal;
        $this->pengupload = $isi_pengupload;
        $this->waktu_upload = $isi_waktuUp;
        $this->waktu_perbarui = $isi_waktuPer;
        $this->bagian = $isi_bagian;

    }

    public function cetakData(){
        return "$this->nama_dokumen, $this->kategori, $this->asal, $this->pengupload, $this->waktu_upload";
    }
}

Class CetakDetailData{
    public function cetakSemua(Dokumen $dokumen){
        $semuaData = "{$dokumen->cetakData()} | {$dokumen->format_dokumen} | {$dokumen->bagian} | {$dokumen->waktu_perbarui}";
        return $semuaData;
    }
}

$dokumen1 = new Dokumen("Surat Pengumuman", "pdf", "Surat Keluar", "Pemerintahan", "Ujang", "20 Agustus 2025", "-", "KASI");
$infoDokumen1 = new CetakDetailData;

echo "Data Dokumen 1: {$dokumen1->cetakData()}";
echo "<br>";
echo "Detail Dokumen 1: {$infoDokumen1->cetakSemua($dokumen1)}";


?>