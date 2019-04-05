<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bag Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $entryData
 * @property \Cake\I18n\FrozenDate|null $outDate
 * @property int $location_id
 * @property int $user_id
 * @property string $lot
 * @property int $weight
 * @property string $producerName
 * @property string $producerFarm
 * @property int $city_user
 *
 * @property \App\Model\Entity\Location $location
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Bagtypecoffe[] $bagtypecoffe
 * @property \App\Model\Entity\Solicitation[] $solicitation
 */
class Bag extends Entity
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
        'entryData' => true,
        'outDate' => true,
        'location_id' => true,
        'user_id' => true,
        'lot' => true,
        'weight' => true,
        'producerName' => true,
        'producerFarm' => true,
        'city_user' => true,
        'location' => true,
        'user' => true,
        'bagtypecoffe' => true,
        'solicitation' => true
    ];
}
