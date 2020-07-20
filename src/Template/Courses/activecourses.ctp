<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course[]|\Cake\Collection\CollectionInterface $courses
 */
?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Lista kursów') ?></li>
       
        

        <li class="heading"><?= __('Menu') ?></li>
        
        <li><?= $this->Html->link(__('Wypełnij test'), ['controller' => 'Tests', 'action' => 'mytest']) ?></li>
        <li><?= $this->Html->link(__('Moje oceny i obecności'), ['controller' => 'users', 'action' => 'view/8']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj skrzynką pocztową'), ['controller' => 'messages', 'action' => 'mymessages']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj katalogami'), ['controller' => 'users', 'action' => 'catalogsuser']) ?></li>
        <li><?= $this->Html->link(__('Moje ankiety'), ['controller' => 'questionnaires', 'action' => 'questionnairefill']) ?></li>


    </ul>
</nav>
<div class="courses index large-9 medium-8 columns content">
    <h3><?= __('Obecnie trwające kursy') ?></h3>
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
            <?php foreach ($courses as $course): ?>
            <tr>
                <!--<td><?= $this->Number->format($course->id) ?></td> -->
                <td><?= h($course->name) ?></td>
                <td><?= h($course->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Aplikuj'), ['action' => 'view', $course->id]) ?>
                    <!--<?= $this->Html->link(__('Edytuj'), ['action' => 'edit', $course->id]) ?>
                   <?= $this->Form->postLink(__('Usuń kurs'), ['action' => 'delete', $course->id], ['confirm' => __('Czy jesteś pewny, że chcesz usunąć kurs # {0}?', $course->name)]) ?>-->
                </td>
            </tr>
            <?php endforeach; ?>
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
