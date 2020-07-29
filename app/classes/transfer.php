<?php


class transfer
{
    public static function new_transfer($data){
            global $db;

            $query = $db->prepare('INSERT INTO transfer SET 
                    user_id = :u_id,from_city = :f_city,from_district = :f_district,from_adress = :f_adress,to_city = :t_city,
                    to_district = :t_district,to_adress = :t_adress,transfer_date = :t_date,person_count = :p_count,
                    p_name = :p_name,flight_code = :f_code,transfer_time = :t_time,luggage_count = :l_count,phone = :phone,hello_text = :h_text,
                    cost = :cost');
            $row = $query->execute([
                'u_id' => 0, // TO DO : make dynamic
                'f_city' => $data['il'],
                'f_district' => $data['ilce'],
                'f_adress' => $data['acikadres'],
                't_city' => $data['il2'],
                't_district' => $data['ilce2'],
                't_adress' => $data['acikadres2'],
                't_date' => $data['date'],
                'p_count' => $data['person'],
                'p_name' => $data['name'],
                'f_code' => $data['flightcode'],
                't_time' => $data['time'],
                'l_count' => $data['luggage'],
                'phone' => $data['phone'],
                'h_text' => $data['karsilama'],
                'cost' => $data['cost']
            ]);
            if ($row){
                return 1;
            }else{
                return 0;
            }

    }
    public static function get_transfers($state){
        global $db;
        $query = $db->prepare('SELECT * FROM transfer WHERE state = :state');
        $query->execute([
            'state' => $state
        ]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function get_transfer($id){
        global $db;
        $query = $db->prepare('SELECT * FROM transfer WHERE id = :id');
        $query->execute([
            'id' => $id
        ]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }
    public static function add_driver($transfer_id,$driver_id){
        global $db;
        $query = $db->prepare('UPDATE transfer SET driver_id = :d_id,state = :state WHERE id = :id');
        $row = $query->execute([
            'd_id' => $driver_id,
            'state' => 1,
            'id' => $transfer_id
        ]);
        if ($row){
            return 1;
        }else{
            return 0;
        }
    }
    public static function complete_transfer($transfer_id,$cost){
        global $db;
        $query = $db->prepare('UPDATE transfer SET cost = :cost,state = :state WHERE id = :id');
        $row = $query->execute([
            'id' => $transfer_id,
            'state' => 2,
            'cost' => $cost
        ]);
        if ($row){
            return 1;
        }else{
            return 0;
        }
    }
}
