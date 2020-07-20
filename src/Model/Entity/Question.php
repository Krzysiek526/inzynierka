<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Question Entity
 *
 * @property int $id
 * @property string $text
 *
 * @property \App\Model\Entity\Answer[] $answers
 * @property \App\Model\Entity\UserAnswer[] $user_answers
 * @property \App\Model\Entity\Test[] $tests
 */
class Question extends Entity
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
        'text' => true,
        'answers' => true,
        'user_answers' => true,
        'tests' => true
    ];
}
