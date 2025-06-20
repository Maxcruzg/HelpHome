<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Provincia Entity
 *
 * @property int $id
 * @property string $provincia
 * @property int $region_id
 *
 * @property \App\Model\Entity\Region $region
 * @property \App\Model\Entity\Comuna[] $comunas
 */
class Provincia extends Entity
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
        'provincia' => true,
        'region_id' => true,
        'region' => true,
        'comunas' => true,
    ];
}
