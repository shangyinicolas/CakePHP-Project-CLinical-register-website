<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Notification Entity
 *
 * @property int $id
 * @property int $clinician_id
 * @property int $patients_id
 * @property string $message
 * @property \Cake\I18n\FrozenTime $send_time
 *
 * @property \App\Model\Entity\Clinician $clinician
 * @property \App\Model\Entity\Patient $patient
 */
class Notification extends Entity
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
        'clinician_id' => true,
        'patients_id' => true,
        'message' => true,
        'send_time' => true,
        'clinician' => true,
        'patient' => true,
    ];
}
