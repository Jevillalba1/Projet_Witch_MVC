<?php
/**
*
*/
class UserController
{
	public function Index()
	{
		require'Php/Views/User/Header.html';
		require'Php/Views/User/LoadIndex.php';
		require'Php/Views/footer.html';
	}
}
?>