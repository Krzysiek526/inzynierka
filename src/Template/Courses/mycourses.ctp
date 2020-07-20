<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course[]|\Cake\Collection\CollectionInterface $courses
 */
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Moje kursy') ?></li>
  <!--      <li><?= $this->Html->link(__('Edytuj kursy'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Ustal harmonogram kursu'), ['action' => '']) ?></li> -->
        
        
 
        <li class="heading"><?= __('Menu') ?></li>

        
        <li><?= $this->Html->link(__('Lista kursów'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        
       
        <li><?= $this->Html->link(__('Zarządzaj testami'), ['controller' => 'Tests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj ocenami i obecnościami'), ['controller' => 'Grades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj skrzynką pocztową'), ['controller' => 'messages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj katalogami'), ['controller' => 'users', 'action' => 'catalogs']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj ankietami'), ['controller' => 'questionnaires', 'action' => 'index']) ?></li>

    </ul>
</nav>
<div class="courses index large-9 medium-8 columns content">
    <h3><?= __('Moje kursy') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!--<th scope="col"><?= $this->Paginator->sort('id') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('name','Nazwa kursu') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date','Data rozpoczęcia') ?></th>
                <th scope="col" class="actions"><?= __('Opcje') ?></th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <!--<td>4,005</td> -->
                <td>Kurs z CakePHP</td>
                <td>1/1/20</td>
                <td class="actions">
                    <a href="/courses/view/4005">Podgląd kursu</a><br>
                    <a href="/courses/edit/4005">Otwórz kurs dla użytkowników</a><br>                    
                    <a href="/courses/edit/4005">Dodaj użytkowników</a>  <br>                 <form name="post_5d2302878c697952059904" style="display:none;" method="post" action="/courses/delete/4005"><input type="hidden" name="_method" value="POST"/><input type="hidden" name="_csrfToken" autocomplete="off" value="4b847606520c02305b30711dd77a26285492ae04bc4fa30b311791b2ef6e8baede6c2bc8994586ee12e6a84118c2ec89ba0ca78b9dc96c0ad6f0163f9c48138e"/></form><a href="#" onclick="if (confirm(&quot;Czy jeste\u015b pewny, \u017ce chcesz usun\u0105\u0107 kurs # Kurs z PHP?&quot;)) { document.post_5d2302878c697952059904.submit(); } event.returnValue = false; return false;">Usuń kurs</a>                </td>
            </tr>


            <!--
            <?php foreach ($courses as $course): ?>
            <tr>
               
                <td><?= h($course->name) ?></td>
                <td><?= h($course->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Podgląd'), ['action' => 'view', $course->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['action' => 'edit', $course->id]) ?>
                   <?= $this->Form->postLink(__('Usuń kurs'), ['action' => 'delete', $course->id], ['confirm' => __('Czy jesteś pewny, że chcesz usunąć kurs # {0}?', $course->name)]) ?>
                </td>
            </tr>
            <?php endforeach; ?> -->
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <!--<?= $this->Paginator->first('<< ' . __('Pierwsza strona')) ?>-->
            <?= $this->Paginator->prev('< ' . __('Poprzednia strona')) ?>
            <!--<?= $this->Paginator->numbers() ?>-->
            <?= $this->Paginator->next(__('Następna strona') . ' >') ?>
           <!-- <?= $this->Paginator->last(__('Ostatnia') . ' >>') ?>-->
        </ul>
        <!--<p><?= $this->Paginator->counter(['format' => __('Strona {{page}} z {{pages}}, pokazuje {{current}} rekord(y) z wszystkich {{count}} obecnie utworzonych' )]) ?></p>-->
    </div>
</div>
