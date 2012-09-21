<?

	if(isset($_SESSION['admin_id']))
	{
		header('Location: index.php?p=admin.campus');
		exit;
	}

	if(isset($_POST['username']) && isset($_POST['password']))
	{	
		$username = $_POST['username'];
		$password = $_POST['password'];

		
			$rs=myQ("select * from admins where admin_email='".$username."' and admin_password='".$password."' ");
			if($row=myFA($rs)){
					$_SESSION['admin_id'] = $row['admin_id'];
					//$_SESSION['user_type'] = $row['user_type'];
					$_SESSION['admin_email']=$row['admin_email'];
					//$msg = 'Login Successfull';
					//$_SESSION['msg'] = 'Login Successfull';
					header('Location: index.php?p=admin.campus');
					//unset($_SESSION['msg']);
					exit();
			}
			else
			{
				//$error="Invalid User Name or Password!!";
				//$smarty->assign("msg",$error);
				
				$_SESSION['msg'] = "Username or Password Incorrect";
				header("Location: index.php?p=admin.login");
				//unset($_SESSION['msg']);
				exit;
			} 	

	}
	
?>