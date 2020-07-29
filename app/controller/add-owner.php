<?php

if (!session('user_id')){
    header('Refresh:0;url='.site_url('login'));
}
if (session('user_type') == 1) {
    if (post('submit')) {

        if ($_FILES['file']['error'] == 4) {
            $error = 'Profil fotoğrafı yüklemeyi unuttunuz.';

        } else {

            $data = [
                'image' => $_FILES,
                'user_type' => 2,
                'name' => post('namesurname'),
                'plaka' => post('plaka'),
                'phone' => post('phone'),
                'email' => post('email'),
                'password' => post('password')
            ];

            if (owner::add_driver($data)){
                $success = 'İşlemi başarıyla tamamladınız.';
            }else{
                $error = 'Bir hata oluştu';
            }
        }

    }
    if (post('submitAcenta')) {

        $dataAcenta = [
            'user_type' => 3,
            'nameAcenta' => post('namesurname'),
            'acenta_adi' => post('acentaadi'),
            'phoneAcenta' => post('phone'),
            'emailAcenta' => post('email'),
            'passwordAcenta' => post('password')
        ];
        if (owner::add_owner($dataAcenta)){
            $success = 'İşlemi başarıyla tamamladınız.';
        }else{
            $error = 'Bir hata oluştu';
        }
    }


    require view('add-owner');
}else{
    require view('404');
}
