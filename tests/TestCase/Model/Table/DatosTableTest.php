<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DatosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DatosTable Test Case
 */
class DatosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DatosTable
     */
    protected $Datos;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Datos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Datos') ? [] : ['className' => DatosTable::class];
        $this->Datos = $this->getTableLocator()->get('Datos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Datos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\DatosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
