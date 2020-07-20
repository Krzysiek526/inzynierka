<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Grade Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $course_id
 * @property int $subject_id
 * @property int $test_id
 * @property string $grade
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Course $course
 * @property \App\Model\Entity\Subject $subject
 * @property \App\Model\Entity\Test $test
 */
class Grade extends Entity
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
        'user_id' => true,
        'course_id' => true,
        'subject_id' => true,
        'test_id' => true,
        'grade' => true,
        'user' => true,
        'course' => true,
        'subject' => true,
        'test' => true
    ];
}
