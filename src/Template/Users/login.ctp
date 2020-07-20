<br>
<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
	<div class="panel">
		<h2 class="text-center">Logowanie</h2>
		<?= $this->Form->create(); ?>
			<?= $this->Form->control('username',['label'=>'Login','placeholder'=>'Wpisz nazwę użytkownika.','required'=>true]) ?>
			<?= $this->Form->control('password',['label'=>'Hasło','placeholder'=>'Wpisz hasło.','required'=>true]) ?>
			<?= $this->Form->submit('Zaloguj', array('class' => 'button')); ?>
		<?= $this->Form->end(); ?>
	</div>
</div>
