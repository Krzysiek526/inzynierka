<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
<!-- definiowanie przyciskow opcji w pasku po zalogowaniu -->        
                <?php if($loggedIn) : ?>
                    
                    <li><?= $this->Html->link('Wróć na stronę główną', ['controller' => 'users', 'action' => 'start']);?></li>
                    <li><?= $this->Html->link('Wyloguj', ['controller' => 'users', 'action' => 'logout']);?></li> 
                    <!--<li><?= $this->Html->link('Strona Główna Admin', ['controller' => 'users', 'action' => 'startadmin']);?></li> 
                    <li><?= $this->Html->link('Strona Główna Teacher', ['controller' => 'users', 'action' => 'startteacher']);?></li> 
                    <li><?= $this->Html->link('Strona Główna User', ['controller' => 'users', 'action' => 'startuser']);?></li> -->
                    <!--odwoluje sie do strony tej ktora jest po zalogowaniu sie -->
                    
                    <!--wylogowanie przycisk + wylogowanie -->
                    <!--<li><?= $this->Html->link('OficjalnaCAKEPHP', ['controller' => 'pages', 'action' => 'home']);?></li> -->
                    <!-- po zalogowaniu w pasku mam oficjalna i daje mnei do folderu pages i podstrona home.ctp -->
                <?php else: ?>
                    <li><?= $this->Html->link('Logowanie', ['controller' => 'users', 'action' => 'login']);?></li>
                    <!-- przed zalgoowaniem przycisk logowanie -->
                    <li><?= $this->Html->link('Rejestracja', ['controller' => 'users', 'action' => 'register']);?></li>
                    <!-- przed zalogowaniem przycisk rejestracja -->
                <?php endif; ?>

                <!--<li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li> -->
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
