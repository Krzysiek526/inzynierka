<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
		<li><?= $this->Html->link(__('Lista kursów'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
		
        <li><?= $this->Html->link(__('Moje kursy'), ['controller' => 'Courses', 'action' => 'mycourses']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj testami'), ['controller' => 'Tests', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('Zarządzaj ocenami i obecnościami'), ['controller' => 'Grades', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('Zarządzaj skrzynką pocztową'), ['controller' => 'messages', 'action' => 'index']) ?></li>
		<li><?= $this->Html->link(__('Zarządzaj katalogami'), ['controller' => 'users', 'action' => 'catalogs']) ?></li>
		<li><?= $this->Html->link(__('Zarządzaj ankietami'), ['controller' => 'questionnaires', 'action' => 'index']) ?></li>

    </ul>
</nav>
<br>
<br>
Witaj na stronie głównej konta prowadzący.
