<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Html->link(__('Edytuj kurs'), ['action' => 'edit', $course->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Usuń kurs'), ['action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista kursów'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowy kurs'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista przedmiotów'), ['controller' => 'Subjects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowy przedmiot'), ['controller' => 'Subjects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista użytkowniów'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowy użytkownik'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="courses view large-9 medium-8 columns content">
    <h3><?= h($course->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nazwa kursu') ?></th>
            <td><?= h($course->name) ?></td>
        </tr>
        <!--<tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($course->id) ?></td>
        </tr>-->
        <tr>
            <th scope="row"><?= __('Data rozpoczęcia') ?></th>
            <td><?= h($course->date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Przypisane przedmioty') ?></h4>
        <?php if (!empty($course->subjects)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <!--<th scope="col"><?= __('Id') ?></th>-->
                <th scope="col"><?= __('Nazwa przedmiotu') ?></th>
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
            <?php foreach ($course->subjects as $subjects): ?>
            <tr>
                <!--<td><?= h($subjects->id) ?></td>-->
                <td><?= h($subjects->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Podgląd przedmiotu'), ['controller' => 'Subjects', 'action' => 'view', $subjects->id]) ?>
                    <?= $this->Html->link(__('Edytuj przedmiot'), ['controller' => 'Subjects', 'action' => 'edit', $subjects->id]) ?>
                    <?= $this->Form->postLink(__('Usuń przedmiot'), ['controller' => 'Subjects', 'action' => 'delete', $subjects->id], ['confirm' => __('Jesteś pewny, że chcesz usunąć przedmiot # {0}?', $subjects->name)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Przypisani kursanci') ?></h4>
        <?php if (!empty($course->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <!--<th scope="col"><?= __('Id') ?></th>-->
                <th scope="col"><?= __('Nazwa użytkownika') ?></th>
                <!--<th scope="col"><?= __('Password') ?></th>-->
                <th scope="col"><?= __('Email') ?></th>
                <!--<th scope="col"><?= __('Role') ?></th>-->
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
            <?php foreach ($course->users as $users): ?>
            <tr>
                <!--<td><?= h($users->id) ?></td>-->
                <td><?= h($users->username) ?></td>
                <!--<td><?= h($users->password) ?></td>-->
                <td><?= h($users->email) ?></td>
                <!--<td><?= h($users->role) ?></td>-->
                <td class="actions">
                    <?= $this->Html->link(__('Podgląd użytkownika'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edytuj użytkownika'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Usuń użytkownika'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Jesteś pewny, że chcesz usunąc użytkownika # {0}?', $users->username)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
