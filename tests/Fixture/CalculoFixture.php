<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CalculoFixture
 */
class CalculoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'calculo';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nombre' => 'Lorem ipsum dolor sit amet',
                'apellido' => 'Lorem ipsum dolor sit amet',
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'genero' => 'Lorem ipsum dolor sit amet',
                'edad' => 1,
                'responsabilidad' => 1,
                'extraversion' => 1,
                'amabilidad' => 1,
                'estabemocional' => 1,
            ],
        ];
        parent::init();
    }
}
