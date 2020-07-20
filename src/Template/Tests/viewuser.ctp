<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Test $test
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?=__('Wypełnij test') ?></li>
       <li class="heading"><?= __('Menu') ?></li>
        <li><?= $this->Html->link(__('Lista kursów'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Moje oceny i obecności'), ['controller' => 'users', 'action' => 'view/9']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj skrzynką pocztową'), ['controller' => '', 'action' => '']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj katalogami'), ['controller' => '', 'action' => '']) ?></li>
        <li><?= $this->Html->link(__('Moje ankiety'), ['controller' => '', 'action' => '']) ?></li>





        <!--<li><?= $this->Html->link(__('Edytuj test'), ['action' => 'edit', $test->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Usuń test'), ['action' => 'delete', $test->id], ['confirm' => __('Czy na pewno chcesz usunąć test # {0}?', $test->name)]) ?> </li>
        <li><?= $this->Html->link(__('Lista testów'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowy test'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista odpowiedzi użytkowników'), ['controller' => 'UserAnswers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowa odpowiedź użytkownika'), ['controller' => 'UserAnswers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista pytań'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowe pytanie'), ['controller' => 'Questions', 'action' => 'add']) ?> </li> -->
    </ul>
</nav>

                <!--
            
            
            
-->
<div class="tests view large-9 medium-8 columns content">
    <h3><?= h($test->name) ?></h3>

        <table class="vertical-table">
<!--            <tr>
                <th scope="row"><?= __('Name') ?></th>
                <td><?= h($test->name) ?></td>
            </tr>
            <tr>
                <th scope="row"><?= __('Id') ?></th>
                <td><?= $this->Number->format($test->id) ?></td>
            </tr>   
-->         <tr>
                <th scope="row"><?= __('Data utworzenia') ?></th>
                <td><?= h($test->date) ?></td>
            </tr>
        </table>

        <div class="related">
            <h4><?= __('Pytania') ?></h4>
            <?php if (!empty($test->questions)): ?>
                <table cellpadding="0" cellspacing="0">
                    <tr>        
                        <th scope="col"><?= __('Treść pytania') ?></th> 
                    </tr>   
                    <tr>
                        <?php foreach ($test->questions as $questions): ?>
                            <td><?= h($questions->text) ?></td>
                            <?php if (!empty($questions->answers)): ?>
                                <?php foreach ($questions->answers as $answers): ?>
                                    <tr>
                                        <td><input type="checkbox" name="test" value="value1"><?= h($answers->text) ?></td>
                                    </tr>   
                                <?php endforeach; ?>                  
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </tr>
                </table>
            <?php endif; ?>
        </div>



<?= $this->Form->button(__('Zakończ test i wyślij')) ?>







<!--
--------------------------------------------------------------------------
<div class="tests view large-9 medium-8 columns content">
    <h3><?= h($test->name) ?></h3>
    <div class="related">
        <h4><?= __('Related Questions') ?></h4>
        <table cellpadding="0" cellspacing="0">
            <?php foreach ($test->questions as $questions): ?>
                <th scope="col"></th>    
                    <tr>
                        <td><?= h($questions->text) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Questions', 'action' => 'view', $questions->id]) ?>
                        </td>
                    </tr>
                    <?php if (!empty($questions->answers)): ?>
                        <table cellpadding="0" cellspacing="0">    
                            <?php foreach ($questions->answers as $answers): ?>
                                <tr>
                                    <td><input type="checkbox" name="test" value="value1"><?= h($answers->text) ?></td>
                                </tr>   
                            <?php endforeach; ?>                  
                        </table>
                    <?php endif; ?>
            <?php endforeach; ?>
        </table>   
    </div>      
</div>  

-->


