<html>

<head> 
    <title>Tampil Data Mahasiswa</title> 
</head>

<body> 
    <center> 
        <table> 
            <tr> 
                <th colspan="3"> 
                        Tampil Data Mahasiswa  
                </th> 
            </tr>
            <tr> 
                <td colspan="3"> 
                     <hr>
                </td> 
             </tr> 
            <tr> 
                <th>Nama</th> 
                <th>:</th> 
                <td> 
                    <?= $nama; ?>
                </td> 
            </tr> 
            <tr> 
                <th>NIS</th> 
                <td>:</td> 
                <td> 
                    <?= $nis; ?>
                </td> 
            </tr> 
            <tr> 
                <th>Kelas</th> 
                <td>:</td> 
                <td> 
                    <?= $kelas; ?>
                </td> 
            </tr> 
            <tr> 
                <th>Tangal Lahir</th> 
                <td>:</td> 
                <td> 
                    <?= $tanggal_lahir; ?>
                </td> 
            </tr> 
            <tr> 
                <th>Tempat Lahir</th> 
                <td>:</td> 
                <td> 
                    <?= $tempat_lahir; ?>
                </td> 
            </tr> 
            <tr> 
                <th>Alamat</th> 
                <td>:</td> 
                <td> 
                    <?= $alamat; ?>
                </td> 
            </tr>
            <tr> 
                <th>Jenis Kelamin</th> 
                <td>:</td> 
                <td> 
                    <?= $jns_kelamin; ?>
                </td> 
            </tr> 
            <tr> 
                <th>Agama</th> 
                <td>:</td> 
                <td> 
                    <?= $agama; ?>
                </td> 
            </tr> 
            <tr> 
                <td colspan="3" align="center"> 
                    <a href="<?= base_url('mahasiswa'); ?>"kembali</a>
                </td> 
            </tr> 
        </table>
        </form>  
        <a href="<?= base_url('mahasiswa');?>"><h1>Back</h1> </a>  
    </center> 
</body>

</html>