<?php
use Migrations\AbstractMigration;

class UsersNewColumnPassword extends AbstractMigration
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
        $this->execute("ALTER TABLE users ADD COLUMN password VARCHAR(255) NOT NULL AFTER name;");
        $this->execute("ALTER TABLE users MODIFY cpf VARCHAR(11) NOT NULL;");
        $this->execute("ALTER TABLE users MODIFY rg VARCHAR(9) NOT NULL;");
        $this->execute("ALTER TABLE users ADD COLUMN username VARCHAR(50) NOT NULL;");
        $this->execute("UPDATE users SET username = email; WHERE id = id");
    }

    public function down()
    {
        $this->execute("ALTER TABLE users DROP COLUMN password");
        $this->execute("ALTER TABLE users MODIFY cpf VARCHAR(11) NOT NULL;");
        $this->execute("ALTER TABLE users MODIFY rg VARCHAR(9) NOT NULL;");
        $this->execute("ALTER TABLE users DROP COLUMN username;");
    }
}
