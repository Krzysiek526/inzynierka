<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course[]|\Cake\Collection\CollectionInterface $courses
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Lista kursów') ?></li>
        <li><?= $this->Html->link(__('Załóż nowy kurs'), ['action' => 'add']) ?></li>
      <!--  <li><?= $this->Html->link(__('Dodaj nowych kursantów'), ['action' => 'edit/1']) ?></li> -->
    <!--    <li><?= $this->Html->link(__('Zakończ kurs'), ['action' => 'delete/1']) ?></li> -->
        
      

        <li class="heading"><?= __('Menu') ?></li>

        
        <li><?= $this->Html->link(__('Moje kursy'), ['controller' => 'Courses', 'action' => 'mycourses']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj testami'), ['controller' => 'Tests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj ocenami i obecnościami'), ['controller' => 'Grades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj skrzynką pocztową'), ['controller' => 'messages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj katalogami'), ['controller' => 'users', 'action' => 'catalogs']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj ankietami'), ['controller' => 'questionnaires', 'action' => 'index']) ?></li>

    </ul>
</nav>
<div class="courses index large-9 medium-8 columns content">
    <h3><?= __('Dostępne kursy') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!--<th scope="col"><?= $this->Paginator->sort('id') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('name','Nazwa kursu') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date','Data rozpoczęcia') ?></th>
                <!-- 
                    <th scope="col" class="actions"><?= __('Akcje') ?></th>
                -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($courses as $course): ?>
            <tr>
                <!--<td><?= $this->Number->format($course->id) ?></td> -->
                <td><?= h($course->name) ?></td>
                <td><?= h($course->date) ?></td>
                <!-- 
                <td class="actions">
                    <?= $this->Html->link(__('Podgląd'), ['action' => 'view', $course->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['action' => 'edit', $course->id]) ?>
                   <?= $this->Form->postLink(__('Usuń kurs'), ['action' => 'delete', $course->id], ['confirm' => __('Czy jesteś pewny, że chcesz usunąć kurs # {0}?', $course->name)]) ?> 

                </td>-->
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
            <?= $this->Paginator->last(__('Ostatnia') . ' >>') ?>
        </ul>
        <!--<p><?= $this->Paginator->counter(['format' => __('Strona {{page}} z {{pages}}, pokazuje {{current}} rekord(y) z wszystkich {{count}} obecnie utworzonych' )]) ?></p>-->
    </div>
</div>
