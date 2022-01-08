<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CorreoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CorreoTable Test Case
 */
class CorreoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CorreoTable
     */
    protected $Correo;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Correo',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Correo') ? [] : ['className' => CorreoTable::class];
        $this->Correo = $this->getTableLocator()->get('Correo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Correo);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CorreoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
