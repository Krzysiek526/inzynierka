<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menu') ?></li>
		<li><?= $this->Html->link(__('Zarządzanie użytkownikami'), ['controller' => '', 'action' => '']) ?></li>
		<li><?= $this->Html->link(__('Zarządzanie kursami'), ['controller' => '', 'action' => '']) ?></li>
		<li><?= $this->Html->link(__('Zarządzanie skrzynką pocztową'), ['controller' => '', 'action' => '']) ?></li>
		<li><?= $this->Html->link(__('Zarządzanie katalogami'), ['controller' => '', 'action' => '']) ?></li>
		<li><?= $this->Html->link(__('Zarządzanie ankietami'), ['controller' => '', 'action' => '']) ?></li>
	</ul>
</nav>
<br>
<br>
Witaj na stronie głównej konta admina.