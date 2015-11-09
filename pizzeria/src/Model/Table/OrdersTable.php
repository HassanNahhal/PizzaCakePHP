<?php
namespace App\Model\Table;

use App\Model\Entity\Order;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Orders Model
 *
 */
class OrdersTable extends Table
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

        $this->table('orders');
        $this->displayField('orderID');
        $this->primaryKey('orderID');

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
            ->add('orderID', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('orderID', 'create');

        $validator
            ->allowEmpty('orderSize');

        $validator
            ->allowEmpty('orderToppings');

        $validator
            ->add('orderDate', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('orderDate');

        $validator
            ->allowEmpty('orderCondition');

        $validator
            ->add('userID', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('userID');

        return $validator;
    }
}
