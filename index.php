<?php


//ȡ�����е��ַ�
	$words="123nxvbmcz";
	for($i=0;$i<10;$i++)
	{
		
		$word=$words[$i];
		fopen($word,"r");
		$$word=file_get_contents($word);
		//echo $$word;
	}
	$yzm="";//����4���ַ�
//ȡ�����е��ַ�



//�Ƚ�ƥ�亯��
function compare($word)
{
	

	global $words;
	global $yzm;
	for($i=0;$i<10;$i++)
	{
	global	$$words[$i];
	}
	
	
	$like=$words[0];
	$orginpercent=0;
	for($i=0;$i<10;$i++)
	{

		similar_text($word,$$words[$i],$percent);

		
		//echo "$word �� $words[$i]�����ƶ���:$percent\n";
		
		if($percent>$orginpercent)
		{
			$like=$words[$i];
			
			$orginpercent=$percent;
			//echo "like=$like";
			//echo "orginpercent=$orginpercent";			
			
		}
	}
	
	echo "�����Ƶ���$like</br>";
	$yzm.=$like;
}
//�Ƚ�ƥ�亯��



function vir($str)
{

	global $yzm;
	$yzm="";
	
	$images=imagecreatefromjpeg($str.".jpg");
	
	$size=getimagesize($str.".jpg");
	
	$width=$size[0];
	$heigh=$size[1];
	

	
	for($i=0;$i<$heigh;$i++)
	{
		for($j=0;$j<$width;$j++)
		{
			$rgb=imagecolorat($images,$j,$i);
			$arrayrgb[$i][$j]=imagecolorsforindex($images,$rgb);
		}
	}
//����
	for($i=0;$i<$heigh;$i++)
	{
		for($j=0;$j<$width;$j++)
		{
			if($i!=0&&$i!=21)
			if($arrayrgb[($i+1)][$j]["red"]>150&&$arrayrgb[($i-1)][$j]["red"]>150)
				$arrayrgb[$i][$j]["red"]=255;
				
		}
		echo "</br>";
	}
	
	
	
	
for($i=0;$i<$heigh;$i++)
	{
		for($j=0;$j<$width;$j++)
		{
			if($j!=0&&$j!=61)
			if($arrayrgb[($i)][$j+1]["red"]>150&&$arrayrgb[($i)][$j-1]["red"]>150)
				$arrayrgb[$i][$j]["red"]=255;
				
		}
		echo "</br>";
	}
//����
	
	for($i=0;$i<$heigh;$i++)
	{
		for($j=0;$j<$width;$j++)
		{
			if($arrayrgb[$i][$j]["red"]<150)
				echo "��";
			else
				echo "��";	
				
		}
		echo "</br>";
	}
	
	echo "</br>";
	//11111111111111111111111111111111111111111111111
	//echo "��һ���ַ�</br>";
	$s1="";
	
	for($a=0;$a<$heigh;$a++)
	{
		for($b=5;$b<13;$b++)
		{
			if($arrayrgb[$a][$b]["red"]<150)
				{
					echo "��";
					$s1.="1";
					
				}
			else
			{
				echo "��";
				$s1.="0";
				
			}
		}
				echo "</br>";
				
	}
			//echo $s1;
			compare($s1);
	//11111111111111111111111111111111111111111111111
	//2222222222222222222222222222222222222222222222222
	//echo "�ڶ����ַ�</br>";
		$s2="";
		for($a=0;$a<$heigh;$a++)
	{
		for($b=15;$b<23;$b++)
		{
			if($arrayrgb[$a][$b]["red"]<150)
				{
					echo "��";
					$s2.="1";
					
				}
			else
			{
				echo "��";
				$s2.="0";
				
			}
		}
				echo "</br>";
				
	}
			compare($s2);
		//2222222222222222222222222222222222222222222222222
	//echo "�������ַ�</br>";
	//////////////////3333333333333333333333333333333333333333
	$s3="";
	for($a=0;$a<$heigh;$a++)
	{
		for($b=24;$b<32;$b++)
		{
			
				
			if($arrayrgb[$a][$b]["red"]<150)
				{
					echo "��";
					$s3.="1";
					
				}
			else
			{
				echo "��";
				$s3.="0";
				
			}
					
		}
				echo "</br>";
				
				
	}
	compare($s3);
		//////////////////3333333333333333333333333333333333333333
		//444444444444444444444444444444444444444444444444444444444
	//echo "���ĸ��ַ�</br>";
		$s4="";
	for($a=0;$a<$heigh;$a++)
	{
		for($b=35;$b<43;$b++)
		{
			if($arrayrgb[$a][$b]["red"]<150)
				{
					echo "��";
					$s4.="1";
					
				}
			else
			{
				echo "��";
				
				$s4.="0";
			}	
		}
				echo "</br>";
				
	}
compare($s4);
echo "</br>";
echo "<img src=./".$str.".jpg>";
echo $yzm;
}
		
		//444444444444444444444444444444444444444444444444444444444
		
	
	for($i=10;$i<=20;$i++)
	{
		
		vir($i);
	}
	

?>