<!DOCTYPE html> 
<html> 
<head> 
    <meta charset="utf-8"> 
    <title>Web Prog II | Merancang Template sederhana dengan 
codeigniter</title> 
    <link rel="stylesheet" type="text/css" href="<?php echo 
base_url() ?>assets/css/stylebuku.css"> 
</head> 
<body> 
    <div id="wrapper"> 
        <header> 
            <hgroup> 
                <h1>RentalBuku.net</h1> 
                <h3>Membuat Template Sederhana dengan 
CodeIgniter</h3> 
            </hgroup> 
            <nav> 
                <ul>   
                    <li><a href="<?php echo 
base_url().'index.php/web' ?>">Home</a></li> 
                    <li><a href="<?php echo 
base_url().'index.php/web/about' ?>">About</a></li> 
                </ul> 
            </nav> 
            <div class="clear"></div> 
        </header>

<section> 
    <h1><?php echo $judul ?></h1>
    <h4>Nama</h4>
    <ul type="disc"> 
        <li>Nama Depan : Kharisma</li>
        <li>Nama Belakang : Istiqomah</li> 
    </ul> 
    <br> 
    <h4>Alamat</h4> 
    <ul type="none"> 
        <li> Noyotrunan, rt.01/rw.08, cawas, cawas, klaten</li> 
    </ul> 

    <h4>Tempat Lahir</h4> 
    <ul type="none"> 
        <li>Klaten</li> 
    </ul>

    <h4>Olah Raga Favorit</h4> 
    <ul type="square"> 
        <li>Basket</li> 
        <li>Berenang</li> 
    </ul> 
</section>
<footer> 
            <a href="http://www.RentalBuku.com">RentalBuku</a> 
        </footer> 
    </div> 
</body> 
</html>
