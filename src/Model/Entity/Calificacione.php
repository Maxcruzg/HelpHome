<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Calificacione Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $profesional_id
 * @property int $calificacion
 * @property string|null $comentario
 * @property \Cake\I18n\FrozenTime $fecha_creacion
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Profesional $profesional
 */
class Calificacione extends Entity
{

    protected $_accessible = [
        'user_id' => true,
        'profesional_id' => true,
        'calificacion' => true,
        'comentario' => true,
        'fecha_creacion' => true,
        'user' => true,
        'profesional' => true,
    ];
}
