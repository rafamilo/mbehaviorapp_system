DROP DATABASE IF EXISTS meu_appe;
CREATE DATABASE IF NOT EXISTS meu_appe;
USE meu_appe;

CREATE TABLE IF NOT EXISTS blocks (
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

ALTER TABLE apartments ADD CONSTRAINT apartments_ibfk_owner_id FOREIGN KEY (owner_id) REFERENCES users(id);
ALTER TABLE lodger_apartments ADD CONSTRAINT lodger_apartments_ibfk_lodger_id FOREIGN KEY (lodger_id) REFERENCES users(id);
ALTER TABLE lodger_apartments ADD CONSTRAINT lodger_apartments_ibfk_apartment_id FOREIGN KEY (apartment_id) REFERENCES apartments(id);
ALTER TABLE lodger_apartment_invoices ADD CONSTRAINT lodger_apartment_invoices_ibfk_lodger_apartment_id FOREIGN KEY (lodger_apartment_id) REFERENCES lodger_apartments(id);
ALTER TABLE users ADD CONSTRAINT users_ibfk_answerable FOREIGN KEY (answerable) REFERENCES users(id);
ALTER TABLE users ADD CONSTRAINT users_ibfk_user_type_id FOREIGN KEY (user_type_id) REFERENCES user_types(id);
ALTER TABLE user_phones ADD CONSTRAINT user_phones_ibfk_user_id FOREIGN KEY (user_id) REFERENCES users(id);
ALTER TABLE user_phones ADD CONSTRAINT user_phones_ibfk_phone_type_id FOREIGN KEY (phone_type_id) REFERENCES phone_types(id);
ALTER TABLE user_invoices ADD CONSTRAINT user_invoices_ibfk_invoice_plan_id FOREIGN KEY (invoice_plan_id) REFERENCES invoice_plans(id);
ALTER TABLE user_invoices ADD CONSTRAINT user_invoices_ibfk_apartment_id FOREIGN KEY (apartment_id) REFERENCES apartments(id);
ALTER TABLE party_hall_schedules ADD CONSTRAINT party_hall_schedules_ibfk_user_id FOREIGN KEY (user_id) REFERENCES users(id);
ALTER TABLE announcements ADD CONSTRAINT announcements_ibfk_user_id FOREIGN KEY (user_id) REFERENCES users(id);
ALTER TABLE invoice_plans ADD CONSTRAINT invoice_plans_ibfk_entry_type_id FOREIGN KEY (entry_type_id) REFERENCES entry_types(id);
ALTER TABLE block_invoices ADD CONSTRAINT block_invoices_ibfk_block_id FOREIGN KEY (block_id) REFERENCES blocks(id);
ALTER TABLE block_invoices ADD CONSTRAINT block_invoices_ibfk_invoice_plan_id FOREIGN KEY (invoice_plan_id) REFERENCES invoice_plans(id);
ALTER TABLE blocks ADD CONSTRAINT blocks_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
ALTER TABLE blocks ADD CONSTRAINT blocks_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
ALTER TABLE block_invoices ADD CONSTRAINT block_invoices_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
ALTER TABLE block_invoices ADD CONSTRAINT block_invoices_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
ALTER TABLE invoice_plans ADD CONSTRAINT invoice_plans_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
ALTER TABLE invoice_plans ADD CONSTRAINT invoice_plans_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
ALTER TABLE entry_types ADD CONSTRAINT entry_types_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
ALTER TABLE entry_types ADD CONSTRAINT entry_types_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
ALTER TABLE apartments ADD CONSTRAINT apartments_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
ALTER TABLE apartments ADD CONSTRAINT apartments_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
ALTER TABLE lodger_apartments ADD CONSTRAINT lodger_apartments_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
ALTER TABLE lodger_apartments ADD CONSTRAINT lodger_apartments_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
ALTER TABLE lodger_apartment_invoices ADD CONSTRAINT lodger_apartment_invoices_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
ALTER TABLE lodger_apartment_invoices ADD CONSTRAINT lodger_apartment_invoices_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
ALTER TABLE users ADD CONSTRAINT users_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
ALTER TABLE users ADD CONSTRAINT users_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
ALTER TABLE user_phones ADD CONSTRAINT user_phones_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
ALTER TABLE user_phones ADD CONSTRAINT user_phones_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
ALTER TABLE user_types ADD CONSTRAINT user_types_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
ALTER TABLE user_types ADD CONSTRAINT user_types_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
ALTER TABLE phone_types ADD CONSTRAINT phone_types_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
ALTER TABLE phone_types ADD CONSTRAINT phone_types_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
ALTER TABLE user_invoices ADD CONSTRAINT user_invoices_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
ALTER TABLE user_invoices ADD CONSTRAINT user_invoices_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
ALTER TABLE party_hall_schedules ADD CONSTRAINT party_hall_schedules_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
ALTER TABLE party_hall_schedules ADD CONSTRAINT party_hall_schedules_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
ALTER TABLE announcements ADD CONSTRAINT announcements_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
ALTER TABLE announcements ADD CONSTRAINT announcements_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);

