<?php
class DB extends DBmysql {
   public $dbhost = 'mysql';
   public $dbuser = 'root';
   public $dbpassword = 'azerty';
   public $dbdefault = 'db_glpi';
   public $use_timezones = true;
   public $use_utf8mb4 = true;
   public $allow_myisam = false;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}
