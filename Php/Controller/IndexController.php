<?php
/**
*
*/
class IndexController
{
	public function Index()
	{
		require'Php/Views/Index/Header.html';
		require'Php/Views/Index/LoadIndex.php';
		require'Php/Views/footer.html';
	}
}
?>