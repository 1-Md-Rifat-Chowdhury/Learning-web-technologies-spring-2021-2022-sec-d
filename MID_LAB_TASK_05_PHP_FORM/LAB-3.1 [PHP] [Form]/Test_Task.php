<?php



//print_r($_REQUEST);

if(isset($_REQUEST['submit']))

{

	if($_GET['username'] == null)

	{ 

		echo "Input right name";
	}
	else 
	{
		echo"Success";
	}

}

else
{
	echo"invalid";
}





?>
