<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * HistorialCita Entity
 *
 * @property int $id
 * @property int $cita_id
 * @property int $user_id
 * @property int $profesional_id
 * @property string $estado_nuevo
 * @property string|null $comentario
 * @property \Cake\I18n\FrozenTime $fecha
 *
 * @property \App\Model\Entity\Cita $cita
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Profesional $profesional
 */
class HistorialCita extends Entity
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
        'cita_id' => true,
        'user_id' => true,
        'profesional_id' => true,
        'estado_nuevo' => true,
        'comentario' => true,
        'fecha' => true,
        'cita' => true,
        'user' => true,
        'profesional' => true,
    ];
}
