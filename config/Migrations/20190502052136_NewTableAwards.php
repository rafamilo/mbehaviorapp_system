<?php
use Migrations\AbstractMigration;

class NewTableAwards extends AbstractMigration
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
        $this->execute('CREATE TABLE awards (
            id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            name VARCHAR(255) NOT NULL DEFAULT "Premio de R$50,00",
            sort_date date NOT NULL,
            description TEXT NOT NULL,
            created datetime NOT NULL,
            updated datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
            created_by int(11) NOT NULL,
            updated_by int(11) NOT NULL,
            status tinyint NOT NULL DEFAULT 1
        );');
    }

    public function down()
    {
        $this->execute('DROP TABLE awards;');
    }
}
