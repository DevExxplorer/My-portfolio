<?php
    $word1 = ['C', 'l', 'é', 'm', 'e', 'n', 't'];
    $word2 = ['R', 'a', 'y', 'm', 'o', 'n', 'd'];
    $word3 = ['D', 'é', 'v', 'e', 'l', 'o', 'p', 'p', 'e', 'u', 'r'];
    $word4 = ['W', 'e', 'b'];
?>

<div class="home-hero">
    <div class="message">
        <span>Bienvenue sur le portfolio de</span>
    </div>
    <div class="row-1">
        <div  class="line-1">
            <?php
                foreach ($word1 as $letter) {
                    echo '
                        <div class="bloc">
                            <span>' .  $letter . '</span>
                        </div>
                    ';
                }
            ?>
        </div>
        <div  class="line-2">
            <?php
                foreach ($word2 as $letter) {
                    echo '
                        <div class="bloc">
                            <span>' .  $letter . '</span>
                        </div>
                    ';
                }
            ?>
        </div>
    </div>
    <div class="row-2">
        <div  class="line-1">
            <?php
                foreach ($word3 as $letter) {
                    echo '
                        <div class="bloc">
                            <span>' .  $letter . '</span>
                        </div>
                    ';
                }
            ?>
        </div>
        <div  class="line-2">
            <?php
                foreach ($word4 as $letter) {
                    echo '
                        <div class="bloc">
                            <span>' .  $letter . '</span>
                        </div>
                    ';
                }
            ?>
        </div>
    </div>
    <div class="line"></div>
</div>
