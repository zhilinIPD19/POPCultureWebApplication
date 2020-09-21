<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PopsiclesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PopsiclesTable Test Case
 */
class PopsiclesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PopsiclesTable
     */
    protected $Popsicles;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Popsicles',
        'app.Flavours',
        'app.Categories',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Popsicles') ? [] : ['className' => PopsiclesTable::class];
        $this->Popsicles = $this->getTableLocator()->get('Popsicles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Popsicles);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
