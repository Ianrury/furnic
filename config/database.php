<?php

function getDatabaseConfig(): array
{
    return [
        "database" => [
            "test" => [
                "url" => "mysql:host=localhost;dbname=php_furnic_test",
                "username" => "root",
                "password" => "",
            ],
            "production" => [
                "url" => "mysql:host=192.168.1.238;port=9356;dbname=web-furnice",
                "username" => "dev_programmer",
                "password" => "BismillahLancar8*#",
            ],
        ]
    ];
}