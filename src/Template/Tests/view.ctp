<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Test $test
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Html->link(__('Edytuj test'), ['action' => 'edit', $test->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Usuń test'), ['action' => 'delete', $test->id], ['confirm' => __('Czy na pewno chcesz usunąć test # {0}?', $test->name)]) ?> </li>
        <li><?= $this->Html->link(__('Lista testów'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowy test'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista odpowiedzi użytkowników'), ['controller' => 'UserAnswers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowa odpowiedź użytkownika'), ['controller' => 'UserAnswers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista pytań'), ['controller' => 'Questions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowe pytanie'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tests view large-9 medium-8 columns content">
    <h3><?= h($test->name) ?></h3>
    <table class="vertical-table">
        <!--<tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($test->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($test->id) ?></td>
        </tr>
        <tr>-->
            <th scope="row"><?= __('Data utworzenia') ?></th>
            <td><?= h($test->date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Powiązane pytania') ?></h4>
        <?php if (!empty($test->questions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <!--<th scope="col"><?= __('Id') ?></th> -->
                <th scope="col"><?= __('Treść pytania') ?></th>
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
            <?php foreach ($test->questions as $questions): ?>
            <tr>
                <!--<td><?= h($questions->id) ?></td>-->
                <td><?= h($questions->text) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Podgląd'), ['controller' => 'Questions', 'action' => 'view', $questions->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['controller' => 'Questions', 'action' => 'edit', $questions->id]) ?>
                    <?= $this->Form->postLink(__('Usuń'), ['controller' => 'Questions', 'action' => 'delete', $questions->id], ['confirm' => __('Czy na pewno chcesz usunąć pytanie # {0}?', $questions->text)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Odpowiedzi użytkowników') ?></h4>
        <?php if (!empty($test->user_answers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <!--<th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Test Id') ?></th>-->
                <th scope="col"><?= __('Pytanie') ?></th>
                <th scope="col"><?= __('Użytkownik') ?></th>
                <th scope="col"><?= __('Odpowiedź') ?></th>
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
            <?php foreach ($test->user_answers as $userAnswers): ?>
            <tr>
                <!--<td><?= h($userAnswers->id) ?></td>
                <td><?= h($userAnswers->test_id) ?></td>-->
                <td><?= h($userAnswers->question_id) ?></td>
                <td><?= h($userAnswers->user_id) ?></td>
                <td><?= h($userAnswers->is_selected) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Podgląd'), ['controller' => 'UserAnswers', 'action' => 'view', $userAnswers->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['controller' => 'UserAnswers', 'action' => 'edit', $userAnswers->id]) ?>
                    <?= $this->Form->postLink(__('Usuń'), ['controller' => 'UserAnswers', 'action' => 'delete', $userAnswers->id], ['confirm' => __('Czy chcesz usunąć tą odpowiedź # {0}?', $userAnswers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

