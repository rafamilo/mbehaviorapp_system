<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LodgerApartmentInvoicesFixture
 *
 */
class LodgerApartmentInvoicesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'lodger_apartment_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'updated' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'created_by' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'updated_by' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'status' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'lodger_apartment_invoices_ibfk_lodger_apartment_id' => ['type' => 'index', 'columns' => ['lodger_apartment_id'], 'length' => []],
            'lodger_apartment_invoices_ibfk_created_by' => ['type' => 'index', 'columns' => ['created_by'], 'length' => []],
            'lodger_apartment_invoices_ibfk_updated_by' => ['type' => 'index', 'columns' => ['updated_by'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'lodger_apartment_invoices_ibfk_created_by' => ['type' => 'foreign', 'columns' => ['created_by'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'lodger_apartment_invoices_ibfk_lodger_apartment_id' => ['type' => 'foreign', 'columns' => ['lodger_apartment_id'], 'references' => ['lodger_apartments', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'lodger_apartment_invoices_ibfk_updated_by' => ['type' => 'foreign', 'columns' => ['updated_by'], 'references' => ['users', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'lodger_apartment_id' => 1,
                'created' => '2018-09-07 19:16:15',
                'updated' => '2018-09-07 19:16:15',
                'created_by' => 1,
                'updated_by' => 1,
                'status' => 1
            ],
        ];
}
