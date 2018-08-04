<?php
//The function adds two numbers written by string type
//If one of the strings is empty, the function returns a non-empty string
//If both lines are empty, the function returns -1
//If one of the lines contains a non-numeric character, the function returns -1
function sbigsum(string $fnum, string $snum)
{
	
	$lf = strlen($fnum);
	$ls = strlen($snum);
	//Compare the length of two numbers
	if ($lf>$ls) //If the first is longer, then add the second zeros on the left
	{
		$len =$lf;
		$num1=$fnum;
		$num2=str_pad($snum, $len, '0', STR_PAD_LEFT);
	}
	elseif (($lf==$ls)&($ls>0))//If both numbers have equal length and it is greater than zero, then we leave it as it is
	{
		$len =$lf;
		$num1=$fnum;
		$num2=$snum;
	}
	elseif (($lf==$ls)&($ls==0))//If both numbers have equal length and it is zero, then replace the numbers with zeros
	{
		$len =1;
		$num1='о';
		$num2='0';
	}
	else //If the first number is shorter than the second to complete it with zeros on the left
	{
		$len =$ls;
		$num1=str_pad($fnum, $len, '0', STR_PAD_LEFT);
		$num2=$snum;
	}
	
	if ((!ctype_digit($num1))|(!ctype_digit($num2)))
	{
		return -1;
	}
	
	$ovr = 0;
	$result='';
	
	for ($i=$len-1; $i>=0; $i--)
	{
		$sm 	=  substr($num1,$i,1) + substr($num2,$i,1)  + $ovr ;
		if (strlen($sm)>1)
		{
			$result	=  substr($sm,1,1).$result;
			$ovr 	= substr($sm,0,1);
		}
		else
		{
			$result	=  $sm.$result;
			$ovr 	= 0;
		}
	}
	if ($ovr ==1) $result = '1'.$result;
	return $result;
}



