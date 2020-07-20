<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subject $subject
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Html->link(__('Edytuj przedmiot'), ['action' => 'edit', $subject->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Usuń przedmiot'), ['action' => 'delete', $subject->id], ['confirm' => __('Czy jesteś pewny, że chcesz usunąć przedmiot # {0}?', $subject->name)]) ?> </li>
        <li><?= $this->Html->link(__('Lista przedmiotów'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowy przedmiot'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista kursów'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowy kurs'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subjects view large-9 medium-8 columns content">
    <h3><?= h($subject->name) ?></h3>
    <table class="vertical-table">
       <!-- <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($subject->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($subject->id) ?></td>
        </tr>-->
    </table>
    <div class="related">
        <h4><?= __('Powiązane kursy') ?></h4>
        <?php if (!empty($subject->courses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <!--<th scope="col"><?= __('Id') ?></th>-->
                <th scope="col"><?= __('Nazwa kursu') ?></th>
                <!--<th scope="col"><?= __('Data ') ?></th>-->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subject->courses as $courses): ?>
            <tr>
                <!--<td><?= h($courses->id) ?></td>-->
                <td><?= h($courses->name) ?></td>
                <!--<td><?= h($courses->date) ?></td>-->
                <td class="actions">
                    <?= $this->Html->link(__('Podgląd'), ['controller' => 'Courses', 'action' => 'view', $courses->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['controller' => 'Courses', 'action' => 'edit', $courses->id]) ?>
                    <?= $this->Form->postLink(__('Usuń'), ['controller' => 'Courses', 'action' => 'delete', $courses->id], ['confirm' => __('Czy chcesz usunąć przedmiot # {0}?', $courses->name)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
