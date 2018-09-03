<?php
use Migrations\AbstractMigration;

class MeuAppe extends AbstractMigration
{
    public function up()
    {
        // $this->table('announcements')
        //     ->addColumn('user_id', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('title', 'string', [
        //         'default' => null,
        //         'limit' => 30,
        //         'null' => false,
        //     ])
        //     ->addColumn('message', 'string', [
        //         'default' => null,
        //         'limit' => 30,
        //         'null' => false,
        //     ])
        //     ->addColumn('created', 'datetime', [
        //         'default' => null,
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated', 'datetime', [
        //         'default' => 'CURRENT_TIMESTAMP',
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('created_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('status', 'tinyinteger', [
        //         'default' => '1',
        //         'limit' => 4,
        //         'null' => false,
        //     ])
        //     ->addIndex(
        //         [
        //             'created_by',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'updated_by',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'user_id',
        //         ]
        //     )
        //     ->create();

        // $this->table('apartments')
        //     ->addColumn('name', 'string', [
        //         'default' => null,
        //         'limit' => 50,
        //         'null' => false,
        //     ])
        //     ->addColumn('owner_id', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('created', 'datetime', [
        //         'default' => null,
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated', 'datetime', [
        //         'default' => 'CURRENT_TIMESTAMP',
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('created_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('status', 'tinyinteger', [
        //         'default' => '1',
        //         'limit' => 4,
        //         'null' => false,
        //     ])
        //     ->addIndex(
        //         [
        //             'created_by',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'owner_id',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'updated_by',
        //         ]
        //     )
        //     ->create();

        // $this->table('block_invoices')
        //     ->addColumn('block_id', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('invoice_plan_id', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('value', 'decimal', [
        //         'default' => '0.00',
        //         'null' => false,
        //         'precision' => 11,
        //         'scale' => 2,
        //     ])
        //     ->addColumn('issue_date', 'datetime', [
        //         'default' => null,
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('expiration_date', 'datetime', [
        //         'default' => null,
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('reference_date', 'datetime', [
        //         'default' => null,
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('payment_status', 'tinyinteger', [
        //         'comment' => '0 dont paied | 1 for paied',
        //         'default' => '0',
        //         'limit' => 4,
        //         'null' => false,
        //     ])
        //     ->addColumn('created', 'datetime', [
        //         'default' => null,
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated', 'datetime', [
        //         'default' => 'CURRENT_TIMESTAMP',
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('created_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('status', 'tinyinteger', [
        //         'default' => '1',
        //         'limit' => 4,
        //         'null' => false,
        //     ])
        //     ->addIndex(
        //         [
        //             'block_id',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'created_by',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'invoice_plan_id',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'updated_by',
        //         ]
        //     )
        //     ->create();

        // $this->table('blocks')
        //     ->addColumn('name', 'string', [
        //         'default' => null,
        //         'limit' => 50,
        //         'null' => false,
        //     ])
        //     ->addColumn('created', 'datetime', [
        //         'default' => null,
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated', 'datetime', [
        //         'default' => 'CURRENT_TIMESTAMP',
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('created_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('status', 'tinyinteger', [
        //         'default' => '1',
        //         'limit' => 4,
        //         'null' => false,
        //     ])
        //     ->addIndex(
        //         [
        //             'created_by',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'updated_by',
        //         ]
        //     )
        //     ->create();

        // $this->table('entry_types')
        //     ->addColumn('name', 'string', [
        //         'default' => null,
        //         'limit' => 50,
        //         'null' => false,
        //     ])
        //     ->addColumn('operation', 'smallinteger', [
        //         'comment' => '-1 debit | 1 credit',
        //         'default' => '1',
        //         'limit' => 6,
        //         'null' => false,
        //     ])
        //     ->addColumn('created', 'datetime', [
        //         'default' => null,
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated', 'datetime', [
        //         'default' => 'CURRENT_TIMESTAMP',
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('created_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('status', 'tinyinteger', [
        //         'default' => '1',
        //         'limit' => 4,
        //         'null' => false,
        //     ])
        //     ->addIndex(
        //         [
        //             'created_by',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'updated_by',
        //         ]
        //     )
        //     ->create();

        // $this->table('invoice_plans')
        //     ->addColumn('name', 'string', [
        //         'default' => null,
        //         'limit' => 50,
        //         'null' => false,
        //     ])
        //     ->addColumn('entry_type_id', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('created', 'datetime', [
        //         'default' => null,
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated', 'datetime', [
        //         'default' => 'CURRENT_TIMESTAMP',
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('created_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('status', 'tinyinteger', [
        //         'default' => '1',
        //         'limit' => 4,
        //         'null' => false,
        //     ])
        //     ->addIndex(
        //         [
        //             'created_by',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'entry_type_id',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'updated_by',
        //         ]
        //     )
        //     ->create();

        // $this->table('lodger_apartment_invoices')
        //     ->addColumn('lodger_apartment_id', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('created', 'datetime', [
        //         'default' => null,
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated', 'datetime', [
        //         'default' => 'CURRENT_TIMESTAMP',
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('created_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('status', 'tinyinteger', [
        //         'default' => '1',
        //         'limit' => 4,
        //         'null' => false,
        //     ])
        //     ->addIndex(
        //         [
        //             'created_by',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'lodger_apartment_id',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'updated_by',
        //         ]
        //     )
        //     ->create();

        // $this->table('lodger_apartments')
        //     ->addColumn('lodger_id', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('apartment_id', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('init_date', 'datetime', [
        //         'default' => null,
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('end_date', 'datetime', [
        //         'default' => null,
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('created', 'datetime', [
        //         'default' => null,
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated', 'datetime', [
        //         'default' => 'CURRENT_TIMESTAMP',
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('created_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('status', 'tinyinteger', [
        //         'default' => '1',
        //         'limit' => 4,
        //         'null' => false,
        //     ])
        //     ->addIndex(
        //         [
        //             'apartment_id',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'created_by',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'lodger_id',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'updated_by',
        //         ]
        //     )
        //     ->create();

        // $this->table('party_hall_schedules')
        //     ->addColumn('user_id', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('init_date', 'datetime', [
        //         'default' => null,
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('end_date', 'datetime', [
        //         'default' => null,
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('cost', 'decimal', [
        //         'default' => '0.00',
        //         'null' => false,
        //         'precision' => 11,
        //         'scale' => 2,
        //     ])
        //     ->addColumn('created', 'datetime', [
        //         'default' => null,
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated', 'datetime', [
        //         'default' => 'CURRENT_TIMESTAMP',
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('created_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('status', 'tinyinteger', [
        //         'default' => '1',
        //         'limit' => 4,
        //         'null' => false,
        //     ])
        //     ->addIndex(
        //         [
        //             'created_by',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'updated_by',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'user_id',
        //         ]
        //     )
        //     ->create();

        // $this->table('phone_types')
        //     ->addColumn('name', 'string', [
        //         'default' => null,
        //         'limit' => 50,
        //         'null' => false,
        //     ])
        //     ->addColumn('created', 'datetime', [
        //         'default' => null,
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated', 'datetime', [
        //         'default' => 'CURRENT_TIMESTAMP',
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('created_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('status', 'tinyinteger', [
        //         'default' => '1',
        //         'limit' => 4,
        //         'null' => false,
        //     ])
        //     ->addIndex(
        //         [
        //             'created_by',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'updated_by',
        //         ]
        //     )
        //     ->create();

        // $this->table('user_invoices')
        //     ->addColumn('user_id', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('apartment_id', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('invoice_plan_id', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('value', 'decimal', [
        //         'default' => '0.00',
        //         'null' => false,
        //         'precision' => 11,
        //         'scale' => 2,
        //     ])
        //     ->addColumn('issue_date', 'datetime', [
        //         'default' => null,
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('expiration_date', 'datetime', [
        //         'default' => null,
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('reference_date', 'datetime', [
        //         'default' => null,
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('payment_status', 'tinyinteger', [
        //         'comment' => '0 dont paied | 1 for paied',
        //         'default' => '0',
        //         'limit' => 4,
        //         'null' => false,
        //     ])
        //     ->addColumn('created', 'datetime', [
        //         'default' => null,
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated', 'datetime', [
        //         'default' => 'CURRENT_TIMESTAMP',
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('created_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('status', 'tinyinteger', [
        //         'default' => '1',
        //         'limit' => 4,
        //         'null' => false,
        //     ])
        //     ->addIndex(
        //         [
        //             'apartment_id',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'created_by',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'invoice_plan_id',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'updated_by',
        //         ]
        //     )
        //     ->create();

        // $this->table('user_phones')
        //     ->addColumn('user_id', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('phone', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('phone_type_id', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('created', 'datetime', [
        //         'default' => null,
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated', 'datetime', [
        //         'default' => 'CURRENT_TIMESTAMP',
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('created_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('status', 'tinyinteger', [
        //         'default' => '1',
        //         'limit' => 4,
        //         'null' => false,
        //     ])
        //     ->addIndex(
        //         [
        //             'created_by',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'phone_type_id',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'updated_by',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'user_id',
        //         ]
        //     )
        //     ->create();

        // $this->table('user_types')
        //     ->addColumn('name', 'string', [
        //         'default' => null,
        //         'limit' => 50,
        //         'null' => false,
        //     ])
        //     ->addColumn('created', 'datetime', [
        //         'default' => null,
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated', 'datetime', [
        //         'default' => 'CURRENT_TIMESTAMP',
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('created_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('status', 'tinyinteger', [
        //         'default' => '1',
        //         'limit' => 4,
        //         'null' => false,
        //     ])
        //     ->addIndex(
        //         [
        //             'created_by',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'updated_by',
        //         ]
        //     )
        //     ->create();

        // $this->table('users')
        //     ->addColumn('name', 'string', [
        //         'default' => null,
        //         'limit' => 50,
        //         'null' => false,
        //     ])
        //     ->addColumn('user_type_id', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('birthdate', 'datetime', [
        //         'default' => null,
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('cpf', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('rg', 'integer', [
        //         'default' => null,
        //         'limit' => 9,
        //         'null' => false,
        //     ])
        //     ->addColumn('email', 'string', [
        //         'default' => null,
        //         'limit' => 50,
        //         'null' => false,
        //     ])
        //     ->addColumn('answerable', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => true,
        //     ])
        //     ->addColumn('created', 'datetime', [
        //         'default' => null,
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated', 'datetime', [
        //         'default' => 'CURRENT_TIMESTAMP',
        //         'limit' => null,
        //         'null' => false,
        //     ])
        //     ->addColumn('created_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('updated_by', 'integer', [
        //         'default' => null,
        //         'limit' => 11,
        //         'null' => false,
        //     ])
        //     ->addColumn('status', 'tinyinteger', [
        //         'default' => '1',
        //         'limit' => 4,
        //         'null' => false,
        //     ])
        //     ->addIndex(
        //         [
        //             'email',
        //         ],
        //         ['unique' => true]
        //     )
        //     ->addIndex(
        //         [
        //             'answerable',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'created_by',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'updated_by',
        //         ]
        //     )
        //     ->addIndex(
        //         [
        //             'user_type_id',
        //         ]
        //     )
        //     ->create();

        // $this->table('announcements')
        //     ->addForeignKey(
        //         'created_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'updated_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'user_id',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->update();

        // $this->table('apartments')
        //     ->addForeignKey(
        //         'created_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'owner_id',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'updated_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->update();

        // $this->table('block_invoices')
        //     ->addForeignKey(
        //         'block_id',
        //         'blocks',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'created_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'invoice_plan_id',
        //         'invoice_plans',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'updated_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->update();

        // $this->table('blocks')
        //     ->addForeignKey(
        //         'created_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'updated_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->update();

        // $this->table('entry_types')
        //     ->addForeignKey(
        //         'created_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'updated_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->update();

        // $this->table('invoice_plans')
        //     ->addForeignKey(
        //         'created_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'entry_type_id',
        //         'entry_types',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'updated_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->update();

        // $this->table('lodger_apartment_invoices')
        //     ->addForeignKey(
        //         'created_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'lodger_apartment_id',
        //         'lodger_apartments',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'updated_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->update();

        // $this->table('lodger_apartments')
        //     ->addForeignKey(
        //         'apartment_id',
        //         'apartments',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'created_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'lodger_id',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'updated_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->update();

        // $this->table('party_hall_schedules')
        //     ->addForeignKey(
        //         'created_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'updated_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'user_id',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->update();

        // $this->table('phone_types')
        //     ->addForeignKey(
        //         'created_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'updated_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->update();

        // $this->table('user_invoices')
        //     ->addForeignKey(
        //         'apartment_id',
        //         'apartments',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'created_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'invoice_plan_id',
        //         'invoice_plans',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'updated_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->update();

        // $this->table('user_phones')
        //     ->addForeignKey(
        //         'created_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'phone_type_id',
        //         'phone_types',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'updated_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'user_id',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->update();

        // $this->table('user_types')
        //     ->addForeignKey(
        //         'created_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'updated_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->update();

        // $this->table('users')
        //     ->addForeignKey(
        //         'answerable',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'created_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'updated_by',
        //         'users',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->addForeignKey(
        //         'user_type_id',
        //         'user_types',
        //         'id',
        //         [
        //             'update' => 'RESTRICT',
        //             'delete' => 'RESTRICT'
        //         ]
        //     )
        //     ->update();
    }

    public function down()
    {
        // $this->table('announcements')
        //     ->dropForeignKey(
        //         'created_by'
        //     )
        //     ->dropForeignKey(
        //         'updated_by'
        //     )
        //     ->dropForeignKey(
        //         'user_id'
        //     )->save();

        // $this->table('apartments')
        //     ->dropForeignKey(
        //         'created_by'
        //     )
        //     ->dropForeignKey(
        //         'owner_id'
        //     )
        //     ->dropForeignKey(
        //         'updated_by'
        //     )->save();

        // $this->table('block_invoices')
        //     ->dropForeignKey(
        //         'block_id'
        //     )
        //     ->dropForeignKey(
        //         'created_by'
        //     )
        //     ->dropForeignKey(
        //         'invoice_plan_id'
        //     )
        //     ->dropForeignKey(
        //         'updated_by'
        //     )->save();

        // $this->table('blocks')
        //     ->dropForeignKey(
        //         'created_by'
        //     )
        //     ->dropForeignKey(
        //         'updated_by'
        //     )->save();

        // $this->table('entry_types')
        //     ->dropForeignKey(
        //         'created_by'
        //     )
        //     ->dropForeignKey(
        //         'updated_by'
        //     )->save();

        // $this->table('invoice_plans')
        //     ->dropForeignKey(
        //         'created_by'
        //     )
        //     ->dropForeignKey(
        //         'entry_type_id'
        //     )
        //     ->dropForeignKey(
        //         'updated_by'
        //     )->save();

        // $this->table('lodger_apartment_invoices')
        //     ->dropForeignKey(
        //         'created_by'
        //     )
        //     ->dropForeignKey(
        //         'lodger_apartment_id'
        //     )
        //     ->dropForeignKey(
        //         'updated_by'
        //     )->save();

        // $this->table('lodger_apartments')
        //     ->dropForeignKey(
        //         'apartment_id'
        //     )
        //     ->dropForeignKey(
        //         'created_by'
        //     )
        //     ->dropForeignKey(
        //         'lodger_id'
        //     )
        //     ->dropForeignKey(
        //         'updated_by'
        //     )->save();

        // $this->table('party_hall_schedules')
        //     ->dropForeignKey(
        //         'created_by'
        //     )
        //     ->dropForeignKey(
        //         'updated_by'
        //     )
        //     ->dropForeignKey(
        //         'user_id'
        //     )->save();

        // $this->table('phone_types')
        //     ->dropForeignKey(
        //         'created_by'
        //     )
        //     ->dropForeignKey(
        //         'updated_by'
        //     )->save();

        // $this->table('user_invoices')
        //     ->dropForeignKey(
        //         'apartment_id'
        //     )
        //     ->dropForeignKey(
        //         'created_by'
        //     )
        //     ->dropForeignKey(
        //         'invoice_plan_id'
        //     )
        //     ->dropForeignKey(
        //         'updated_by'
        //     )->save();

        // $this->table('user_phones')
        //     ->dropForeignKey(
        //         'created_by'
        //     )
        //     ->dropForeignKey(
        //         'phone_type_id'
        //     )
        //     ->dropForeignKey(
        //         'updated_by'
        //     )
        //     ->dropForeignKey(
        //         'user_id'
        //     )->save();

        // $this->table('user_types')
        //     ->dropForeignKey(
        //         'created_by'
        //     )
        //     ->dropForeignKey(
        //         'updated_by'
        //     )->save();

        // $this->table('users')
        //     ->dropForeignKey(
        //         'answerable'
        //     )
        //     ->dropForeignKey(
        //         'created_by'
        //     )
        //     ->dropForeignKey(
        //         'updated_by'
        //     )
        //     ->dropForeignKey(
        //         'user_type_id'
        //     )->save();

        // $this->table('announcements')->drop()->save();
        // $this->table('apartments')->drop()->save();
        // $this->table('block_invoices')->drop()->save();
        // $this->table('blocks')->drop()->save();
        // $this->table('entry_types')->drop()->save();
        // $this->table('invoice_plans')->drop()->save();
        // $this->table('lodger_apartment_invoices')->drop()->save();
        // $this->table('lodger_apartments')->drop()->save();
        // $this->table('party_hall_schedules')->drop()->save();
        // $this->table('phone_types')->drop()->save();
        // $this->table('user_invoices')->drop()->save();
        // $this->table('user_phones')->drop()->save();
        // $this->table('user_types')->drop()->save();
        // $this->table('users')->drop()->save();
    }
}
