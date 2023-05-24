<?php 

class Auth
{
	use Controller;
	
	public function index()
	{
        if (empty($_SESSION['USER'])) {
            redirect('Auth/login');
        }
	}

    public function login()
    {
        $data = []; //Create View Data Array
        if (!empty($_SESSION['USER'])) { //Check Session
            switch ($_SESSION['USER']->usertype) {
                case 'Administrator':
                    redirect('Administrator/index');
                    break;
                case 'Admin':
                    redirect('Admin/index');
                    break;
                 case 'User':
                    redirect('User/index');
                    break;
                default:
                    redirect('User/index');
                    break;
            }
        }
        if ($_SERVER['REQUEST_METHOD'] == "POST") { // If POST Data Available 
            $staff = new Demo_model; //Create Model Object
            $staff->set_table('staff'); //Set Table
            $arr['email'] = $_POST['first_name']; // 
            $row = $staff->first($arr);
            if ($row) {
                if ($row->password === $_POST['password']) {
                    
                    $_SESSION['USER'] = $row;

                    switch ($_SESSION['USER']->usertype) {
                        case 'Administrator':
                            redirect('Administrator/index');
                            break;
                        case 'Admin':
                            redirect('Admin/index');
                            break;
                         case 'User':
                            redirect('User/index');
                            break;
                        default:
                            redirect('User/index');
                            break;
                    }
                }
            }
            $staff->errors['email'] = "Wrong email or password";
            $data['errors'] = $staff->errors;
        }
        $this->view('login', $data);
    }
}
