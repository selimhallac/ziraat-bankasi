<?php

namespace Phpdev;

class Ziraatbankasi
{

    private $username;

    private $password;

    private $account;

    public $service_url = "https://hesap.ziraatbank.com.tr/HEK_NKYWS/HesapHareketleri.asmx/HesapEkstre";

    public function username($username){

        $this->username = $username;
        return $this;
    }

    public function password($password){

        $this->password = $password;
        return $this;
    }

    public function account($account){

        $this->account = $account;
        return $this;
    }

    public function transactions($start_date,$end_date){

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->service_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_NOBODY, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "KurumKod=" . $this->username . "&Sifre=" . $this->password . "&HesapNo=" . $this->account . "&BaslangicTarihi=" . $start_date . "&BitisTarihi=" . $end_date . "");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $output = curl_exec($ch);
        curl_close($ch);
        $arr = simplexml_load_string($output);
        return $arr;

    }

}