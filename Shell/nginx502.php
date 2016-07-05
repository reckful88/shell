<?php 
$url = 'http://preview.maijinwang.com/'; 
$cmd = '/etc/init.d/php-fpm restart'; 
  
for($i = 0; $i < 5; $i ++){ 
        $exec = "curl  connect-timeout 3 -I $url 2>/dev/null"; 
        $res = shell_exec($exec); 
  
        if(stripos($res, '502 Bad Gateway') !== false){ 
                shell_exec($cmd); 
                exit(); 
        } 
}
