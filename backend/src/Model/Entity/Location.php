<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Location Entity
 *
 * @property int $id
 * @property int $street_id
 * @property int $avenue_id
 * @property int $floor_id
 * @property int $position_id
 *
 * @property \App\Model\Entity\Street $street
 * @property \App\Model\Entity\Avenue $avenue
 * @property \App\Model\Entity\Floor $floor
 * @property \App\Model\Entity\Position $position
 * @property \App\Model\Entity\Bag[] $bag
 */
class Location extends Entity
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
        'street_id' => true,
        'avenue_id' => true,
        'floor_id' => true,
        'position_id' => true,
        'street' => true,
        'avenue' => true,
        'floor' => true,
        'position' => true,
        'bag' => true
    ];
}
