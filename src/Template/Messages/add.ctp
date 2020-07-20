<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Message $message
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Nowa wiadomość') ?></li>
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
<div class="messages form large-9 medium-8 columns content">
    <?= $this->Form->create($message) ?>
    <fieldset>
        <legend><?= __('Wyślij wiadomość') ?></legend>
        <?php
            echo $this->Form->control('odbiorca_id', ['options' => $users]);
            
            //echo $this->Form->control('message');
        ?>
        <div class="input textarea required"><label for="message">Treść wiadomości</label><textarea name="message" required="required" id="message" rows="5"></textarea></div>
    </fieldset>
    <?= $this->Form->button(__('Wyślij')) ?>
    <?= $this->Form->end() ?>
</div>
