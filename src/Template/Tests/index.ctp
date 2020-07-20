<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Test[]|\Cake\Collection\CollectionInterface $tests
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Zarządzaj testami') ?></li>
		
		
        <li><?= $this->Html->link(__('Utwórz test'), ['action' => 'add']) ?></li>
		
		
		
        <li><?= $this->Html->link(__('Sprawdź odpowiedzi użytkowników'), ['controller' => 'UserAnswers', 'action' => 'index']) ?></li>
       
		
		 <li class="heading"><?= __('Menu') ?></li>

        <li><?= $this->Html->link(__('Lista kursów'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        
        <li><?= $this->Html->link(__('Moje kursy'), ['controller' => 'Courses', 'action' => 'mycourses']) ?></li>
       
        <li><?= $this->Html->link(__('Zarządzaj ocenami i obecnościami'), ['controller' => 'Grades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj skrzynką pocztową'), ['controller' => 'messages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj katalogami'), ['controller' => 'users', 'action' => 'catalogs']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj ankietami'), ['controller' => 'questionnaires', 'action' => 'index']) ?></li>
	</ul>
</nav>
<div class="tests index large-9 medium-8 columns content">
    <h3><?= __('Testy') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!--<th scope="col"><?= $this->Paginator->sort('id') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('name','Nazwa testu') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date','Data utworzenia') ?></th>
                <th scope="col" class="actions"><?= __('Opcje dla testu') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tests as $test): ?>
            <tr>
                <!--<td><?= $this->Number->format($test->id) ?></td>-->
                <td><?= h($test->name) ?></td>
                <td><?= h($test->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Podgląd testu'), ['action' => 'view', $test->id]) ?>
                    <?= $this->Html->link(__('Edytuj test'), ['action' => 'edit', $test->id]) ?>
                    <?= $this->Form->postLink(__('Usuń test'), ['action' => 'delete', $test->id], ['confirm' => __('Czy jesteś pewny, że chcesz usunąć  # {0}?', $test->name)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Pierwsza strona')) ?>
            <?= $this->Paginator->prev('< ' . __('Poprzednia strona')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Następna strona') . ' >') ?>
            <?= $this->Paginator->last(__('Ostatnia strona') . ' >>') ?>
        </ul>
		
        <!--<p><?= $this->Paginator->counter(['format' => __('Strona {{page}} z {{pages}}, pokazuje {{current}} rekord(y) z wszystkich {{count}} obecnie utworzonych' )]) ?></p>
		-->
		<!--<p><?= $this->Paginator->counter(['format' => __('Strona {{page}} z {{pages}}')]) ?></p>-->
	</div>
</div>
