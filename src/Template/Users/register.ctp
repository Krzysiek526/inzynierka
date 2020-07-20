<br>
<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
	<div class="panel">
		<h2 class="text-center">Rejestracja</h2>
		<?= $this->Form->create($user); ?>
			<?= $this->Form->control('username',['label'=>'Login','placeholder'=>'Wpisz nazwę użytkownika.','required'=>true]) ?>
			<?= $this->Form->control('password',['label'=>'Hasło','placeholder'=>'Wpisz hasło.','required'=>true]) ?>
			<?= $this->Form->control('password_match' ,['type'=>'password','label'=>'Potwierdź hasło','placeholder'=>'Wpisz hasło.','required'=>true]) ?>
			<?= $this->Form->control('email',['label'=>'Email','placeholder'=>'Wpisz email.','required'=>true]) ?>
			<?= $this->Form->control('role',['label'=>'Wpisz typ konta','placeholder'=>'Wpisz kursant lub prowadzący','required'=>true]) ?>
			<?= $this->Form->submit('Zarejestruj', array('class' => 'button')); ?>
		<?= $this->Form->end(); ?>
	</div>
</div>
