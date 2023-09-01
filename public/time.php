<?php
$date = new DateTime();
echo $date->modify('1 years')->format('Y-m-d H:i:s');
