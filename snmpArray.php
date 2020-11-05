#!/usr/bin/php
<?PHP

$data = snmp3_real_walk ('localhost', 'User3', 'authPriv', 'MD5', 'pwd123' , 'DES', 'pwd123', 'TIMETRA-VRTR-MIB::vRtrIfName') ;

print_r($data);

foreach($data as $key => $val) {

$newval = explode(':',trim($val, 'STRING'));
$newkey = explode('.',trim($key, 'ETRA-VRTR-MIB::IfName'));
$data[$key] = $newval;
}
print_r($data);

?>
