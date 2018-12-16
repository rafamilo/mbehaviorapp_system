<?php
use Migrations\AbstractMigration;

class NewTableCondominium extends AbstractMigration
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
        $this->execute("CREATE TABLE condominiums (
            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL
        );");

        $this->execute("INSERT INTO condominiums (id, name) VALUES (1, 'Residencial Califórnia');");

        $this->execute("ALTER TABLE users ADD COLUMN condominium_id INT(11) NOT NULL DEFAULT 1;");
        $this->execute("ALTER TABLE users ADD CONSTRAINT users_ibfk_condominium_id FOREIGN KEY (condominium_id) REFERENCES condominiums(id);");
    }

    public function down()
    {
        // $this->execute("ALTER TABLE users DROP FOREIGN KEY users_ibfk_condominium_id;");
        $this->execute("ALTER TABLE users DROP COLUMN condominium_id;");
        $this->execute("DROP TABLE condominiums;");
    }
}
