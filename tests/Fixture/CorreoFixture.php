<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CorreoFixture
 */
class CorreoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'correo';
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
                'emisor' => 'Lorem ipsum dolor sit amet',
                'receptor' => 'Lorem ipsum dolor sit amet',
                'descripcion' => 'Lorem ipsum dolor sit amet',
                'estado' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
