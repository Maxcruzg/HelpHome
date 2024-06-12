<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profesional Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $path
 * @property int $value
 * @property string $experiencia
 * @property int $especialidad_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Especialidad $especialidad
 * @property \App\Model\Entity\Calificacione[] $calificaciones
 * @property \App\Model\Entity\Cita[] $citas
 * @property \App\Model\Entity\HistorialCita[] $historial_citas
 */
class Profesional extends Entity
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
      '*' => true
    ];
}
