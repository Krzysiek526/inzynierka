<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subject[]|\Cake\Collection\CollectionInterface $subjects
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Html->link(__('Nowy przedmiot'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista kursów'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowy kurs'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subjects index large-9 medium-8 columns content">
    <h3><?= __('Przedmioty') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!--<th scope="col"><?= $this->Paginator->sort('id') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('name','Nazwa przedmiotu') ?></th>
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subjects as $subject): ?>
            <tr>
                <!--<td><?= $this->Number->format($subject->id) ?></td>-->
                <td><?= h($subject->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Podgląd'), ['action' => 'view', $subject->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['action' => 'edit', $subject->id]) ?>
                    <?= $this->Form->postLink(__('Usuń'), ['action' => 'delete', $subject->id], ['confirm' => __('Jesteś pewny, że chcesz usunąć przedmiot # {0}?', $subject->name)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Pierwsza strona')) ?>
            <?= $this->Paginator->prev('< ' . __('Poprzednia')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Następna') . ' >') ?>
            <?= $this->Paginator->last(__('Ostatnia') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Strona {{page}} z {{pages}}, pokazuje {{current}} rekord(y) z wszystkich {{count}} obecnie utworzonych' )]) ?></p>
    </div>
</div>
