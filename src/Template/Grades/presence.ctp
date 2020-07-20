<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grade[]|\Cake\Collection\CollectionInterface $grades
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Zarządzaj ocenami i obecnościami') ?></li>
        <li><?= $this->Html->link(__('Przejdź w oceny'), ['controller' => 'grades','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Wstaw ocene lub obecność'), ['action' => 'add']) ?></li>
		<li><?= $this->Html->link(__('Wstaw ocene za kurs'), ['action' => 'add']) ?></li>
       

        <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Lista kursów'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        
        <li><?= $this->Html->link(__('Moje kursy'), ['controller' => 'Courses', 'action' => 'mycourses']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj testami'), ['controller' => 'Tests', 'action' => 'index']) ?></li>
   
        <li><?= $this->Html->link(__('Zarządzaj skrzynką pocztową'), ['controller' => 'messages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj katalogami'), ['controller' => 'users', 'action' => 'catalogs']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj ankietami'), ['controller' => 'questionnaires', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="grades index large-9 medium-8 columns content">
    <h3><?= __('Obecności')  ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!--<th scope="col"><?= $this->Paginator->sort('id') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('user_id','Użytkownik') ?></th>
                <th scope="col"><?= $this->Paginator->sort('course_id','Nazwa kursu') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subject_id','Nazwa przedmiotu') ?></th>
                <!--<th scope="col"><?= $this->Paginator->sort('test_id','Nazwa testu') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('grade','Obecność') ?></th>
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($grades as $grade): ?>
            <tr>
                <!--<td><?= $this->Number->format($grade->id) ?></td>-->
                <td><?= $grade->has('user') ? $this->Html->link($grade->user->username, ['controller' => 'Users', 'action' => 'view', $grade->user->id]) : '' ?></td>
                <td><?= $grade->has('course') ? $this->Html->link($grade->course->name, ['controller' => 'Courses', 'action' => 'view', $grade->course->id]) : '' ?></td>
                <td><?= $grade->has('subject') ? $this->Html->link($grade->subject->name, ['controller' => 'Subjects', 'action' => 'view', $grade->subject->id]) : '' ?></td>
                <!--<td><?= $grade->has('test') ? $this->Html->link($grade->test->name, ['controller' => 'Tests', 'action' => 'view', $grade->test->id]) : '' ?></td>-->
                <td><?= h($grade->grade) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Podgląd'), ['action' => 'view', $grade->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['action' => 'edit', $grade->id]) ?>
                    <?= $this->Form->postLink(__('Usuń'), ['action' => 'delete', $grade->id], ['confirm' => __('Czy na pewno chcesz usunąć ocenę # {0}?', $grade->grade)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Pierwsza strona')) ?>
            <?= $this->Paginator->prev('< ' . __('Poprzednia')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Następna') . ' >') ?>
            <?= $this->Paginator->last(__('Ostatnia') . ' >>') ?>
        </ul>
        <!--<p><?= $this->Paginator->counter(['format' => __('Strona {{page}} z {{pages}}, pokazuje {{current}} rekord(y) z wszystkich {{count}} obecnie utworzonych' )]) ?></p>
    --></div>
</div>
