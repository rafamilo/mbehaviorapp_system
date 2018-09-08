<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BlockInvoicesFixture
 *
 */
class BlockInvoicesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'block_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'invoice_plan_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'value' => ['type' => 'decimal', 'length' => 11, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => '0.00', 'comment' => ''],
        'issue_date' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'expiration_date' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'reference_date' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'payment_status' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => '0 dont paied | 1 for paied', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'updated' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'created_by' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'updated_by' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'status' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'block_invoices_ibfk_block_id' => ['type' => 'index', 'columns' => ['block_id'], 'length' => []],
            'block_invoices_ibfk_invoice_plan_id' => ['type' => 'index', 'columns' => ['invoice_plan_id'], 'length' => []],
            'block_invoices_ibfk_created_by' => ['type' => 'index', 'columns' => ['created_by'], 'length' => []],
            'block_invoices_ibfk_updated_by' => ['type' => 'index', 'columns' => ['updated_by'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'block_invoices_ibfk_block_id' => ['type' => 'foreign', 'columns' => ['block_id'], 'references' => ['blocks', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'block_invoices_ibfk_created_by' => ['type' => 'foreign', 'columns' => ['created_by'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'block_invoices_ibfk_invoice_plan_id' => ['type' => 'foreign', 'columns' => ['invoice_plan_id'], 'references' => ['invoice_plans', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'block_invoices_ibfk_updated_by' => ['type' => 'foreign', 'columns' => ['updated_by'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
            [
                'id' => 1,
                'block_id' => 1,
                'invoice_plan_id' => 1,
                'value' => 1.5,
                'issue_date' => '2018-09-07 19:15:02',
                'expiration_date' => '2018-09-07 19:15:02',
                'reference_date' => '2018-09-07 19:15:02',
                'payment_status' => 1,
                'created' => '2018-09-07 19:15:02',
                'updated' => '2018-09-07 19:15:02',
                'created_by' => 1,
                'updated_by' => 1,
                'status' => 1
            ],
        ];
}
