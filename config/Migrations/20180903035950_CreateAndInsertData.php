<?php
use Migrations\AbstractMigration;

class CreateAndInsertData extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $this->execute('CREATE TABLE IF NOT EXISTS blocks (
            id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(50) NOT NULL,
            created datetime NOT NULL,
            updated datetime NOT NULL DEFAULT NOW(),
            created_by int(11) NOT NULL,
            updated_by int(11) NOT NULL,
            status tinyint NOT NULL DEFAULT 1
        );
        
        CREATE TABLE IF NOT EXISTS block_invoices (
            id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            block_id INT(11) NOT NULL, 
            invoice_plan_id INT(11) NOT NULL, 
            value decimal(11,2) NOT NULL DEFAULT 0, 
            issue_date datetime NOT NULL, 
            expiration_date datetime NOT NULL, 
            reference_date datetime NOT NULL, 
            payment_status tinyint NOT NULL DEFAULT 0 COMMENT "0 dont paied | 1 for paied",
            created datetime NOT NULL,
            updated datetime NOT NULL DEFAULT NOW(),
            created_by int(11) NOT NULL,
            updated_by int(11) NOT NULL,
            status tinyint NOT NULL DEFAULT 1
        );
        
        CREATE TABLE IF NOT EXISTS invoice_plans (
            id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(50) NOT NULL, 
            entry_type_id INT(11) NOT NULL,
            created datetime NOT NULL,
            updated datetime NOT NULL DEFAULT NOW(),
            created_by int(11) NOT NULL,
            updated_by int(11) NOT NULL,
            status tinyint NOT NULL DEFAULT 1
        );
        
        CREATE TABLE IF NOT EXISTS entry_types (
            id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(50) NOT NULL, 
            operation smallint NOT NULL DEFAULT 1 COMMENT "-1 debit | 1 credit",
            created datetime NOT NULL,
            updated datetime NOT NULL DEFAULT NOW(),
            created_by int(11) NOT NULL,
            updated_by int(11) NOT NULL,
            status tinyint NOT NULL DEFAULT 1
        ); 
        
        CREATE TABLE IF NOT EXISTS apartments (
            id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(50) NOT NULL, 
            owner_id INT(11) NOT NULL,
            created datetime NOT NULL,
            updated datetime NOT NULL DEFAULT NOW(),
            created_by int(11) NOT NULL,
            updated_by int(11) NOT NULL,
            status tinyint NOT NULL DEFAULT 1
        );
        
        CREATE TABLE IF NOT EXISTS lodger_apartments (
            id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            lodger_id INT(11) NOT NULL, 
            apartment_id INT(11) NOT NULL, 
            init_date datetime NOT NULL, 
            end_date datetime NOT NULL,
            created datetime NOT NULL,
            updated datetime NOT NULL DEFAULT NOW(),
            created_by int(11) NOT NULL,
            updated_by int(11) NOT NULL,
            status tinyint NOT NULL DEFAULT 1
        );
        
        CREATE TABLE IF NOT EXISTS lodger_apartment_invoices (
            id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            lodger_apartment_id INT(11) NOT NULL,
            created datetime NOT NULL,
            updated datetime NOT NULL DEFAULT NOW(),
            created_by int(11) NOT NULL,
            updated_by int(11) NOT NULL,
            status tinyint NOT NULL DEFAULT 1
        );
        
        CREATE TABLE IF NOT EXISTS users (
            id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(50) NOT NULL,
            user_type_id INT(11) NOT NULL, 
            birthdate datetime NOT NULL, 
            cpf INT(11) NOT NULL, 
            rg INT(9) NOT NULL,
            email varchar(50) NOT NULL UNIQUE,
            answerable int(11),
            created datetime NOT NULL,
            updated datetime NOT NULL DEFAULT NOW(),
            created_by int(11) NOT NULL,
            updated_by int(11) NOT NULL,
            status tinyint NOT NULL DEFAULT 1
        );
        
        CREATE TABLE IF NOT EXISTS user_phones (
            id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            user_id INT(11) NOT NULL, 
            phone INT(11) NOT NULL, 
            phone_type_id INT(11) NOT NULL,
            created datetime NOT NULL,
            updated datetime NOT NULL DEFAULT NOW(),
            created_by int(11) NOT NULL,
            updated_by int(11) NOT NULL,
            status tinyint NOT NULL DEFAULT 1
        );
        
        CREATE TABLE IF NOT EXISTS user_types (
            id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(50) NOT NULL,
            created datetime NOT NULL,
            updated datetime NOT NULL DEFAULT NOW(),
            created_by int(11) NOT NULL,
            updated_by int(11) NOT NULL,
            status tinyint NOT NULL DEFAULT 1
        ); 
        
        CREATE TABLE IF NOT EXISTS phone_types (
            id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(50) NOT NULL,
            created datetime NOT NULL,
            updated datetime NOT NULL DEFAULT NOW(),
            created_by int(11) NOT NULL,
            updated_by int(11) NOT NULL,
            status tinyint NOT NULL DEFAULT 1
        ); 
        
        CREATE TABLE IF NOT EXISTS user_invoices (
            id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            user_id INT(11) NOT NULL, 
            apartment_id INT(11) NOT NULL, 
            invoice_plan_id INT(11) NOT NULL, 
            value decimal(11,2) NOT NULL DEFAULT 0, 
            issue_date datetime NOT NULL, 
            expiration_date datetime NOT NULL, 
            reference_date datetime NOT NULL, 
            payment_status tinyint NOT NULL DEFAULT 0 COMMENT "0 dont paied | 1 for paied",
            created datetime NOT NULL,
            updated datetime NOT NULL DEFAULT NOW(),
            created_by int(11) NOT NULL,
            updated_by int(11) NOT NULL,
            status tinyint NOT NULL DEFAULT 1
        );
        
        CREATE TABLE IF NOT EXISTS party_hall_schedules (
            id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            user_id INT(11) NOT NULL, 
            init_date datetime NOT NULL, 
            end_date datetime NOT NULL, 
            cost decimal(11,2) NOT NULL DEFAULT 0,
            created datetime NOT NULL,
            updated datetime NOT NULL DEFAULT NOW(),
            created_by int(11) NOT NULL,
            updated_by int(11) NOT NULL,
            status tinyint NOT NULL DEFAULT 1
        );
        
        CREATE TABLE IF NOT EXISTS announcements (
            id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            user_id INT(11) NOT NULL, 
            title VARCHAR(30) NOT NULL, 
            message VARCHAR(30) NOT NULL,
            created datetime NOT NULL,
            updated datetime NOT NULL DEFAULT NOW(),
            created_by int(11) NOT NULL,
            updated_by int(11) NOT NULL,
            status tinyint NOT NULL DEFAULT 1
        );
        
        INSERT INTO users (id, name, user_type_id, birthdate, cpf, rg, email, created, created_by, updated_by)
        VALUES (-13, "root", 1, NOW(), 00000000000, 000000000, "email@gmail.com", NOW(), -13, -13);
        
        INSERT INTO entry_types (id, name, operation, created, created_by, updated_by)
        VALUES (1, "debit", -1, NOW(), -13, -13), (2, "credit", 1, NOW(), -13, -13);
        
        INSERT INTO user_types (id, name, created, created_by, updated_by)
        VALUES (1, "admin", NOW(), -13, -13), (2, "dweller", NOW(), -13, -13),
        (3, "dweller_family", NOW(), -13, -13), (4, "owner", NOW(), -13, -13);
        
        INSERT INTO phone_types (id, name, created, created_by, updated_by)
        VALUES (1, "trabalho", NOW(), -13, -13), (2, "casa", NOW(), -13, -13),
        (3, "celular", NOW(), -13, -13);
        ');
    }

    public function down()
    {
        $this->execute('
        DROP TABLE IF EXISTS blocks;
        DROP TABLE IF EXISTS block_invoices;
        DROP TABLE IF EXISTS invoice_plans;
        DROP TABLE IF EXISTS entry_types;
        DROP TABLE IF EXISTS apartments;
        DROP TABLE IF EXISTS lodger_apartments;
        DROP TABLE IF EXISTS lodger_apartment_invoices;
        DROP TABLE IF EXISTS users;
        DROP TABLE IF EXISTS user_phones;
        DROP TABLE IF EXISTS user_types;
        DROP TABLE IF EXISTS phone_types;
        DROP TABLE IF EXISTS user_invoices;
        DROP TABLE IF EXISTS party_hall_schedules;
        DROP TABLE IF EXISTS announcements;
        ');
    }
}
