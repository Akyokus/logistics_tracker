<?php
if (!isset($_SESSION['user_id'])){
    require '../helper/template.php';
    header('Refresh:0;url='.site_url('login'));
}


if (isset($_POST['plakaKodu'])) {

    $plakaKodu = $_POST['plakaKodu'];
    require '../db.php';
    $query = $db->prepare('SELECT * FROM ilceler WHERE il_no =?');
    $query->execute([$plakaKodu]);
    $district = $query->fetchAll(PDO::FETCH_ASSOC);;
    $html = '<option value="">--İLÇE SEÇİNİZ--</option>';
    foreach ($district as $districts) {
        $html .= '<option value="' . $districts['ilce_no'] . '">' . $districts['isim'] . '</option>';
    }
    echo $html;
}
if (isset($_POST['plakaKodu2'])) {

    $plakaKodu2 = $_POST['plakaKodu2'];
    require '../db.php';
    $query = $db->prepare('SELECT * FROM ilceler WHERE il_no =?');
    $query->execute([$plakaKodu2]);
    $district = $query->fetchAll(PDO::FETCH_ASSOC);;
    $html = '<option value="">--İLÇE SEÇİNİZ</option>';
    foreach ($district as $districts) {
        $html .= '<option value="' . $districts['ilce_no'] . '">' . $districts['isim'] . '</option>';
    }
    echo $html;
}
if (post('submit')){
    $data = [
        'il' => post('il'),
        'il2' => post('il2'),
        'ilce' => post('ilce'),
        'ilce2' => post('ilce2'),
        'acikadres' => post('acikadres'),
        'acikadres2' => post('acikadres2'),
        'date' => post('date'),
        'person' => post('personcount'),
        'name' => post('namesurname'),
        'flightcode' => post('code'),
        'time' => post('time'),
        'luggage' => post('luggage'),
        'phone' => post('phone'),
        'karsilama' => post('karsilama'),
        'cost' => post('cost')
    ];
        if (!$data['karsilama']){
            $data['karsilama'] = NULL;
        }
        if (!$data['cost']){
            $data['cost'] = NULL;
        }


    if (transfer::new_transfer($data)){
        $success = 'İşlemi başarıyla tamamladınız.';
    }else{
        $error = 'Bir hata oluştu';
    }
}
$cities = city::get_city();

require view('add-transfer');

/*
         'il' => post('il'),
        'il2' => post('il2'),
        'ilce' => post('ilce'),
        'ilce2' => post('ilce2'),
        'acikadres' => post('acikadres'),
        'acikadres2' => post('acikadres2'),
        'date' => post('date'),
        'person' => post('personcount'),
        'name' => post('namesurname'),
        'flightcode' => post('code'),
        'time' => post('time'),
        'luggage' => post('luggage'),
        'phone' => post('phone'),
        'karsilama' => post('karsilama'),
        'cost' => post('cost')
 */
