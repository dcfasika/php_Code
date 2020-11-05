#!/usr/bin/php
<?PHP

#$data = snmp3_real_walk ('localhost', 'User3', 'authPriv', 'MD5', 'pwd123' , 'DES', 'pwd123', 'TIMETRA-VRTR-MIB::vRtrIfName') ;
$data = array('[ETRA-VRTR-MIB::vRtrIfName.1.1]' => 'STRING: "intf1"', '[ETRA-VRTR-MIB::vRtrIfName.1.2]' => 'STRING: "intf2"');

echo '<pre>';
print_r($data);

foreach($data as $key => $val) {
  $newval = explode(':',trim($val, 'STRING: '));
  $newkey = explode(' ',trim($key, '[ETRA-VRTR-MIB::vRtrIfName.]'));
  $data[$key] = $newval;
  echo '<pre>';
  print_r($newkey);
  }

echo '<pre>';
print_r($data);

?>
=========================================================================================================================
         OUtput
Array
(
    [0] => 1.1
)
Array
(
    [0] => 1.2
)
Array
(
    [[ETRA-VRTR-MIB::vRtrIfName.1.1]] => Array
        (
            [0] => "intf1"
        )

    [[ETRA-VRTR-MIB::vRtrIfName.1.2]] => Array
        (
            [0] => "intf2"
        )

)
