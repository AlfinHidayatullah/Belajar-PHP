<html>
<head>
<tittle>Contoh Counter</tittle>
</head>
<body>
<?php
$nama_file="counter.dat";
if (file_exists($nama_file))
{
    $berkas = fopen($nama_file,"r");
    $pencacah = (integer)trim(fgets($berkas, 255));
    $pencacah++;
    Fclose($berkas);
}
Else
$pencacah = 1;
//simpan pencacah
$berkas = fopen($nama_file,"w");
Fputs($berkas, $pencacah);
Fclose($berkas);
//tulis ke halaman web
print("Anda pengunjung ke-$pencacah <br>\n"); ?>
</body>
</html>