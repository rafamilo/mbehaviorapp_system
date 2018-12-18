<?php
use Migrations\AbstractMigration;

class NewTableCompany extends AbstractMigration
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
        $this->execute('CREATE TABLE companies (
            id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            nome VARCHAR(255) NOT NULL DEFAULT "Nome Empresa",
            cnpj VARCHAR(14) NOT NULL DEFAULT "00000000000000",
            place VARCHAR(100) DEFAULT "logradouro",
            number INT(11) UNSIGNED DEFAULT "000",
            district VARCHAR(255) NOT NULL DEFAULT "bairro",
            city VARCHAR(100) NOT NULL DEFAULT "cidade",
            state VARCHAR(100) NOT NULL DEFAULT "estado",
            country VARCHAR(255) NOT NULL DEFAULT "país",
            created datetime NOT NULL,
            updated datetime NOT NULL DEFAULT NOW(),
            status tinyint NOT NULL DEFAULT 1
        );');

        $this->execute('INSERT INTO companies (created) VALUES (NOW())');
        $this->execute('ALTER TABLE users ADD COLUMN company_id INT(11) NOT NULL DEFAULT 1;');
        $this->execute('ALTER TABLE users ADD CONSTRAINT users_company_id FOREIGN KEY (company_id) REFERENCES companies(id);');
    }

    public function down()
    {
        $this->execute('ALTER TABLE users DROP FOREIGN KEY users_company_id;');
        $this->execute('ALTER TABLE users DROP COLUMN company_id;');
        $this->execute('DROP TABLE companies;');
    }
}
