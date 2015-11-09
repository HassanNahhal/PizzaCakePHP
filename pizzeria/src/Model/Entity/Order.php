<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity.
 *
 * @property int $orderID
 * @property string $orderSize
 * @property string $orderToppings
 * @property \Cake\I18n\Time $orderDate
 * @property string $orderCondition
 * @property int $userID
 */
class Order extends Entity
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
        '*' => true,
        'orderID' => false,
    ];
}
