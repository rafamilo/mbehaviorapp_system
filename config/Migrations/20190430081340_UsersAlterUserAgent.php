<?php
use Migrations\AbstractMigration;

class UsersAlterUserAgent extends AbstractMigration
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
        $this->execute('ALTER TABLE users MODIFY userAgent TEXT');
    }

    public function down()
    {
        $this->execute('ALTER TABLE users MODIFY userAgent VARCHAR(150)');
    }
}
