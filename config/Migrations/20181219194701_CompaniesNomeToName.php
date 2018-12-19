<?php
use Migrations\AbstractMigration;

class CompaniesNomeToName extends AbstractMigration
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
        $this->execute('ALTER TABLE companies CHANGE COLUMN nome name VARCHAR(255) NOT NULL DEFAULT "Nome Empresa";');
    }

    public function down()
    {
        $this->execute('ALTER TABLE companies CHANGE COLUMN name nome VARCHAR(255) NOT NULL DEFAULT "Nome Empresa";');
    }
}
