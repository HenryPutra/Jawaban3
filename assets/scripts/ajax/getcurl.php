<?php
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://farmasi.mimoapps.xyz/mimoqss2auyqD1EAlkgZCOhiffSsFl6QqAEIGtM',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);
curl_close($curl);

$json = json_decode($response, true);

if (isset($json['success']) && $json['success']) {
    $inventoryList = $json['data'];

    foreach ($inventoryList as $data) {
        $code = $data['i_code'];
        $name = $data['i_name'];
        $group = $data['g_code'];
        $harga = $data['i_sell'];
        $quantity = $data['i_qty'];

        if (strpos($name, 'B') === 0) {
            echo "Kode Barang: " . $code . "<br>";
            echo "Nama Barang: " . $name . "<br>";
            echo "Grup Barang: " . $group . "<br>";
            echo "Harga Jual: " . $harga . "<br>";
            echo "Quantity: " . $quantity . "<br><br>";
        }
    }
} else {
    echo "Gagal mengambil data inventaris.";
}
