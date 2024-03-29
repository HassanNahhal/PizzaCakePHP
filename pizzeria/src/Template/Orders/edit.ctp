<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $order->orderID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $order->orderID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="orders form large-9 medium-8 columns content">
    <?= $this->Form->create($order) ?>
    <fieldset>
        <legend><?= __('Edit Order') ?></legend>
        <?php
            echo $this->Form->input('orderSize');
            echo $this->Form->input('orderToppings');
            echo $this->Form->input('orderDate');
            echo $this->Form->input('orderCondition');
            echo $this->Form->input('userID');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
