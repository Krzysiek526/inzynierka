<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Answer $answer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Html->link(__('Edytuj odpowiedź'), ['action' => 'edit', $answer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Usuń odpowiedź'), ['action' => 'delete', $answer->id], ['confirm' => __('Czy jesteś pewny, że chcesz usunąć odpowiedź # {0}?', $answer->text)]) ?> </li>
        <li><?= $this->Html->link(__('Lista odpowiedzi'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowa odpowiedź'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista pytań'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowe pytanie'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="answers view large-9 medium-8 columns content">
    <!--<h3><?= h($answer->id) ?></h3> -->
    <h3><?= 'Informacje o wybranej odpowiedzi' ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Pytanie') ?></th>
            <td><?= $answer->has('question') ? $this->Html->link($answer->question->text, ['controller' => 'Questions', 'action' => 'view', $answer->question->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Odpowiedź') ?></th>
            <td><?= h($answer->text) ?></td>
        </tr>
<!--        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($answer->id) ?></td>
        </tr>
-->        <tr>
            <th scope="row"><?= __('Czy jest prawdziwe') ?></th>
            <td><?= $answer->is_true ? __('Tak') : __('Nie'); ?></td>
        </tr>
    </table>
</div>
