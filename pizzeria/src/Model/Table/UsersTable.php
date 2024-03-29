<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 */
class UsersTable extends Table
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

        $this->table('users');
        $this->displayField('userID');
        $this->primaryKey('userID');

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
            ->add('userID', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('userID', 'create');

        $validator
            ->allowEmpty('userFirstName');

        $validator
            ->allowEmpty('userLastName');

        $validator
            ->allowEmpty('userAddress');

        $validator
            ->allowEmpty('userPostalCode');

        $validator
            ->add('userPhoneNumber', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('userPhoneNumber');

        $validator
            ->allowEmpty('userEmail');

        $validator
            ->allowEmpty('userRole');

        return $validator;
    }
}
