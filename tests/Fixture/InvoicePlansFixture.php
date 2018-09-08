<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InvoicePlansFixture
 *
 */
class InvoicePlansFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'entry_type_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'updated' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'created_by' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'updated_by' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'status' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'invoice_plans_ibfk_entry_type_id' => ['type' => 'index', 'columns' => ['entry_type_id'], 'length' => []],
            'invoice_plans_ibfk_created_by' => ['type' => 'index', 'columns' => ['created_by'], 'length' => []],
            'invoice_plans_ibfk_updated_by' => ['type' => 'index', 'columns' => ['updated_by'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'invoice_plans_ibfk_created_by' => ['type' => 'foreign', 'columns' => ['created_by'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'invoice_plans_ibfk_entry_type_id' => ['type' => 'foreign', 'columns' => ['entry_type_id'], 'references' => ['entry_types', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'invoice_plans_ibfk_updated_by' => ['type' => 'foreign', 'columns' => ['updated_by'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'name' => 'Lorem ipsum dolor sit amet',
                'entry_type_id' => 1,
                'created' => '2018-09-08 20:44:21',
                'updated' => '2018-09-08 20:44:21',
                'created_by' => 1,
                'updated_by' => 1,
                'status' => 1
            ],
        ];
}