ALTER TABLE apartments DROP FOREIGN KEY apartments_ibfk_owner_id;
ALTER TABLE lodger_apartments DROP FOREIGN KEY lodger_apartments_ibfk_lodger_id;
ALTER TABLE lodger_apartments DROP FOREIGN KEY lodger_apartments_ibfk_apartment_id;
ALTER TABLE lodger_apartment_invoices DROP FOREIGN KEY lodger_apartment_invoices_ibfk_lodger_apartment_id;
ALTER TABLE users DROP FOREIGN KEY users_ibfk_answerable;
ALTER TABLE users DROP FOREIGN KEY users_ibfk_user_type_id;
ALTER TABLE user_phones DROP FOREIGN KEY user_phones_ibfk_user_id;
ALTER TABLE user_phones DROP FOREIGN KEY user_phones_ibfk_phone_type_id;
ALTER TABLE user_invoices DROP FOREIGN KEY user_invoices_ibfk_invoice_plan_id;
ALTER TABLE user_invoices DROP FOREIGN KEY user_invoices_ibfk_apartment_id;
ALTER TABLE party_hall_schedules DROP FOREIGN KEY party_hall_schedules_ibfk_user_id;
ALTER TABLE announcements DROP FOREIGN KEY announcements_ibfk_user_id;
ALTER TABLE invoice_plans DROP FOREIGN KEY invoice_plans_ibfk_entry_type_id;
ALTER TABLE block_invoices DROP FOREIGN KEY block_invoices_ibfk_block_id;
ALTER TABLE block_invoices DROP FOREIGN KEY block_invoices_ibfk_invoice_plan_id;
ALTER TABLE blocks DROP FOREIGN KEY blocks_ibfk_created_by;
ALTER TABLE blocks DROP FOREIGN KEY blocks_ibfk_updated_by;
ALTER TABLE block_invoices DROP FOREIGN KEY block_invoices_ibfk_created_by;
ALTER TABLE block_invoices DROP FOREIGN KEY block_invoices_ibfk_updated_by;
ALTER TABLE invoice_plans DROP FOREIGN KEY invoice_plans_ibfk_created_by;
ALTER TABLE invoice_plans DROP FOREIGN KEY invoice_plans_ibfk_updated_by;
ALTER TABLE entry_types DROP FOREIGN KEY entry_types_ibfk_created_by;
ALTER TABLE entry_types DROP FOREIGN KEY entry_types_ibfk_updated_by;
ALTER TABLE apartments DROP FOREIGN KEY apartments_ibfk_created_by;
ALTER TABLE apartments DROP FOREIGN KEY apartments_ibfk_updated_by;
ALTER TABLE lodger_apartments DROP FOREIGN KEY lodger_apartments_ibfk_created_by;
ALTER TABLE lodger_apartments DROP FOREIGN KEY lodger_apartments_ibfk_updated_by;
ALTER TABLE lodger_apartment_invoices DROP FOREIGN KEY lodger_apartment_invoices_ibfk_created_by;
ALTER TABLE lodger_apartment_invoices DROP FOREIGN KEY lodger_apartment_invoices_ibfk_updated_by;
ALTER TABLE users DROP FOREIGN KEY users_ibfk_created_by;
ALTER TABLE users DROP FOREIGN KEY users_ibfk_updated_by;
ALTER TABLE user_phones DROP FOREIGN KEY user_phones_ibfk_created_by;
ALTER TABLE user_phones DROP FOREIGN KEY user_phones_ibfk_updated_by;
ALTER TABLE user_types DROP FOREIGN KEY user_types_ibfk_created_by;
ALTER TABLE user_types DROP FOREIGN KEY user_types_ibfk_updated_by;
ALTER TABLE phone_types DROP FOREIGN KEY phone_types_ibfk_created_by;
ALTER TABLE phone_types DROP FOREIGN KEY phone_types_ibfk_updated_by;
ALTER TABLE user_invoices DROP FOREIGN KEY user_invoices_ibfk_created_by;
ALTER TABLE user_invoices DROP FOREIGN KEY user_invoices_ibfk_updated_by;
ALTER TABLE party_hall_schedules DROP FOREIGN KEY party_hall_schedules_ibfk_created_by;
ALTER TABLE party_hall_schedules DROP FOREIGN KEY party_hall_schedules_ibfk_updated_by;
ALTER TABLE announcements DROP FOREIGN KEY announcements_ibfk_created_by;
ALTER TABLE announcements DROP FOREIGN KEY announcements_ibfk_updated_by;