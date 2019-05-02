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
        $this->execute('
        CREATE TABLE IF NOT EXISTS users (
            id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            password VARCHAR(255) NOT NULL,
            name VARCHAR(50) NOT NULL,
            user_type_id INT(11) NOT NULL DEFAULT 0, 
            birthdate datetime NOT NULL, 
            cpf VARCHAR(11) NOT NULL, 
            rg VARCHAR(9) NOT NULL,
            email varchar(50) NOT NULL UNIQUE,
            created datetime NOT NULL,
            updated datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
            created_by int(11) NOT NULL,
            updated_by int(11) NOT NULL,
            status tinyint NOT NULL DEFAULT 1
        );

        CREATE TABLE IF NOT EXISTS user_types (
            id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(50) NOT NULL,
            created datetime NOT NULL,
            updated datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
            created_by int(11) NOT NULL,
            updated_by int(11) NOT NULL,
            status tinyint NOT NULL DEFAULT 1
        ); 

        CREATE TABLE IF NOT EXISTS user_apps (
            id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(50) NOT NULL,
            usage_time BIGINT NOT NULL,
            last_usage_time BIGINT NOT NULL,
            usage_in_this_session BIGINT NOT NULL,
            created datetime NOT NULL,
            updated datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
            created_by int(11) NOT NULL,
            updated_by int(11) NOT NULL,
            status tinyint NOT NULL DEFAULT 1,
            user_id INT(11) NOT NULL
        );

        CREATE TABLE IF NOT EXISTS user_statistics (
            id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            phone_brand VARCHAR(255) NOT NULL DEFAULT "",
            phone_carrier VARCHAR(255) NOT NULL DEFAULT "",
            phone_model VARCHAR(255) NOT NULL DEFAULT "",
            phone_number VARCHAR(255) NOT NULL DEFAULT "",
            phone_manufacturer VARCHAR(255) NOT NULL DEFAULT "",
            system_name VARCHAR(255) NOT NULL DEFAULT "",
            system_version VARCHAR(255) NOT NULL DEFAULT "",
            timezone VARCHAR(255) NOT NULL DEFAULT "",
            battery_level VARCHAR(255) NOT NULL DEFAULT "",
            ip VARCHAR(255) NOT NULL DEFAULT "",
            user_agent VARCHAR(255) NOT NULL DEFAULT "",
            air_plane_mode_on VARCHAR(255) NOT NULL DEFAULT "",
            is_emulator VARCHAR(255) NOT NULL DEFAULT "",
            is_tablet VARCHAR(255) NOT NULL DEFAULT "",
            is_landscape VARCHAR(255) NOT NULL DEFAULT "",
            device_type VARCHAR(255) NOT NULL DEFAULT "",
            connection_type VARCHAR(255) NOT NULL DEFAULT "",
            connection_effective_type VARCHAR(255) NOT NULL DEFAULT "",
            created datetime NOT NULL,
            updated datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
            created_by int(11) NOT NULL,
            updated_by int(11) NOT NULL,
            status tinyint NOT NULL DEFAULT 1,
            user_id INT(11) NOT NULL
        );
        
        INSERT INTO users (id, name, user_type_id, birthdate, cpf, rg, email, created, created_by, updated_by)
        VALUES (-13, "root", 1, CURRENT_TIMESTAMP, 00000000000, 000000000, "email@gmail.com", CURRENT_TIMESTAMP, -13, -13);
        
        INSERT INTO user_types (id, name, created, created_by, updated_by)
        VALUES (1, "admin", CURRENT_TIMESTAMP, -13, -13), (2, "dweller", CURRENT_TIMESTAMP, -13, -13)');
    }

    public function down()
    {
        $this->execute('
        DROP TABLE IF EXISTS users;
        DROP TABLE IF EXISTS user_types;
        DROP TABLE IF EXISTS user_apps;
        DROP TABLE IF EXISTS user_statistics;
        ');
    }
}
