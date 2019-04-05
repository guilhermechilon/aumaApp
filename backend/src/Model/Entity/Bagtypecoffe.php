<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bagtypecoffe Entity
 *
 * @property int $typeCoffe_id
 * @property int $bag_id
 *
 * @property \App\Model\Entity\TypeCoffe $type_coffe
 * @property \App\Model\Entity\Bag $bag
 */
class Bagtypecoffe extends Entity
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
        'type_coffe' => true,
        'bag' => true
    ];
}
