<?php
require_once 'bigsum.php';

    function testSum($a, $b, $c)
    {
		$d= sbigsum($a, $b);
		if ($c==$d)
			echo  "{$a} + {$b} = {$c} [Ok] \n";
		else
			echo  "{$a} + {$b} is equal to {$d} a must be equal to {$c} [test failed]\n";
    }

    function providerSum ()
    {
        return array (
            array ('67485638234590837267', '19483746573847562094', '86969384808438399361'), 
            array ('84761234590837465093', '1298476345', '84761234592135941438'), 
            array ('8476251234', '19485762635409586738', '19485762643885837972'),
			array ('90745983756493210934', '', '90745983756493210934'),
			array ('', '74586910489723495867', '74586910489723495867'),
			array ('39578305832756490321', 'o1467329876', '-1'),
			array ('35783o97439', '868590445688904599678', '-1'),
			array ('', '', '-1'),
        ); 
    }

	foreach (providerSum() as $arr)
	{
		testSum($arr[0],$arr[1],$arr[2]);
		echo  str_repeat ('-',60)."\n";
	}
