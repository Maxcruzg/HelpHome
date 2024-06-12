<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Service Entity
 *
 * @property int $id
 * @property string $name
 * @property string $descripccion
 * @property int $disponibilidad
 * @property int $duracion
 *
 * @property \App\Model\Entity\Calification[] $califications
 * @property \App\Model\Entity\ServiceHistory[] $service_history
 */
class Service extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'name' => true,
        'descripccion' => true,
        'disponibilidad' => true,
        'duracion' => true,
        'califications' => true,
        'service_history' => true,
    ];
}
