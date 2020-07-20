<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserAnswer Entity
 *
 * @property int $id
 * @property int $test_id
 * @property int $question_id
 * @property int $user_id
 * @property bool $is_selected
 *
 * @property \App\Model\Entity\Test $test
 * @property \App\Model\Entity\Question $question
 * @property \App\Model\Entity\User $user
 */
class UserAnswer extends Entity
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
        'test_id' => true,
        'question_id' => true,
        'user_id' => true,
        'is_selected' => true,
        'test' => true,
        'question' => true,
        'user' => true
    ];
}
