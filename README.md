# Ziraat Bankası Web Service Transactions

It is used to withdraw account transactions from Ziraat Bank web service.

## Installation

Install with composer

```bash
composer require phpdev/ziraatbankasi
```

## Usage

```php
Use Phpdev\Ziraatbankasi;

$ws = new Ziraatbankasi();

# set username password and bank account
$ws->username('asdasd')->password('deneme')->account('131231');

# get transactions
$transactions = $ws->transactions('2022-02-01', '2022-02-15');

print_r($transactions);

```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

