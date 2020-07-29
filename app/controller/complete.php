<?php
if (!session('user_id')){
    header('Refresh:0;url='.site_url('login'));
}

$transfer = transfer::get_transfer(post('id'));
$drivers = owner::get_drivers();

    $city_name = city::get_city_name($transfer['from_city']);
    $transfer['from_city'] = $city_name[0]['isim'];
    $district_name = city::get_district_name($transfer['from_district']);
    $transfer['from_district'] = $district_name['isim'];
    $city_to_name = city::get_city_name($transfer['to_city']);
    $transfer['to_city'] = $city_to_name[0]['isim'];
    $district_name = city::get_district_name($transfer['to_district']);
    $transfer['to_district'] = $district_name['isim'];


if (post('transfer_id')){


    if (transfer::complete_transfer(post('transfer_id'),post('cost'))){
        $success = 'İşlemi başarıyla tamamladınız.';
        header('Location:' . site_url('complete-transfer'));
    }else{
        $error = 'Bir hata oluştu';
    }

}

require view('complete');


