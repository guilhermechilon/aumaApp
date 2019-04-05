<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Solicitation Entity
 *
 * @property int $id
 * @property int $status_id
 * @property int $forklift_id
 * @property int $bag_id
 * @property \Cake\I18n\FrozenTime $dateTime
 *
 * @property \App\Model\Entity\Status $status
 * @property \App\Model\Entity\Forklift $forklift
 * @property \App\Model\Entity\Bag $bag
 */
class Solicitation extends Entity
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
        'status_id' => true,
        'forklift_id' => true,
        'bag_id' => true,
        'dateTime' => true,
        'status' => true,
        'forklift' => true,
        'bag' => true
    ];
}
