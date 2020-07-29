<?php


class city
{
    public static function get_city(){
        global $db;
        $query = $db->prepare('SELECT * FROM iller');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_district($il_no){
        global $db;
        $query = $db->prepare('SELECT * FROM ilceler WHERE il_no = :il_no');
        $query->execute([
            'il_no' => $il_no
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_city_name($il_no){
        global $db;
        $query = $db->prepare('SELECT * FROM iller WHERE il_no = :il_no');
        $query->execute([
            'il_no' => $il_no
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_district_name($ilce_no){
        global $db;
        $query = $db->prepare('SELECT * FROM ilceler WHERE ilce_no = :ilce_no');
        $query->execute([
            'ilce_no' => $ilce_no
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

}
