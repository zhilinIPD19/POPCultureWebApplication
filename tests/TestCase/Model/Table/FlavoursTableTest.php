<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FlavoursTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FlavoursTable Test Case
 */
class FlavoursTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FlavoursTable
     */
    protected $Flavours;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Flavours',
        'app.Popsicles',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Flavours') ? [] : ['className' => FlavoursTable::class];
        $this->Flavours = $this->getTableLocator()->get('Flavours', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Flavours);

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
}
