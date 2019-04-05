<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LocationFixture
 */
class LocationFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'location';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'smallinteger', 'length' => 6, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'street_id' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'avenue_id' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'floor_id' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'position_id' => ['type' => 'smallinteger', 'length' => 6, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'avenue_location_fk' => ['type' => 'index', 'columns' => ['avenue_id'], 'length' => []],
            'street_location_fk' => ['type' => 'index', 'columns' => ['street_id'], 'length' => []],
            'position_location_fk' => ['type' => 'index', 'columns' => ['position_id'], 'length' => []],
            'floor_location_fk' => ['type' => 'index', 'columns' => ['floor_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'MyISAM',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'street_id' => 1,
                'avenue_id' => 1,
                'floor_id' => 1,
                'position_id' => 1
            ],
        ];
        parent::init();
    }
}
