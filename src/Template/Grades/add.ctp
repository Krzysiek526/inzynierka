<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grade $grade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        
        <li class="heading"><?= __('Wstaw ocene lub obecność') ?></li>
        <li class="heading"><?= __('Menu') ?></li>

        <li><?= $this->Html->link(__('Lista kursów'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Moje kursy'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
         <li><?= $this->Html->link(__('Zarządzaj testami'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj ocenami i obecnościami'), ['controller' => 'Grades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj skrzynką pocztową'), ['controller' => '', 'action' => '']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj katalogami'), ['controller' => '', 'action' => '']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj ankietami'), ['controller' => '', 'action' => '']) ?></li>
    </ul>
</nav>
<div class="grades form large-9 medium-8 columns content">
    <?= $this->Form->create($grade) ?>
    <fieldset>
        <legend><?= __('Dodaj ocene') ?></legend>
        <?php
            echo $this->Form->control('kursant_id', ['options' => $users]);
            echo $this->Form->control('kurs_id', ['options' => $courses]);
            echo $this->Form->control('przedmiot_id', ['options' => $subjects]);
            echo $this->Form->control('test_id', ['options' => $tests]);
            echo $this->Form->control('ocena');
            //echo $this->Form->control('obecność');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Zapisz')) ?>
    <?= $this->Form->end() ?>
</div>
