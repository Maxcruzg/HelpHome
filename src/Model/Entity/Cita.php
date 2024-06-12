<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cita Entity
 *
 * @property int $id
 * @property string $client_phone
 * @property string $client_email
 * @property string $client_direction
 * @property string $description
 * @property \Cake\I18n\FrozenDate|null $fecha_cita
 * @property int $profesional_id
 * @property int $user_id
 * @property int $estado
 * @property string $comentarios
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Profesional $profesional
 */
class Cita extends Entity
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
        'client_phone' => true,
        'client_email' => true,
        'client_direction' => true,
        'description' => true,
        'fecha_cita' => true,
        'profesional_id' => true,
        'user_id' => true,
        'estado' => true,
        'comentarios' => true,
        'user' => true,
        'profesional' => true,
    ];
}
