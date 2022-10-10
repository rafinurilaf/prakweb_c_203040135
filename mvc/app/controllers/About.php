<?php

class About {
    public function index($nama = 'rafinuril', $pekerjaan = "Mahasiswa", $umur = 21)
    {
        echo "Halo, nama saya $nama, saya adalah $pekerjaan. Saya berumur $umur";
    }
    public function page()
    {
        echo 'About/page';
    }
}