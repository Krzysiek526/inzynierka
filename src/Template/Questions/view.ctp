<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question $question
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Html->link(__('Edytuj pytanie'), ['action' => 'edit', $question->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Usuń pytanie'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista pytań'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowe pytanie'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List odpowiedź'), ['controller' => 'Answers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowa odpowiedź'), ['controller' => 'Answers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista odpowiedzi użytkowniów'), ['controller' => 'UserAnswers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowa odpowiedź użytkownika'), ['controller' => 'UserAnswers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista testów'), ['controller' => 'Tests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowy test'), ['controller' => 'Tests', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questions view large-9 medium-8 columns content">
    <h3><?= h($question->text) ?></h3>
    <table class="vertical-table">
       <!-- <tr>
            <th scope="row"><?= __('Text') ?></th>
            <td><?= h($question->text) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($question->id) ?></td>
        </tr> -->
    </table>
    <div class="related">
        <h4><?= __('Powiązane testy') ?></h4>
        <?php if (!empty($question->tests)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
               <!-- <th scope="col"><?= __('Id') ?></th> -->
                <th scope="col"><?= __('Nazwa testu') ?></th>
                <!--<th scope="col"><?= __('Data utworzenia testu') ?></th>-->
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
            <?php foreach ($question->tests as $tests): ?>
            <tr>
                <!--<td><?= h($tests->id) ?></td>-->
                <td><?= h($tests->name) ?></td>
                <!--<td><?= h($tests->date) ?></td>-->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tests', 'action' => 'view', $tests->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tests', 'action' => 'edit', $tests->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tests', 'action' => 'delete', $tests->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tests->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Odpowiedź do pytania') ?></h4>
        <?php if (!empty($question->answers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <!--<th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Pytanie') ?></th>-->
                <th scope="col"><?= __('Treść odpowiedzi') ?></th>
                <th scope="col"><?= __('Czy jest prawdziwe?') ?></th>
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
            <?php foreach ($question->answers as $answers): ?>
            <tr>
                <!--<td><?= h($answers->id) ?></td>
                <td><?= h($answers->question_id) ?>-->
                <td><?= h($answers->text) ?></td>
                <!--<td><?= h($answers->is_true) ?></td> to wyswietla liczby bitowe czyli 1 i 0 a ponizej tak i nie-->
                <td><?= h($answers->is_true ? __('Tak') : __('Nie')); ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Podgląd'), ['controller' => 'Answers', 'action' => 'view', $answers->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['controller' => 'Answers', 'action' => 'edit', $answers->id]) ?>
                    <?= $this->Form->postLink(__('Usuń'), ['controller' => 'Answers', 'action' => 'delete', $answers->id], ['confirm' => __('Czy jesteś pewny, że chcesz usunąć pytanie # {0}?', $answers->text)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Odpowiedzi użytkowników na to pytanie') ?></h4>
        <?php if (!empty($question->user_answers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <!--<th scope="col"><?= __('Id') ?></th>-->
                <th scope="col"><?= __('Nazwa testu') ?></th>
                <th scope="col"><?= __('Pytanie') ?></th>
                <th scope="col"><?= __('Nazwa użytkownika') ?></th>
                <th scope="col"><?= __('Odpowiedź') ?></th>
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
            <?php foreach ($question->user_answers as $userAnswers): ?>
            <tr>
                <!--<td><?= h($userAnswers->id) ?></td>-->
                <td><?= h($userAnswers->test_id) ?></td>
                <td><?= h($userAnswers->question_id) ?></td>
                <td><?= h($userAnswers->user_id) ?></td>
                <td><?= h($userAnswers->is_selected ? __('Prawda') : __('Fałsz')); ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Podgląd'), ['controller' => 'UserAnswers', 'action' => 'view', $userAnswers->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['controller' => 'UserAnswers', 'action' => 'edit', $userAnswers->id]) ?>
                    <?= $this->Form->postLink(__('Usuń'), ['controller' => 'UserAnswers', 'action' => 'delete', $userAnswers->id], ['confirm' => __('Czy jesteś pewny, że chcesz usunąć tą odpowiedź # {0}?', $userAnswers->user_id )]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
