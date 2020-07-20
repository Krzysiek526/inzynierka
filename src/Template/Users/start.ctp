<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Wybierz Panel') ?></li>

        <li><?= $this->Html->link(__('Panel Administratora'), ['controller' => 'Users', 'action' => 'startadmin']) ?></li>
        <li><?= $this->Html->link(__('Panel Prowadzącego'), ['controller' => 'Users', 'action' => 'startteacher']) ?></li>
        <li><?= $this->Html->link(__('Panel Użytkownika'), ['controller' => 'Users', 'action' => 'startuser']) ?></li>
 
        
    </ul>
</nav>

<br>
<br>
Strona wyświetlająca się po zalogowaniu