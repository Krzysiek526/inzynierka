<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    	 <li class="heading"><?= __('Zarządzaj katalogami') ?></li>
    	<li><?= $this->Html->link(__('Dodaj plik'), ['controller' => '', 'action' => '']) ?></li>
        <li class="heading"><?= __('Menu') ?></li>
	<li><?= $this->Html->link(__('Lista kursów'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        
        <li><?= $this->Html->link(__('Zarządzaj kursami'), ['controller' => 'Courses', 'action' => 'mycourses']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj testami'), ['controller' => 'Tests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj ocenami i obecnościami'), ['controller' => 'Grades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj skrzynką pocztową'), ['controller' => 'messages', 'action' => 'index']) ?></li>
       
        <li><?= $this->Html->link(__('Zarządzaj ankietami'), ['controller' => 'questionnaires', 'action' => 'index']) ?></li>

    </ul>
</nav>
    <div class="users catalogs large-9 medium-8 columns content">
    <h3><?= __('') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <?= $this->Form->button(__('Utwórz katalog')) ?>
    </table>
</div>

