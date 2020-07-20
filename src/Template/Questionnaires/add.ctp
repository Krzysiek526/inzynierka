<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Questionnaire $questionnaire
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Dodaj ankiete') ?></li>
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
<div class="questionnaires form large-9 medium-8 columns content">
    <?= $this->Form->create($questionnaire) ?>
    <fieldset>
        <legend><?= __('Dodaj ankiete') ?></legend>
        <?php
            echo $this->Form->control('autor_id', ['options' => $users]);
            //echo $this->Form->control('title');
            //echo $this->Form->control('description');
        ?>


        <div class="input text required"><label for="title">Tytuł</label><input type="text" name="title" required="required" maxlength="50" id="title"/></div><div class="input text required"><label for="description">Opis ankiety</label><input type="text" name="description" required="required" maxlength="50" id="description"/></div>


        <?= $this->Form->button(__('Dodaj pytania')) ?>
    </fieldset>
    <?= $this->Form->button(__('Zapisz')) ?>
    <?= $this->Form->end() ?>
</div>
