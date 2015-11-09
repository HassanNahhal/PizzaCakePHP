<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('userFirstName');
            echo $this->Form->input('userLastName');
            echo $this->Form->input('userAddress');
            echo $this->Form->input('userPostalCode');
            echo $this->Form->input('userPhoneNumber');
            echo $this->Form->input('userEmail');
            echo $this->Form->input('userRole');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
