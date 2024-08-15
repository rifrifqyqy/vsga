<?php
// membaca file
$file = fopen("welcome.txt", "r");
// membaca isi file
echo fgets($file);
?>
<?php
$data = "welcome.txt";
$bukafile = fopen("$data", "r");
if (!$bukafile) {
    print("file $data gagal dibuka");
    exit;
}
while (!feof($bukafile)) {
    // membaca file
    $data = fgets($bukafile, 50);
    // menampilkann data
    echo $data;
}
// menutup file
fclose($bukafile);
