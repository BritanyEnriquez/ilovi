<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Puntaje Entity
 *
 * @property int $id
 * @property string $usuario
 * @property int $apertExp
 * @property int $responsabilidad
 * @property int $extraversion
 * @property int $amabilidad
 * @property int $establEmocional
 */
class Puntaje extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'usuario' => true,
        'apertExp' => true,
        'responsabilidad' => true,
        'extraversion' => true,
        'amabilidad' => true,
        'establEmocional' => true,
    ];
}
