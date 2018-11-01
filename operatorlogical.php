<?php 
$varA= $_POST['a'];
$varTes=$_POST['Tes'];
$varB = $_POST['b'];
echo "$varA $varTes $varB ";
if($varA=="true")
		{	
			$varA=1;
		}else
			{
				$varA=0;	
			}
		if($varB=="true")
		{	
			$varB=1;
		}else
			{
				$varB=0;	
			}
			if($varTes=="and")
				{
					if($varA==$varB)
								{echo "= true";}
								else
									{echo "= false";}	
				}
				elseif ($varTes=="or") 
						{
							
							
							if ($varA||$varB)
								{echo "= true";}	
								else
									{echo "= false";}
							
						}
						elseif ($varTes=="xor") 	
						{
							if($varA^$varB)
								{echo "= true";}
								else
									{echo "= false";}	
							
						}							
						else{	
								
					 							if($varA!= $varB)
													{echo "= true";}
													else
														{echo "= false";}	
												
											
							}									
?>
