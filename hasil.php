<?php

require_once 'sekolah.php';

$sekolah = new sekolah ('yeni','smk assalaam');

echo"nama =".$sekolah->get_nama()."<br>";
echo"tempat =".$sekolah->get_sekolah()."<br>";



?>