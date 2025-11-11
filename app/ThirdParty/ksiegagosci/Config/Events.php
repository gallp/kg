<?php

namespace KsiegaGosci\Config;

use CodeIgniter\Events\Events;

Events::on('pre_system', function () {
    
    date_default_timezone_set( 'Europe/Warsaw' );
    
});
