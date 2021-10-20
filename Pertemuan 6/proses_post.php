<?php
    //Blok I
    $provinsi = $_POST['provinsi'];
    $kabupaten = $_POST['kabupaten'];
    $kecamatan = $_POST['kecamatan'];
    $desa = $_POST['desa'];
    
    //Blok II
    $namaRTP = $_POST['namaRTP'];
    $NIK = $_POST['NIK'];
    $jkjj = $_POST['jkjj'];
    $hsj = $_POST['hsj'];
    $namaekosistem = $_POST['namaekosistem'];
    $pmt = $_POST['pmt'];
    $km = $_POST['km'];
    $jabk = $_POST['jabk'];
    $atu = $_POST['atu'];
    $att = $_POST['att'];
    $pi = $_POST['pi'];
    $dpi = $_POST['dpi'];
    $daupi =$_POST['daupi']

    //Blok III
    $JP =$_POST['JP']
    $HTa1 =$_POST['HTa1']
    $HTa2 =$_POST['HTa2']
    $HTb1 =$_POST['HTb1']
    $HTb2 =$_POST['HTb2']

    //Blok IV
    $NR =$_POST['NR']
    $NT =$_POST['NT']
    $NPD =$_POST['NPD']
    $KPD =$_POST['KPD']
    $TP =$_POST['TP']
    
    //Tombol
    $tombol = $_POST['tombol'];
    
    //Blok I
    echo "<h1>Data Nelayan</h1>";
    echo "Provinsi : ".$provinsi."<br>";
    echo "Kabupaten/Kota : ".$kabupaten."<br>";
    echo "Kecamatan : ".$kecamatan."<br>";
    echo "Desa/Kelurahan : ".$desa."<br>";

    //Blok II
    echo "Nama RTP/Perusahaan Perikanan : ".$namaRTP."<br>";
    echo "Nomor Induk Kependudukan (NIK)/SIUP : ".$NIK."<br>";
    echo "Jenis Usaha : ".$jkjj."<br>";
    echo "a. Jenis Perairan : ".$hsj."<br>";
    echo "b. Nama Ekosistem : ".$namaekosistem."<br>";
    echo "Sarana Penangkapan : ".$plk."<br>";
    echo "Ukuran Perahu Kapal <br>"
    echo "a. Perahu Motor Tempel : ".$pmt."<br>";
    echo "b. Kapal Motor : ".$km."<br>";
    echo "Jumlah ABK : ".$jabk."<br>";
    echo "Jenis Alat Tangkap <br>"
    echo "a. Alat Tangkap Utama : ".$atu."<br>";
    echo "b. Alat Tangkap Tambahan : ".$att."<br>";
    echo "Wilayah Penangkapan Ikan : ".$pi."<br>";
    echo "Daerah Operasi Penangkapan Ikan : ".$dpi."<br>";
    echo "Daerah Asal Unit Penangkapan Ikan : ".$daupi."<br>";

    //Blok III
    echo "Jumlah Trip Penangkapan Bulan lalu : ".$JP."<br>";
    echo "Jenis Alat Tangkap Utama <br>";
    echo "a. Rata rata Volume hasil tangkapan yang dijual per trip (kg) : ".$HTa1."<br>";
    echo "b. Rata rata Volume hasil tangkapan yang tidak dijual per trip (kg) : ".$HTa2."<br>";
    echo "Jenis Alat Tangkap Tambahan <br>";
    echo "a. Rata rata Volume hasil tangkapan yang dijual per trip (kg) : ".$HTb1."<br>";
    echo "b. Rata rata Volume hasil tangkapan yang tidak dijual per trip (kg) : ".$HTb2."<br>";
    
    //Blok IV
    echo "Nama Responden : ".$NR."<br>";
    echo "No. Telepon/HP : ".$NT."<br>";
    echo "Nama Pengolahan Data : ".$NPD."<br>";
    echo "Kode Pengolahan Data/NIK : ".$KPD."<br>";
    echo "Tanggal Pencatatan : ".$TP."<br>";
    

?>