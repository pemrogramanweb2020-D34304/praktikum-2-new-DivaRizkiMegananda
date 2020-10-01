<?php
$user = [
  [
    "nama" => "Arsene Lupin",
    "nik" => "1234",
    "jenis_kelamin" => "male",
    "tgl_lahir" => "1902-03-23"
  ],

  [
    "nama" => "Sherlock Holmes",
    "nik" => "4321",
    "jenis_kelamin" => "male",
    "tgl_lahir" => "1876-08-16"
  ],

  [
    "nama" => "Irene Adler",
    "nim" => "6789",
    "jenis_kelamin" => "female",
    "tgl_lahir" => "1884-10-07"
  ]

];
$nama1 = "Sherlock Holmes";
$nama2 = "Watson";

$jalankan = true;
while ($jalankan) {
  //for Sherlock
  for ($i = 0; $i < count($user); $i++) {
    if ($user[$i]["nama"] == $nama1) {
      echo "Nama = ", $user[$i]["nama"];
      $jalankan = false;
      break;
    }
  }
}
echo "<br>";

$jalankan = true;
while ($jalankan) {
  //for Watson
  for ($i = 0; $i < count($user); $i++) {
    if ($user[$i]["nama"] == $nama2) {
      echo "Nama = ", $user[$i]["nama"];
      $jalankan = false;
      break;
    }
  }
}
$jalankan = true;

echo "<br>";
while ($jalankan) {
  //foreach Sherlock
  foreach ($user as $nomor => $jenis) {
    foreach ($jenis as $data => $value) {
      if ($value == $nama1) {
        echo "$data = $value <br>";
        $jalankan = false;
        break;
      }
    }
  }
}
$jalankan = true;

echo "<br>";
while ($jalankan) {
  //foreach Watson
  foreach ($user as $nomor => $jenis) {
    foreach ($jenis as $data => $value) {
      if ($value == $nama2) {
        echo "$data = $value <br>";
        $jalankan = false;
        break;
      }
    }
  }
}
