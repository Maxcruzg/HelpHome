<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $password
 * @property string $email
 * @property int $phone
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int $region_id
 * @property int $comuna_id
 * @property int $role_id
 * @property int $provincia_id
 * @property bool $is_profesional
 *
 * @property \App\Model\Entity\Region $region
 * @property \App\Model\Entity\Comuna $comuna
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Provincia $provincia
 * @property \App\Model\Entity\Cita[] $citas
 * @property \App\Model\Entity\Profesional[] $profesional
 * @property \App\Model\Entity\Token[] $token
 */
class User extends Entity
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
        'surname' => true,
        'password' => true,
        'email' => true,
        'phone' => true,
        'created' => true,
        'region_id' => true,
        'comuna_id' => true,
        'role_id' => true,
        'provincia_id' => true,
        'is_profesional' => true,
        'region' => true,
        'comuna' => true,
        'role' => true,
        'provincia' => true,
        'califications' => true,
        'citas' => true,
        'profesional' => true,
        'service_history' => true,
        'token' => true,
    ];
    protected function _setPassword(string $password): ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
    protected $_hidden = [
        'password',
    ];
}
