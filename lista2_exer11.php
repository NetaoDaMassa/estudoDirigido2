<?php
print "Insira um valor menor que 1000: \n";
$valor= (int) fgets (STDIN);

if (strlen ($valor)==3){ 
	
	$centena= substr($valor, 0,1); 
	$dezena= substr($valor, 1,1);
	$unidade= substr($valor, 2,2);
	
	if ($centena>1){
		
		if ($dezena>1){
				if ($unidade==1){
					print "$centena centenas, $dezena dezenas e $unidade unidade. \n ";}
				elseif ($unidade>1){
					print "$centena centenas, $dezena dezenas e $unidade unidades. \n ";}
				elseif ($unidade==0){
					print "$centena centenas e $dezena dezenas. \n ";}
				} 	
		elseif ($dezena==0){
				if ($unidade==1){
					print "$centena centenas e $unidade unidade. \n ";
				}
				elseif ($unidade>1){
					print "$centena centenas e $unidade unidades. \n ";
				}
				elseif ($unidade==0){
					print "$centena centenas. \n ";	
				}
		}		
   		elseif($dezena==1){
				if ($unidade==1){
					print "$centena centena, $dezena dezena e $unidade unidade. \n ";
				}
				elseif ($unidade>1){
					print "$centena centena, $dezena dezena e $unidade unidades. \n ";
				}
				elseif ($unidade==0){
					print "$centena centena, $dezena dezena. \n ";
				}
		}		
	elseif ($centena==1){
		if ($dezena>1)
		{
			
				if ($unidade==1){
					print "$centena centena, $dezena dezenas e $unidade unidade. \n ";
				}
				elseif ($unidade>1){
					print "$centena centena, $dezena dezenas e $unidade unidades. \n ";
				}
				elseif ($unidade==0){
					print "$centena centena e $dezena dezenas. \n ";
				}
			    }
			
		
		elseif ($dezena==0)
		{
				
			    if ($unidade==1){
					print "$centena centena e $unidade unidade. \n ";
				}
				elseif ($unidade>1){
					print "$centena centena e $unidade unidades. \n ";
				}
				elseif ($unidade==0){
					print "$centena centena. \n ";	
				}
				}
		
		
		elseif($dezena==1)
		{
				
				if ($unidade==1){
					print "$centena centena, $dezena dezena e $unidade unidade. \n ";
				}
				elseif ($unidade>1){
					print "$centena centena, $dezena dezena e $unidade unidades. \n ";
				}
				elseif ($unidade==0){
					print "$centena centena e $dezena dezena. \n ";
				}
			              }
		             }
		
	}
}	

elseif (strlen ($valor)==2){
	
	$dezena= substr($valor, 0,1);
	$unidade= substr($valor, 1,1);
	
	if ($dezena>1){
		
		if ($unidade==1){
		print "$dezena dezenas e $unidade unidade. \n";}
	   elseif ($unidade>1){
		print "$dezena dezenas e $unidade unidades. \n";}
	   elseif ($unidade==0){
		print "$dezena dezenas. \n";}
   }
   
   elseif ($dezena==1){
	   
	if ($unidade==1){
		print "$dezena dezena e $unidade unidade.";}
	   elseif ($unidade>1){
		print "$dezena dezena e $unidade unidades.";}
	   
		elseif ($unidade==0){
		print "$dezena dezena. \n";}
}
}

elseif (strlen ($valor)==1){
	
	$unidade= substr($valor, 0);
	
	if ($unidade==1){
		print "$unidade unidade. \n";}
	elseif ($unidade>1){
	   print "$unidade unidades. \n";}
}