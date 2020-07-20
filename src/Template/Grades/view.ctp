<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grade $grade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Html->link(__('Edytuj ocene'), ['action' => 'edit', $grade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Usuń ocene'), ['action' => 'delete', $grade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grade->id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista ocen'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowa ocena'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista użytkowników'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowy użytkownik'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista kursów'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowy kurs'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista przedmiotów'), ['controller' => 'Subjects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowy przedmiot'), ['controller' => 'Subjects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista testów'), ['controller' => 'Tests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowy test'), ['controller' => 'Tests', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="grades view large-9 medium-8 columns content">
    <h3><?= 'Otrzymałeś ocene: ',($grade->grade) ?>
        <!--
    </h3><h3><?= h($grade->grade) ?></h3>
        -->
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Użytkownik') ?></th>
            <td><?= $grade->has('user') ? $this->Html->link($grade->user->username, ['controller' => 'Users', 'action' => 'view', $grade->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kurs') ?></th>
            <td><?= $grade->has('course') ? $this->Html->link($grade->course->name, ['controller' => 'Courses', 'action' => 'view', $grade->course->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Przedmiot') ?></th>
            <td><?= $grade->has('subject') ? $this->Html->link($grade->subject->name, ['controller' => 'Subjects', 'action' => 'view', $grade->subject->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Test') ?></th>
            <td><?= $grade->has('test') ? $this->Html->link($grade->test->name, ['controller' => 'Tests', 'action' => 'view', $grade->test->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ocena') ?></th>
            <td><?= h($grade->grade) ?></td>
        </tr>
        <!--<tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($grade->id) ?></td>
        </tr>-->
    </table>
</div>
