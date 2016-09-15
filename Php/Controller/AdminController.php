<?php
/**
*
*/
class AdminController
{
	public function Index()
	{
		require'Php/Views/Admin/Header.html';
		require'Php/Views/Admin/LoadAdmin.php';
		require'Php/Views/footer.html';
	}
	public function Usuario_Excel()
	{
		require'Php/Model/Usuario/Usuario_Excel.php';
	}
	public function Usuario_Word()
	{
		require'Php/Model/Usuario/Usuario_Word.php';
	}
	public function Usuario_TXT()
	{
		require'Php/Model/Usuario/Usuario_Txt.php';
	}
	public function Usuario_PDF()
	{
		require'Php/Views/Admin/Header.html';
		require'Php/Views/Admin/Index.php';
	}
}
?>