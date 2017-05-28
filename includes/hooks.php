<?php

add_action(
            'plugins_loaded',
            function()
            {
                load_plugin_textdomain( 'vendi-cdn', false, basename( VENDI_CDN_DIR ) . '/languages' );
            }
        );
