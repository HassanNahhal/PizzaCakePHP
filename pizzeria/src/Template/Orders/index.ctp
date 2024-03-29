<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="orders index large-9 medium-8 columns content">
    <h3><?= __('Orders') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('orderID') ?></th>
                <th><?= $this->Paginator->sort('orderSize') ?></th>
                <th><?= $this->Paginator->sort('orderToppings') ?></th>
                <th><?= $this->Paginator->sort('orderDate') ?></th>
                <th><?= $this->Paginator->sort('orderCondition') ?></th>
                <th><?= $this->Paginator->sort('userID') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orders as $order): ?>
            <tr>
                <td><?= $this->Number->format($order->orderID) ?></td>
                <td><?= h($order->orderSize) ?></td>
                <td><?= h($order->orderToppings) ?></td>
                <td><?= h($order->orderDate) ?></td>
                <td><?= h($order->orderCondition) ?></td>
                <td><?= $this->Number->format($order->userID) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $order->orderID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->orderID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->orderID], ['confirm' => __('Are you sure you want to delete # {0}?', $order->orderID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
