<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Data Entity
 *
 * @property int $id
 * @property int $Weight
 * @property int $InsulinLevel
 * @property int $GlucoseLevel
 * @property int $KetoneLevel
 * @property int $BloodPressure
 * @property int $ReadingTime
 */
class Data extends Entity
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
        'Weight' => true,
        'InsulinLevel' => true,
        'GlucoseLevel' => true,
        'KetoneLevel' => true,
        'BloodPressure' => true,
        'ReadingTime' => true,
    ];
}
