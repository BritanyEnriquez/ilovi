<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * DatosFixture
 */
class DatosFixture extends TestFixture
{
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
                'gustos' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
