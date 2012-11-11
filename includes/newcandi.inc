<?
/*
*	處理新增候選人要求
	Process additional canditate request
*/
if(isset($_POST['submit']))
{
	if(isset($_POST['name'])){
		$name = $_POST['name'];
		if(isset($_POST['depart']){
			$depart = $_POST['depart'];
			if(isset($_POST['grade'])){
				$birth = $_POST['grade'];
				if(isset($_POST['birth'])){
					$birth = $_POST['birth'];
					$cstl = constellation($birth);
				}
				else
					$errmg = "請輸入生日"
			}
			else
				$errmg = "請輸入年級";
		}
		else
			$errmg = "請輸入系別";
	}
	else
		$errmg = "請輸入名字";
}



?>
