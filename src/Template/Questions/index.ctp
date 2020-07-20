<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question[]|\Cake\Collection\CollectionInterface $questions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Html->link(__('Nowe pytanie'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista odpowiedzi'), ['controller' => 'Answers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowa odpowiedź'), ['controller' => 'Answers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista odpowiedzi użytkowników'), ['controller' => 'UserAnswers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowa odpowiedź użytkownika'), ['controller' => 'UserAnswers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista testów'), ['controller' => 'Tests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowy test'), ['controller' => 'Tests', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questions index large-9 medium-8 columns content">
    <h3><?= __('Pytania') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!--<th scope="col"><?= $this->Paginator->sort('id') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('text','Treść pytania') ?></th>
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($questions as $question): ?>
            <tr>
                <!--<td><?= $this->Number->format($question->id) ?></td> -->
                <td><?= h($question->text) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Podgląd'), ['action' => 'view', $question->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['action' => 'edit', $question->id]) ?>
                    <?= $this->Form->postLink(__('Skasuj pytanie'), ['action' => 'delete', $question->id], ['confirm' => __('Czy chcesz usunąć pytanie # {0}?', $question->text)]) ?>
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
