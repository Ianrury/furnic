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
                "url" => "mysql:host=localhost;dbname=php_furnic_test",
                "username" => "root",
                "password" => "",
            ],
        ]
    ];
}
