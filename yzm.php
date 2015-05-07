<?php
	$v="9";
function vir($str)
{
	//echo $str;
	$s="bzxc";
	$str1=$s[0];
	$str2=$s[1];
	$str3=$s[2];
	$str4=$s[3];

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
//除燥
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
//除燥
	
	for($i=0;$i<$heigh;$i++)
	{
		for($j=0;$j<$width;$j++)
		{
			if($arrayrgb[$i][$j]["red"]<150)
				echo "■";
			else
				echo "□";	
				
		}
		echo "</br>";
	}
	
	echo "</br>";
	//11111111111111111111111111111111111111111111111
	echo "第一个字符</br>";
	$file=fopen($str1,"w+");
	for($a=0;$a<$heigh;$a++)
	{
		for($b=5;$b<13;$b++)
		{
			if($arrayrgb[$a][$b]["red"]<150)
				{
					echo "■";
					
					fwrite($file,"1");
				}
			else
			{
				echo "□";
				
				fwrite($file,"0");
			}
		}
				echo "</br>";
				//fwrite($file,"\r\n");
	}
			fclose($file);
	//11111111111111111111111111111111111111111111111
	//2222222222222222222222222222222222222222222222222
	echo "第二个字符</br>";
		$file=fopen($str2,"w+");
		for($a=0;$a<$heigh;$a++)
	{
		for($b=15;$b<23;$b++)
		{
			if($arrayrgb[$a][$b]["red"]<150)
				{
					echo "■";
					
					fwrite($file,"1");
				}
			else
			{
				echo "□";
				
				fwrite($file,"0");
			}
		}
				echo "</br>";
				//fwrite($file,"\r\n");
	}
			fclose($file);
		//2222222222222222222222222222222222222222222222222
	echo "第三个字符</br>";
	//////////////////3333333333333333333333333333333333333333
	$file=fopen($str3,"w+");
	for($a=0;$a<$heigh;$a++)
	{
		for($b=24;$b<32;$b++)
		{
			
				
			if($arrayrgb[$a][$b]["red"]<150)
				{
					echo "■";
					
					fwrite($file,"1");
				}
			else
			{
				echo "□";
				
				fwrite($file,"0");
			}
					
		}
				echo "</br>";
				//fwrite($file,"\r\n");
	}
		fclose($file);
	
		//////////////////3333333333333333333333333333333333333333
		//444444444444444444444444444444444444444444444444444444444
	echo "第四个字符</br>";
		$file=fopen($str4	,"w+");
	for($a=0;$a<$heigh;$a++)
	{
		for($b=35;$b<43;$b++)
		{
			if($arrayrgb[$a][$b]["red"]<150)
				{
					echo "■";
					
					fwrite($file,"1");
				}
			else
			{
				echo "□";
				
				fwrite($file,"0");
			}	
		}
				echo "</br>";
				//fwrite($file,"\r\n");
	}
	fclose($file);
}
		
		//444444444444444444444444444444444444444444444444444444444
		
	vir($v);
	for($pic=8;$pic<=8;++$pic)
	{
	//echo $pic;
		//vir($pic);
		echo "</br>";
	}
?>