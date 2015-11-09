<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('userID') ?></th>
                <th><?= $this->Paginator->sort('userFirstName') ?></th>
                <th><?= $this->Paginator->sort('userLastName') ?></th>
                <th><?= $this->Paginator->sort('userAddress') ?></th>
                <th><?= $this->Paginator->sort('userPostalCode') ?></th>
                <th><?= $this->Paginator->sort('userPhoneNumber') ?></th>
                <th><?= $this->Paginator->sort('userEmail') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->userID) ?></td>
                <td><?= h($user->userFirstName) ?></td>
                <td><?= h($user->userLastName) ?></td>
                <td><?= h($user->userAddress) ?></td>
                <td><?= h($user->userPostalCode) ?></td>
                <td><?= $this->Number->format($user->userPhoneNumber) ?></td>
                <td><?= h($user->userEmail) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->userID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->userID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->userID], ['confirm' => __('Are you sure you want to delete # {0}?', $user->userID)]) ?>
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
