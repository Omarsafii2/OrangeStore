<?php



class CreateProductsTable
{
    public function up()
    {
        return "CREATE TABLE `products` (
        `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `name` VARCHAR(255) NOT NULL,
        `price` DECIMAL(10,2) NOT NULL,
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";
    }


    public function down(){
        $sql = "DROP TABLE `products`";
        return $sql;
    }
}
