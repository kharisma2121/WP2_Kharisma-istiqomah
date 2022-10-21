<html>

<head> 
    <title>Form Input Mahasiswa</title> 
</head>

<body> 
    <center> 
        <form action="<?= base_url('mahasiswa/cetak'); ?>"method="post">
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
                        <input type="text" name="nama" id="nama">
                        <?= form_error('nama','<small class ="text-danger pl-3">','<small>'); ?>
                    </td> 
                </tr> 
                <tr> 
                    <th>NIS</th> 
                    <td>:</td> 
                    <td> 
                        <input type="text" name="nis" id="nis">
                        <?= form_error('nis','<small class ="text-danger pl-3">','<small>'); ?>
                    </td> 
                </tr> 
                <tr> 
                    <th>Kelas</th> 
                    <td>:</td> 
                    <td> 
                        <input type="text" name="kelas" id="kelas">
                        <?= form_error('kelas','<small class ="text-danger pl-3">','<small>'); ?>
                    </td> 
                </tr> 
                <tr> 
                    <th>Tanggal Lahir</th> 
                    <td>:</td> 
                    <td> 
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir">
                        <?= form_error('tanggal_lahir','<small class ="text-danger pl-3">','<small>'); ?>
                    </td> 
                </tr> 
                <tr> 
                    <th>Tempat Lahir</th> 
                    <td>:</td> 
                    <td> 
                        <input type="text" name="tempat_lahir" id="tempat_lahir">
                        <?= form_error('tempat_lahir','<small class ="text-danger pl-3">','<small>'); ?>
                    </td> 
                </tr> 
                <tr> 
                    <th>Alamat</th> 
                    <td>:</td> 
                    <td> 
                        <input type="text" name="alamat" id="alamat">
                        <?= form_error('alamat','<small class ="text-danger pl-3">','<small>'); ?>
                    </td> 
                </tr> 
                <tr> 
                    <th>Jenis Kelamin</th> 
                    <td>:</td>
                    <td> 
                        <input type="radio" name="jns_kelamin" value="Laki- Laki"> Laki Laki<br>
                        <input type="radio" name="jns_kelamin" value="Perempuan"> Perempuan<br></td>
                </tr> 
                <tr> 
                    <th>Agama</th> 
                    <td>:</td> 
                    <td> 
                        <select name="agama" id="agama">
                            <option value="">Pilih Agama</option>
                            <option value="islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </td> 
                </tr> 
                <tr> 
                    <td colspan="3" align="center"> 
                        <input type="submit" value="submit">
                    </td> 
                </tr> 
            </table>
        </form>     
    </center> 
</body>

</html>