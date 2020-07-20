<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Answer[]|\Cake\Collection\CollectionInterface $answers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Html->link(__('Nowa odpowiedź'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista pytań'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowe pytanie'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="answers index large-9 medium-8 columns content">
    <h3><?= __('Odpowiedzi') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!--<th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('question_id','Pytania') ?></th>
                <th scope="col"><?= $this->Paginator->sort('text','Odpowiedź') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_true','Czy jest prawdziwe?') ?></th>
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($answers as $answer): ?>
            <tr>
                <!--<td><?= $this->Number->format($answer->id) ?></td> -->
                <!--<td><?= $answer->has('question') ? $this->Html->link($answer->question->text, ['controller' => 'Questions', 'action' => 'view', $answer->question->id]) : '' ?></td> to po nizje likwiduje link przerzutowy do strony-->
                <td><?= h($answer->question->text) ?></td>
                <td><?= h($answer->text) ?></td>
                <td><?= h($answer->is_true) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Podgląd'), ['action' => 'view', $answer->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['action' => 'edit', $answer->id]) ?>
                    <?= $this->Form->postLink(__('Usuń'), ['action' => 'delete', $answer->id], ['confirm' => __('Jesteś pewien, że chcesz usunąć : {0}?', $answer->text)]) ?>
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
