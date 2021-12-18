<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AssignedFixture
 */
class AssignedFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'assigned';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'clinicians_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'patients_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        '_indexes' => [
            'fk_clinician' => ['type' => 'index', 'columns' => ['clinicians_id'], 'length' => []],
            'fk_patient' => ['type' => 'index', 'columns' => ['patients_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'clinicians_id' => 1,
                'patients_id' => 1,
                'id' => 1,
            ],
        ];
        parent::init();
    }
}
