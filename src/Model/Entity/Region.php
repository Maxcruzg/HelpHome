<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Region Entity
 *
 * @property int $id
 * @property string $regiones
 * @property string $abreviatura
 * @property string $capital
 *
 * @property \App\Model\Entity\Profesional[] $profesionals
 * @property \App\Model\Entity\Provincia[] $provincias
 * @property \App\Model\Entity\User[] $users
 */
class Region extends Entity
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
        'regiones' => true,
        'abreviatura' => true,
        'capital' => true,
        'profesionals' => true,
        'provincias' => true,
        'users' => true,
    ];
}
