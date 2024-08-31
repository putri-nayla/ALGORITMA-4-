<?php
$books = [
    "Panduan Belajar PHP untuk Pemula",
    "Membangun Aplikasi Web dengan PHP",
    "Tutorial PHP dan MySQL",
    "Membuat Chat Bot dengan PHP"
];

echo "<h5>Judul Buku PHP:</h5>";
echo "<ul>";
foreach($books as $buku){
    echo "<li>$buku</li>";
}
$books = [
    "kutukan seorang nenek,asal usul danau lau kawar",
    "Hang tuah ksatria melayu",
    "siamang putih",
    "anak gembala dan serigala"
];
echo "<h5>judul buku dongeng : </h5>";
echo "<ul>";

foreach ($books as $buku){
    echo "<li>$buku</li>";

}
print_r("<p><strong> by:putri nayla</strong>");
?>
