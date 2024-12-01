<?php


class CreateUsersTable
{
    public function up()
    {
        return "CREATE TABLE `users` (
        `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `name` VARCHAR(255) NOT NULL,
        `email` VARCHAR(255) NOT NULL,
        `password` VARCHAR(255) NOT NULL,
        CREATED_AT TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";
    }


    public function down(){
        $sql = "DROP TABLE `users`";
        return $sql;
    }
}
