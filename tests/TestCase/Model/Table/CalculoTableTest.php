<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CalculoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CalculoTable Test Case
 */
class CalculoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CalculoTable
     */
    protected $Calculo;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Calculo',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Calculo') ? [] : ['className' => CalculoTable::class];
        $this->Calculo = $this->getTableLocator()->get('Calculo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Calculo);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CalculoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
