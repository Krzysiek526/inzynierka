<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
		<li><?= $this->Html->link(__('Lista kursów'), ['controller' => 'Courses', 'action' => 'activecourses']) ?></li>
        <li><?= $this->Html->link(__('Wypełnij test'), ['controller' => 'Tests', 'action' => 'mytest']) ?></li>
		<li><?= $this->Html->link(__('Moje oceny i obecności'), ['controller' => 'users', 'action' => 'view/8']) ?></li>
		<li><?= $this->Html->link(__('Zarządzaj skrzynką pocztową'), ['controller' => 'messages', 'action' => 'mymessages']) ?></li>
		<li><?= $this->Html->link(__('Zarządzaj katalogami'), ['controller' => 'users', 'action' => 'catalogsuser']) ?></li>
		<li><?= $this->Html->link(__('Moje ankiety'), ['controller' => 'questionnaires', 'action' => 'questionnairefill']) ?></li>

    </ul>
</nav>
<br>
<br>
Witaj na stronie głównej konta kursanta.