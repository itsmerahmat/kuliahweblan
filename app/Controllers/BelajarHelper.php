<?php

namespace App\Controllers;

use DateTime;

class BelajarHelper extends BaseController
{

    public function index(): string
    {
        helper(['form', 'belajar']);
        return view('v_belajar_helper', ['data' => belajar('DATA')]);
    }

    public function helper () {
        helper(['belajar', 'number']);
        $amount = number_to_currency(005005005, 'IDR', 'id_ID', 2);
        $tgl = tanggal(date('Y.m.d'));
        echo belajar($tgl);
    }
    

    public function simpanBelajar() {
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
        exit;
    }


    public function tugas() {
        helper(['utility']);

        $datetime = '2021-08-01 12:00:00';
        echo time_elapsed($datetime);
        echo '<br>';

        $bytes = 1024;
        echo format_bytes($bytes);
        echo '<br>';

        $email = 'johndoe432@gmail.com';
        echo mask_email($email);
        echo '<br>';

        $phone = '+6281234567890';
        echo validate_phone($phone);
        echo '<br>';
    }
}
