<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Popsicle Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $ingredient
 * @property string $price
 * @property string $image
 * @property int $calorie
 * @property bool $latest
 * @property int $flavour_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Flavour $flavour
 * @property \App\Model\Entity\Category[] $categories
 */
class Popsicle extends Entity
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
        'name' => true,
        'description' => true,
        'ingredient' => true,
        'price' => true,
        'image' => true,
        'calorie' => true,
        'latest' => true,
        'flavour_id' => true,
        'created' => true,
        'modified' => true,
        'flavour' => true,
        'categories' => true,
    ];
}
