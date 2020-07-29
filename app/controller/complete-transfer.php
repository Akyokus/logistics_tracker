<?php

if (!session('user_id')){
    header('Refresh:0;url='.site_url('login'));
}
if (session('user_type') == 2) {

    $transfer = transfer::get_transfers(1);

    for ($i = 0; $i < count($transfer); $i++) {
        $city_name = city::get_city_name($transfer[$i]['from_city']);
        $transfer[$i]['from_city'] = $city_name[0]['isim'];
        $district_name = city::get_district_name($transfer[$i]['from_district']);
        $transfer[$i]['from_district'] = $district_name['isim'];
        $city_to_name = city::get_city_name($transfer[$i]['to_city']);
        $transfer[$i]['to_city'] = $city_to_name[0]['isim'];
        $district_name = city::get_district_name($transfer[$i]['to_district']);
        $transfer[$i]['to_district'] = $district_name['isim'];
    }
//echo $transfer[0]['from_city'];
//$city_name = city::get_city_name($transfer[0]['from_city']);
//print_r($city_name);


    require view('complete-transfer');
}else{
    require view('404');
}
