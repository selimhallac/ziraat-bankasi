<?php

include_once "vendor/autoload.php";

use Phpdev\Ziraatbankasi;

$entegrasyon = new Ziraatbankasi();

$entegrasyon->username('asdasd')->password('deneme')->account('131231');

$transaction = $entegrasyon->transactions('2022-02-01', '2022-02-15');

print_r($transaction);



?>