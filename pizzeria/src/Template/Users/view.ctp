<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->userID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->userID], ['confirm' => __('Are you sure you want to delete # {0}?', $user->userID)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->userID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('UserFirstName') ?></th>
            <td><?= h($user->userFirstName) ?></td>
        </tr>
        <tr>
            <th><?= __('UserLastName') ?></th>
            <td><?= h($user->userLastName) ?></td>
        </tr>
        <tr>
            <th><?= __('UserAddress') ?></th>
            <td><?= h($user->userAddress) ?></td>
        </tr>
        <tr>
            <th><?= __('UserPostalCode') ?></th>
            <td><?= h($user->userPostalCode) ?></td>
        </tr>
        <tr>
            <th><?= __('UserEmail') ?></th>
            <td><?= h($user->userEmail) ?></td>
        </tr>
        <tr>
            <th><?= __('UserRole') ?></th>
            <td><?= h($user->userRole) ?></td>
        </tr>
        <tr>
            <th><?= __('UserID') ?></th>
            <td><?= $this->Number->format($user->userID) ?></td>
        </tr>
        <tr>
            <th><?= __('UserPhoneNumber') ?></th>
            <td><?= $this->Number->format($user->userPhoneNumber) ?></td>
        </tr>
    </table>
</div>
