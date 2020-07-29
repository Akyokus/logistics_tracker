<?php
if (!session('user_id')){
    header('Location:' .site_url('login'));
}
if (session('user_type') == 1) {
    $drivers = users::get_users(2);


    $owner = users::get_users(3);

    if (post('id')) {

        if (users::delete_user(post('id'))){
            $success = 'İşlemi başarıyla tamamladınız.';
            header('Refresh:0');
        }else{
            $error = 'Bir hata oluştu';
        }

    }


    require view('users');
}else{
    require view('404');
}
