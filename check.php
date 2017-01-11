 <?php  require_once('includes/classes/Category.php');
  require_once('includes/classes/SubCategory.php');
  $sub2 = new SubCategory();
				   $res2 = $sub2->fetchAllActiveSubCat(1);
				   while($rw= mysqli_fetch_assoc($res2)){
						echo  "<h4>{$rw['subcategoryname']}</h4>";
				   }
				   
				   ?>