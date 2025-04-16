<?php

function getDatabaseConfig(): array
{
    return [
        "database" => [
            "test" => [
                "url" => "mysql:host=localhost;dbname=php_login_test",
                "username" => "root",
                "password" => "",
            ],
            "production" => [
                "url" => "mysql:host=localhost;dbname=databasephp",
                "username" => "root",
                "password" => "",
            ],
        ]
    ];
}