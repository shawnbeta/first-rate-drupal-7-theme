<?php print theme('links__system_main_menu', array(
        'links' => $main_menu,
        'attributes' => array(
            'id' => 'main-menu',
            'class' => array(
                'links', 'inline', 'clearfix')
        ),
        'heading' => t('Main menu')
    )
);  ?>