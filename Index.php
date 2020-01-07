<?php

/**
 * 自动加载，处理逻辑
 */

require 'Loader.php';
spl_autoload_register('Loader::__autoload');