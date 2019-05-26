<?php
use Migrations\AbstractMigration;

class NewTableCron extends AbstractMigration
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
        $this->execute('CREATE TABLE cron (
            id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            nome varchar(11) NOT NULL DEFAULT "NOME"
        )');
    }
    
    public function down()
    {
        $this->execute('DROP TABLE cron;');
    }
}
