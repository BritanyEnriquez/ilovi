<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PuntajeTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PuntajeTable Test Case
 */
class PuntajeTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PuntajeTable
     */
    protected $Puntaje;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Puntaje',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Puntaje') ? [] : ['className' => PuntajeTable::class];
        $this->Puntaje = $this->getTableLocator()->get('Puntaje', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Puntaje);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PuntajeTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
