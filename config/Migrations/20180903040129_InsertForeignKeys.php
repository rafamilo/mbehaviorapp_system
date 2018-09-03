<?php
use Migrations\AbstractMigration;

class InsertForeignKeys extends AbstractMigration
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
        $this->execute('ALTER TABLE apartments ADD CONSTRAINT apartments_ibfk_owner_id FOREIGN KEY (owner_id) REFERENCES users(id);
        ALTER TABLE lodger_apartments ADD CONSTRAINT lodger_apartments_ibfk_lodger_id FOREIGN KEY (lodger_id) REFERENCES users(id);
        ALTER TABLE lodger_apartments ADD CONSTRAINT lodger_apartments_ibfk_apartment_id FOREIGN KEY (apartment_id) REFERENCES apartments(id);
        ALTER TABLE lodger_apartment_invoices ADD CONSTRAINT lodger_apartment_invoices_ibfk_lodger_apartment_id FOREIGN KEY (lodger_apartment_id) REFERENCES lodger_apartments(id);
        ALTER TABLE users ADD CONSTRAINT users_ibfk_answerable FOREIGN KEY (answerable) REFERENCES users(id);
        ALTER TABLE users ADD CONSTRAINT users_ibfk_user_type_id FOREIGN KEY (user_type_id) REFERENCES user_types(id);
        ALTER TABLE user_phones ADD CONSTRAINT user_phones_ibfk_user_id FOREIGN KEY (user_id) REFERENCES users(id);
        ALTER TABLE user_phones ADD CONSTRAINT user_phones_ibfk_phone_type_id FOREIGN KEY (phone_type_id) REFERENCES phone_types(id);
        ALTER TABLE user_invoices ADD CONSTRAINT user_invoices_ibfk_invoice_plan_id FOREIGN KEY (invoice_plan_id) REFERENCES invoice_plans(id);
        ALTER TABLE user_invoices ADD CONSTRAINT user_invoices_ibfk_apartment_id FOREIGN KEY (apartment_id) REFERENCES apartments(id);
        ALTER TABLE party_hall_schedules ADD CONSTRAINT party_hall_schedules_ibfk_user_id FOREIGN KEY (user_id) REFERENCES users(id);
        ALTER TABLE announcements ADD CONSTRAINT announcements_ibfk_user_id FOREIGN KEY (user_id) REFERENCES users(id);
        ALTER TABLE invoice_plans ADD CONSTRAINT invoice_plans_ibfk_entry_type_id FOREIGN KEY (entry_type_id) REFERENCES entry_types(id);
        ALTER TABLE block_invoices ADD CONSTRAINT block_invoices_ibfk_block_id FOREIGN KEY (block_id) REFERENCES blocks(id);
        ALTER TABLE block_invoices ADD CONSTRAINT block_invoices_ibfk_invoice_plan_id FOREIGN KEY (invoice_plan_id) REFERENCES invoice_plans(id);
        ALTER TABLE blocks ADD CONSTRAINT blocks_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
        ALTER TABLE blocks ADD CONSTRAINT blocks_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
        ALTER TABLE block_invoices ADD CONSTRAINT block_invoices_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
        ALTER TABLE block_invoices ADD CONSTRAINT block_invoices_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
        ALTER TABLE invoice_plans ADD CONSTRAINT invoice_plans_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
        ALTER TABLE invoice_plans ADD CONSTRAINT invoice_plans_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
        ALTER TABLE entry_types ADD CONSTRAINT entry_types_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
        ALTER TABLE entry_types ADD CONSTRAINT entry_types_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
        ALTER TABLE apartments ADD CONSTRAINT apartments_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
        ALTER TABLE apartments ADD CONSTRAINT apartments_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
        ALTER TABLE lodger_apartments ADD CONSTRAINT lodger_apartments_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
        ALTER TABLE lodger_apartments ADD CONSTRAINT lodger_apartments_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
        ALTER TABLE lodger_apartment_invoices ADD CONSTRAINT lodger_apartment_invoices_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
        ALTER TABLE lodger_apartment_invoices ADD CONSTRAINT lodger_apartment_invoices_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
        ALTER TABLE users ADD CONSTRAINT users_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
        ALTER TABLE users ADD CONSTRAINT users_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
        ALTER TABLE user_phones ADD CONSTRAINT user_phones_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
        ALTER TABLE user_phones ADD CONSTRAINT user_phones_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
        ALTER TABLE user_types ADD CONSTRAINT user_types_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
        ALTER TABLE user_types ADD CONSTRAINT user_types_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
        ALTER TABLE phone_types ADD CONSTRAINT phone_types_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
        ALTER TABLE phone_types ADD CONSTRAINT phone_types_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
        ALTER TABLE user_invoices ADD CONSTRAINT user_invoices_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
        ALTER TABLE user_invoices ADD CONSTRAINT user_invoices_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
        ALTER TABLE party_hall_schedules ADD CONSTRAINT party_hall_schedules_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
        ALTER TABLE party_hall_schedules ADD CONSTRAINT party_hall_schedules_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
        ALTER TABLE announcements ADD CONSTRAINT announcements_ibfk_created_by FOREIGN KEY (created_by) REFERENCES users(id);
        ALTER TABLE announcements ADD CONSTRAINT announcements_ibfk_updated_by FOREIGN KEY (updated_by) REFERENCES users(id);
        ');
    }

    public function down()
    {
        $this->execute('ALTER TABLE apartments DROP FOREIGN KEY apartments_ibfk_owner_id;
        ALTER TABLE lodger_apartments DROP FOREIGN KEY lodger_apartments_ibfk_lodger_id;
        ALTER TABLE lodger_apartments DROP FOREIGN KEY lodger_apartments_ibfk_apartment_id;
        ALTER TABLE lodger_apartment_invoices DROP FOREIGN KEY lodger_apartment_invoices_ibfk_lodger_apartment_id;
        ALTER TABLE users DROP FOREIGN KEY users_ibfk_answerable;
        ALTER TABLE users DROP FOREIGN KEY users_ibfk_user_type_id;
        ALTER TABLE user_phones DROP FOREIGN KEY user_phones_ibfk_user_id;
        ALTER TABLE user_phones DROP FOREIGN KEY user_phones_ibfk_phone_type_id;
        ALTER TABLE user_invoices DROP FOREIGN KEY user_invoices_ibfk_invoice_plan_id;
        ALTER TABLE user_invoices DROP FOREIGN KEY user_invoices_ibfk_apartment_id;
        ALTER TABLE party_hall_schedules DROP FOREIGN KEY party_hall_schedules_ibfk_user_id;
        ALTER TABLE announcements DROP FOREIGN KEY announcements_ibfk_user_id;
        ALTER TABLE invoice_plans DROP FOREIGN KEY invoice_plans_ibfk_entry_type_id;
        ALTER TABLE block_invoices DROP FOREIGN KEY block_invoices_ibfk_block_id;
        ALTER TABLE block_invoices DROP FOREIGN KEY block_invoices_ibfk_invoice_plan_id;
        ALTER TABLE blocks DROP FOREIGN KEY blocks_ibfk_created_by;
        ALTER TABLE blocks DROP FOREIGN KEY blocks_ibfk_updated_by;
        ALTER TABLE block_invoices DROP FOREIGN KEY block_invoices_ibfk_created_by;
        ALTER TABLE block_invoices DROP FOREIGN KEY block_invoices_ibfk_updated_by;
        ALTER TABLE invoice_plans DROP FOREIGN KEY invoice_plans_ibfk_created_by;
        ALTER TABLE invoice_plans DROP FOREIGN KEY invoice_plans_ibfk_updated_by;
        ALTER TABLE entry_types DROP FOREIGN KEY entry_types_ibfk_created_by;
        ALTER TABLE entry_types DROP FOREIGN KEY entry_types_ibfk_updated_by;
        ALTER TABLE apartments DROP FOREIGN KEY apartments_ibfk_created_by;
        ALTER TABLE apartments DROP FOREIGN KEY apartments_ibfk_updated_by;
        ALTER TABLE lodger_apartments DROP FOREIGN KEY lodger_apartments_ibfk_created_by;
        ALTER TABLE lodger_apartments DROP FOREIGN KEY lodger_apartments_ibfk_updated_by;
        ALTER TABLE lodger_apartment_invoices DROP FOREIGN KEY lodger_apartment_invoices_ibfk_created_by;
        ALTER TABLE lodger_apartment_invoices DROP FOREIGN KEY lodger_apartment_invoices_ibfk_updated_by;
        ALTER TABLE users DROP FOREIGN KEY users_ibfk_created_by;
        ALTER TABLE users DROP FOREIGN KEY users_ibfk_updated_by;
        ALTER TABLE user_phones DROP FOREIGN KEY user_phones_ibfk_created_by;
        ALTER TABLE user_phones DROP FOREIGN KEY user_phones_ibfk_updated_by;
        ALTER TABLE user_types DROP FOREIGN KEY user_types_ibfk_created_by;
        ALTER TABLE user_types DROP FOREIGN KEY user_types_ibfk_updated_by;
        ALTER TABLE phone_types DROP FOREIGN KEY phone_types_ibfk_created_by;
        ALTER TABLE phone_types DROP FOREIGN KEY phone_types_ibfk_updated_by;
        ALTER TABLE user_invoices DROP FOREIGN KEY user_invoices_ibfk_created_by;
        ALTER TABLE user_invoices DROP FOREIGN KEY user_invoices_ibfk_updated_by;
        ALTER TABLE party_hall_schedules DROP FOREIGN KEY party_hall_schedules_ibfk_created_by;
        ALTER TABLE party_hall_schedules DROP FOREIGN KEY party_hall_schedules_ibfk_updated_by;
        ALTER TABLE announcements DROP FOREIGN KEY announcements_ibfk_created_by;
        ALTER TABLE announcements DROP FOREIGN KEY announcements_ibfk_updated_by;
        ');
    }
}
