<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PuntajeFixture
 */
class PuntajeFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'puntaje';
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
                'usuario' => 'Lorem ipsum dolor sit amet',
                'apertExp' => 1,
                'responsabilidad' => 1,
                'extraversion' => 1,
                'amabilidad' => 1,
                'establEmocional' => 1,
            ],
        ];
        parent::init();
    }
}
