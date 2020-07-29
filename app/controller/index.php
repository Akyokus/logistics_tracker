<?php
if (!session('user_id')){
    header('Location :' .site_url('login'));
}

$transfer = transfer::get_transfers(0);

for ($i = 0;$i < count($transfer);$i++){
    $city_name = city::get_city_name($transfer[$i]['from_city']);
    $transfer[$i]['from_city'] = $city_name[$i]['isim'];
    $district_name = city::get_district_name($transfer[$i]['from_district']);
    $transfer[$i]['from_district'] = $district_name['isim'];
    $city_to_name = city::get_city_name($transfer[$i]['to_city']);
    $transfer[$i]['to_city'] = $city_to_name[$i]['isim'];
    $district_name = city::get_district_name($transfer[$i]['to_district']);
    $transfer[$i]['to_district'] = $district_name['isim'];
}

$waiting_transfer = transfer::get_transfers(1);
for ($i = 0;$i < count($waiting_transfer);$i++){
    $city_name = city::get_city_name($waiting_transfer[$i]['from_city']);
    $waiting_transfer[$i]['from_city'] = $city_name[0]['isim'];
    $district_name = city::get_district_name($waiting_transfer[$i]['from_district']);
    $waiting_transfer[$i]['from_district'] = $district_name['isim'];
    $city_to_name = city::get_city_name($waiting_transfer[$i]['to_city']);
    $waiting_transfer[$i]['to_city'] = $city_to_name[0]['isim'];
    $district_name = city::get_district_name($waiting_transfer[$i]['to_district']);
    $waiting_transfer[$i]['to_district'] = $district_name['isim'];
}
$completed_transfer = transfer::get_transfers(2);
print_r($completed_transfer);
for ($i = 0;$i < count($completed_transfer);$i++){
    $city_name = city::get_city_name($completed_transfer[$i]['from_city']);
    $completed_transfer[$i]['from_city'] = $city_name[0]['isim'];
    $district_name = city::get_district_name($completed_transfer[$i]['from_district']);
    $completed_transfer[$i]['from_district'] = $district_name['isim'];
    $city_to_name = city::get_city_name($completed_transfer[$i]['to_city']);
    $completed_transfer[$i]['to_city'] = $city_to_name[0]['isim'];
    $district_name = city::get_district_name($completed_transfer[$i]['to_district']);
    $completed_transfer[$i]['to_district'] = $district_name['isim'];
}
require view('index');
