<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Moje oceny i obecności') ?></li>

<li class="heading"><?= __('Menu') ?></li>
        
       <li><?= $this->Html->link(__('Lista kursów'), ['controller' => 'Courses', 'action' => 'activecourses']) ?></li>
        <li><?= $this->Html->link(__('Wypełnij test'), ['controller' => 'Tests', 'action' => 'mytest']) ?></li>
        
        <li><?= $this->Html->link(__('Zarządzaj skrzynką pocztową'), ['controller' => 'messages', 'action' => 'mymessages']) ?></li>
        <li><?= $this->Html->link(__('Zarządzaj katalogami'), ['controller' => 'users', 'action' => 'catalogsuser']) ?></li>
        <li><?= $this->Html->link(__('Moje ankiety'), ['controller' => 'questionnaires', 'action' => 'questionnairefill']) ?></li>


        </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= __('Witaj '), h($user->username) ?></h3>
    <table class="vertical-table">
        <tr> <!--
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>-->
            <th scope="row"><?= __('Twój email')  ?></th>
            <td><?= h($user->email) ?></td> 
            <!--
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        -->
        </tr>
    </table>

    <div class="related">
        <h4><?= __('Uczęszczane kursy') ?></h4>
        <?php if (!empty($user->courses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                
                <th scope="col"><?= __('Nazwa kursu') ?></th>
               
            </tr>
            <?php foreach ($user->courses as $courses): ?>
            <tr>
                
                <td><?= h($courses->name) ?></td>
               
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>

    </div>


    <div class="related">
        <h4><?= __('Oceny za kursy') ?></h4>
        <?php if (!empty($user->grades)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
               
                <th scope="col"><?= __('Nazwa kursu') ?></th>
                <th scope="col"><?= __('Ocena') ?></th>
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
<!--
            <?php foreach ($user->courses as $courses): ?>
                <tr>                 
                    <td><?= h($courses->name) ?> </td>
                </tr>                 
            <?php endforeach; ?>
            

            

            <?php foreach ($user->grades as $grades) : ?>
                <tr>

                    <td><?= h($grades->course_id) ?></td>
                    <td><?= h($grades->grade) ?></td>
                    
                    
                </tr>
            <?php endforeach; ?>
       
-->

            
                <tr>

                    <td>Kurs z informatyki</td>

                    <td>5</td>
                    
                    <td class="actions">
                     <?= $this->Html->link(__('Sprawdź dokładnie'), ['action' => 'view', $user->id]) ?>
                    
                </tr>

                <tr>

                    <td>Kurs z angielskiego</td>

                    <td>4</td>
                    <td class="actions">
                     <?= $this->Html->link(__('Sprawdź dokładnie'), ['action' => 'view', $user->id]) ?>
                </tr>

            
              <tr>

                    <td>    Kurs z tworzenia aplikacji webowych</td>

                    <td>3</td>
                    <td class="actions">
                     <?= $this->Html->link(__('Sprawdź dokładnie'), ['action' => 'view', $user->id]) ?>
                </tr>


        

            
        </table>
        <?php endif; ?>
    </div>


</div>
