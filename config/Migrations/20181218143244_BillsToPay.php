<?php
use Migrations\AbstractMigration;

class BillsToPay extends AbstractMigration
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
        $this->execute('
        CREATE TABLE IF NOT EXISTS bills_to_pay (
            id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            user_id INT(11) NOT NULL, 
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
        );');
        
        $this->execute('ALTER TABLE bills_to_pay ADD CONSTRAINT bills_to_pay_invoice_plan_id FOREIGN KEY (invoice_plan_id) REFERENCES invoice_plans(id);');
        $this->execute('ALTER TABLE bills_to_pay ADD CONSTRAINT bills_to_pay_created_by FOREIGN KEY (created_by) REFERENCES users(id);');
        $this->execute('ALTER TABLE bills_to_pay ADD CONSTRAINT bills_to_pay_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);');
    }

    public function down()
    {
        $this->execute('ALTER TABLE bills_to_pay DROP FOREIGN KEY bills_to_pay_invoice_plan_id;');
        $this->execute('ALTER TABLE bills_to_pay DROP FOREIGN KEY bills_to_pay_created_by;');
        $this->execute('ALTER TABLE bills_to_pay DROP FOREIGN KEY bills_to_pay_updated_by;');
        $this->execute('DROP TABLE bills_to_pay;');
    }
}
