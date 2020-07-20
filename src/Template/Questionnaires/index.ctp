<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Questionnaire[]|\Cake\Collection\CollectionInterface $questionnaires
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Zarządzaj ankietami') ?></li>
        <li><?= $this->Html->link(__('Dodaj ankiete'), ['action' => 'add']) ?></li>
        <!--<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>-->


        <li class="heading"><?= __('Menu') ?></li>
      <li><?= $this->Html->link(__('Lista kursów'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        
        <li><?= $this->Html->link(__('Moje kursy'), ['controller' => 'Courses', 'action' => 'mycourses']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj testami'), ['controller' => 'Tests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj ocenami i obecnościami'), ['controller' => 'Grades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj skrzynką pocztową'), ['controller' => 'messages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj katalogami'), ['controller' => 'users', 'action' => 'catalogs']) ?></li>
       
    </ul>
</nav>
<div class="questionnaires index large-9 medium-8 columns content">
    <h3><?= __('Ankiety') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!--<th scope="col"><?= $this->Paginator->sort('id') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('user_id','Autor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title','Tytuł') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description','Opis ankiety') ?></th>
                <!--<th scope="col" class="actions"><?= __('Actions') ?></th>-->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($questionnaires as $questionnaire): ?>
            <tr>
               <!-- <td><?= $this->Number->format($questionnaire->id) ?></td>-->
                <td><?= $questionnaire->has('user') ? $this->Html->link($questionnaire->user->username, ['controller' => 'Users', 'action' => 'view', $questionnaire->user->id]) : '' ?></td>
                <td><?= h($questionnaire->title) ?></td>
                <td><?= h($questionnaire->description) ?></td>
                <!--<td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $questionnaire->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $questionnaire->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $questionnaire->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionnaire->id)]) ?>
                </td>-->
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Następna strona')) ?>
            <?= $this->Paginator->prev('< ' . __('Poprzednia strona')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Następna strona') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
       <!-- <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>-->
    </div>
</div>
