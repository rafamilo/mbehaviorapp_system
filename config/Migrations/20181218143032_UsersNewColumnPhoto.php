<?php
use Migrations\AbstractMigration;

class UsersNewColumnPhoto extends AbstractMigration
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
        $this->execute('ALTER TABLE users ADD COLUMN photo VARCHAR(255) NOT NULL DEFAULT "photo";');
    }

    public function down()
    {
        $this->execute('ALTER TABLE users DROP COLUMN photo;');
    }
}
