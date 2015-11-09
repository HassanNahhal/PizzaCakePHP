<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->orderID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->orderID], ['confirm' => __('Are you sure you want to delete # {0}?', $order->orderID)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orders view large-9 medium-8 columns content">
    <h3><?= h($order->orderID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('OrderSize') ?></th>
            <td><?= h($order->orderSize) ?></td>
        </tr>
        <tr>
            <th><?= __('OrderToppings') ?></th>
            <td><?= h($order->orderToppings) ?></td>
        </tr>
        <tr>
            <th><?= __('OrderCondition') ?></th>
            <td><?= h($order->orderCondition) ?></td>
        </tr>
        <tr>
            <th><?= __('OrderID') ?></th>
            <td><?= $this->Number->format($order->orderID) ?></td>
        </tr>
        <tr>
            <th><?= __('UserID') ?></th>
            <td><?= $this->Number->format($order->userID) ?></td>
        </tr>
        <tr>
            <th><?= __('OrderDate') ?></th>
            <td><?= h($order->orderDate) ?></tr>
        </tr>
    </table>
</div>
