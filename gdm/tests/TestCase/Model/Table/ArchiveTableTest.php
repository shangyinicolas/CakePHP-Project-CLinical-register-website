<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArchiveTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArchiveTable Test Case
 */
class ArchiveTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ArchiveTable
     */
    protected $Archive;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Archive',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Archive') ? [] : ['className' => ArchiveTable::class];
        $this->Archive = $this->getTableLocator()->get('Archive', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Archive);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ArchiveTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
