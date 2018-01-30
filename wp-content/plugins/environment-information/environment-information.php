<?php
/*
    Plugin Name: Environment information
*/

function environmentInformationInit() {
    if (ENVIRONMENT !== 'production') {
        ?>
        <style>
            .environment-information {
                width: 300px;
                height: 80px;
                background: black;
                color: red;
                position: fixed;
                z-index: 99999;
                right: -81px;
                bottom: 28px;
                -webkit-transform: rotate(-45deg);
                -moz-transform: rotate(-45deg);
                -ms-transform: rotate(-45deg);
                -o-transform: rotate(-45deg);
                font-size: 35px;
                text-align: center;
                line-height: 35px;
                padding: 10px;
            }

        </style>

        <div class="environment-information">
            <span>ŚRODOWISKO TESTOWE</span>
        </div>

        <?php
    }
}
add_action('wp_head', 'environmentInformationInit');
add_action('admin_head', 'environmentInformationInit');
