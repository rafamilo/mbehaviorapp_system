<?php
use Migrations\AbstractMigration;

class AwardsAddModalVisible extends AbstractMigration
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
        $this->execute('ALTER TABLE awards ADD COLUMN modalVisible tinyint NOT NULL DEFAULT 0;');
    }

    public function down()
    {
        $this->execute('ALTER TABLE awards DROP COLUMN modalVisible;');
    }
}
