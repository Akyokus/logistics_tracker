<?php

if (!session('user_id')){
    header('Location:' .site_url('login'));
}
if (session('user_type') == 1) {

    $transfer = transfer::get_transfers(0);
//print_r($transfer);
    for ($i = 0; $i < count($transfer); $i++) {
        $city_name = city::get_city_name($transfer[$i]['from_city']);
        $transfer[$i]['from_city'] = $city_name[$i]['isim'];
        $district_name = city::get_district_name($transfer[$i]['from_district']);
        $transfer[$i]['from_district'] = $district_name['isim'];
        $city_to_name = city::get_city_name($transfer[$i]['to_city']);
        $transfer[$i]['to_city'] = $city_to_name[$i]['isim'];
        $district_name = city::get_district_name($transfer[$i]['to_district']);
        $transfer[$i]['to_district'] = $district_name['isim'];
    }
//echo $transfer[0]['from_city'];
//$city_name = city::get_city_name($transfer[0]['from_city']);
//print_r($city_name);


    require view('transfer-defined');
}else{
    require view('404');
}
