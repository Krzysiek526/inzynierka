<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Grades Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\CoursesTable|\Cake\ORM\Association\BelongsTo $Courses
 * @property \App\Model\Table\SubjectsTable|\Cake\ORM\Association\BelongsTo $Subjects
 * @property \App\Model\Table\TestsTable|\Cake\ORM\Association\BelongsTo $Tests
 *
 * @method \App\Model\Entity\Grade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Grade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Grade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Grade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Grade|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Grade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Grade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Grade findOrCreate($search, callable $callback = null, $options = [])
 */
class GradesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('grades');
        $this->setDisplayField('grade'); //tu zmienialem z id na grade jakby cos siadlo czasem
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Courses', [
            'foreignKey' => 'course_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Subjects', [
            'foreignKey' => 'subject_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tests', [
            'foreignKey' => 'test_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('grade')
            ->maxLength('grade', 50)
            ->requirePresence('grade', 'create')
            ->notEmpty('grade');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['course_id'], 'Courses'));
        $rules->add($rules->existsIn(['subject_id'], 'Subjects'));
        $rules->add($rules->existsIn(['test_id'], 'Tests'));

        return $rules;
    }
}
