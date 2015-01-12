<html>
<head></head>
<body>
<style>
table, td, th {
    border: 1px solid green;
}

th {
    background-color: green;
}
</style>

<?php 
		  echo ("<table>") ;
		 
		  for ($i=1;$i<=9;$i++)
		     {
			   echo ("<tr>") ;
			     for ($j=1;$j<=9;$j++)
			     {  
				     $s =$i*$j ;
			         //echo ("<td> $s </td>") ;
			         echo "<td>" . ($i * $j) . "</td>";
			     }
			   echo ("</tr>") ;
		     }
		  echo ("</table>") ;
		 ?>
		 </body>
		 </html>