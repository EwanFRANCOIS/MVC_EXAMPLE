<?php

namespace modules\views;

/* Toujours en premier */

class HomepageView
{
    public function show(): void
    {
        //session_start();
        ob_start();
        ?>

            <header>
                <h1>TEMPLATE HOMEPAGE VIEW</h1>
            </header>

        <?php
        (new \modules\views\Layout('Bienvenue', ob_get_clean()))->show();
    }
}
?>