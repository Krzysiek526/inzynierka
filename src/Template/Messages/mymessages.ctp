<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Message[]|\Cake\Collection\CollectionInterface $messages
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Zarządzaj skrzynką pocztową') ?></li>
        <li><?= $this->Html->link(__('Nowa wiadomość'), ['action' => 'add']) ?></li>

        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Lista kursów'), ['controller' => 'Courses', 'action' => 'activecourses']) ?></li>
        <li><?= $this->Html->link(__('Wypełnij test'), ['controller' => 'Tests', 'action' => 'mytest']) ?></li>
        <li><?= $this->Html->link(__('Moje oceny i obecności'), ['controller' => 'users', 'action' => 'view/8']) ?></li>
       
        <li><?= $this->Html->link(__('Zarządzaj katalogami'), ['controller' => 'users', 'action' => 'catalogsuser']) ?></li>
        <li><?= $this->Html->link(__('Moje ankiety'), ['controller' => 'questionnaires', 'action' => 'questionnairefill']) ?></li>

    </ul>
</nav>
<div class="messages index large-9 medium-8 columns content">
    <h3><?= __('Wiadomości') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('user_id','Nadawca') ?></th>
                <th scope="col" class="actions"><?= __('Opcje') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($messages as $message): ?>
            <tr> 
                <!-- <td><?= $this->Number->format($message->id) ?></td> -->
                <td><?= $message->has('user') ? $this->Html->link($message->user->username, ['controller' => 'Users', 'action' => 'view', $message->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Podgląd wiadomości'), ['action' => 'view', $message->id]) ?>
                   <!-- <?= $this->Html->link(__('Edit'), ['action' => 'edit', $message->id]) ?>-->
                    <?= $this->Form->postLink(__('Usuń wiadomość'), ['action' => 'delete', $message->id], ['confirm' => __('Are you sure you want to delete # {0}?', $message->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('Poprzednia strona')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Następna strona') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
       <!-- <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p> -->
    </div>
</div>
