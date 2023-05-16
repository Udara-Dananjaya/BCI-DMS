<?php
class Admin
{
    public function __construct()
    {
        //  if (empty($_SESSION['USER'])) {
        //     redirect('Auth/login');
        // } // Check Is the user Login
    }
    use Controller;
    public function index()
    {
       
        $staff = new Demo_model; // Load Model
        $staff->set_table('staff'); // Set Model Table
        $data['page'] = "Dashboard"; // Page URL
        $data['pagegroup'] = ""; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $row = $staff->custom_query("SELECT COUNT('id') as COUNT FROM `staff`");
        $data['Dashboard'] = array("student" => "{$row[0]->COUNT}");
        $row = $staff->findAll();
        $data['Dashboard_table'] = $row;
        $this->view('Admin/index', $data);
    }

    public function Manage_Staff()
    {
        $data = [];
        $data['page'] = "Manage Staff"; // Page URL
        $data['pagegroup'] = "StaffManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new Demo_model;
            $user->set_table('users');
            $insert_data = array("email" => $_POST['inputEmail'], "password" => $_POST['inputPassword']);
            $user->insert($insert_data);
            redirect('Admin/Outlook_Staff');
        }
        $this->view('Admin/Manage_Staff', $data);
    }

    public function Update_Staff()
    {
        $data = [];
        $data['page'] = "Update Staff"; // Page URL
        $data['pagegroup'] = "StaffManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new Demo_model;
            $user->set_table('users');
            $update_data = array("email" => $_POST['inputEmail'], "password" => $_POST['inputPassword'], "date" => $_POST['inputDate']);
            $user->update($_POST['inputId'], $update_data, "id");
            redirect('Admin/Outlook_Staff');
        }

        if (!empty($_GET['id'])) {
            $user = new Demo_model;
            $user->set_table('users');
            $arr['id'] = $_GET['id'];
            $data['Manage_User'] = $user->first($arr);
            $this->view('Admin/Update_Staff', $data);
        } else {
            redirect('Admin/Outlook_Staff');
        }
    }

    public function Outlook_Staff()
    {
        $user = new Demo_model; // Load Model
        $user->set_table('users'); // Set Model Table
        $data['page'] = "Outlook Staff"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $row = $user->findAll();
        $data['Usres_table'] = $row;
        $this->view('Admin/Outlook_Staff', $data);
    }

    public function Delete_Staff()
    {
        $data = [];
        $data['page'] = "Delete User"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $user = new Demo_model;
        $user->set_table('users');
        $row = $user->custom_query("SELECT id,email FROM `users`;");
		$data['User_table'] = $row;

        if (!empty($_GET['delete'])) {
            $user->delete($_GET['delete']);
            redirect('Admin/Outlook_Staff');
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $insert_data = array("email" => $_POST['inputEmail'], "password" => $_POST['inputPassword']);
            $user->insert($insert_data);
            redirect('Admin/Outlook_Staff');
        }


        $this->view('Admin/Outlook_Staff', $data);
    }

    public function Manage_Department()
    {
        $data = [];
        $data['page'] = "Manage Department"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new Demo_model;
            $user->set_table('users');
            $insert_data = array("email" => $_POST['inputEmail'], "password" => $_POST['inputPassword']);
            $user->insert($insert_data);
            redirect('Admin/Outlook_Department');
        }
        $this->view('Admin/Manage_Department', $data);
    }

    public function Update_Department()
    {
        $data = [];
        $data['page'] = "Update Department"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new Demo_model;
            $user->set_table('users');
            $update_data = array("email" => $_POST['inputEmail'], "password" => $_POST['inputPassword'], "date" => $_POST['inputDate']);
            $user->update($_POST['inputId'], $update_data, "id");
            redirect('Admin/Outlook_Department');
        }

        if (!empty($_GET['id'])) {
            $user = new Demo_model;
            $user->set_table('users');
            $arr['id'] = $_GET['id'];
            $data['Manage_User'] = $user->first($arr);
            $this->view('Admin/Update_Department', $data);
        } else {
            redirect('Admin/Outlook_Department');
        }
    }

    public function Outlook_Department()
    {
        $user = new Demo_model; // Load Model
        $user->set_table('users'); // Set Model Table
        $data['page'] = "Outlook Department"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $row = $user->findAll();
        $data['Usres_table'] = $row;
        $this->view('Admin/Outlook_Department', $data);
    }

    public function Delete_Department()
    {
        $data = [];
        $data['page'] = "Delete Department"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $user = new Demo_model;
        $user->set_table('users');
        $row = $user->custom_query("SELECT id,email FROM `users`;");
		$data['User_table'] = $row;

        if (!empty($_GET['delete'])) {
            $user->delete($_GET['delete']);
            redirect('Admin/Outlook_Department');
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $insert_data = array("email" => $_POST['inputEmail'], "password" => $_POST['inputPassword']);
            $user->insert($insert_data);
            redirect('Admin/Outlook_Department');
        }


        $this->view('Admin/Delete_Department', $data);
    }
    
    public function Manage_Degree()
    {
        $data = [];
        $data['page'] = "Manage Degree"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new Demo_model;
            $user->set_table('users');
            $insert_data = array("email" => $_POST['inputEmail'], "password" => $_POST['inputPassword']);
            $user->insert($insert_data);
            redirect('Admin/Outlook_Degree');
        }
        $this->view('Admin/Manage_Degree', $data);
    }

    public function Update_Degree()
    {
        $data = [];
        $data['page'] = "Update Degree"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new Demo_model;
            $user->set_table('users');
            $update_data = array("email" => $_POST['inputEmail'], "password" => $_POST['inputPassword'], "date" => $_POST['inputDate']);
            $user->update($_POST['inputId'], $update_data, "id");
            redirect('Admin/Outlook_Degree');
        }

        if (!empty($_GET['id'])) {
            $user = new Demo_model;
            $user->set_table('users');
            $arr['id'] = $_GET['id'];
            $data['Manage_User'] = $user->first($arr);
            $this->view('Admin/Update_Degree', $data);
        } else {
            redirect('Admin/Outlook_Degree');
        }
    }

    public function Outlook_Degree()
    {
        $user = new Demo_model; // Load Model
        $user->set_table('users'); // Set Model Table
        $data['page'] = "Outlook Degree"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $row = $user->findAll();
        $data['Usres_table'] = $row;
        $this->view('Admin/Outlook_Degree', $data);
    }

    public function Delete_Degree()
    {
        $data = [];
        $data['page'] = "Delete Degree"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $user = new Demo_model;
        $user->set_table('users');
        $row = $user->custom_query("SELECT id,email FROM `users`;");
		$data['User_table'] = $row;

        if (!empty($_GET['delete'])) {
            $user->delete($_GET['delete']);
            redirect('Admin/Outlook_Degree');
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $insert_data = array("email" => $_POST['inputEmail'], "password" => $_POST['inputPassword']);
            $user->insert($insert_data);
            redirect('Admin/Outlook_Degree');
        }


        $this->view('Admin/Delete_Degree', $data);
    }
      
    public function Manage_Batch()
    {
        $data = [];
        $data['page'] = "Manage Batch"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new Demo_model;
            $user->set_table('users');
            $insert_data = array("email" => $_POST['inputEmail'], "password" => $_POST['inputPassword']);
            $user->insert($insert_data);
            redirect('Admin/Outlook_Batch');
        }
        $this->view('Admin/Manage_Batch', $data);
    }

    public function Update_Batch()
    {
        $data = [];
        $data['page'] = "Update Batch"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new Demo_model;
            $user->set_table('users');
            $update_data = array("email" => $_POST['inputEmail'], "password" => $_POST['inputPassword'], "date" => $_POST['inputDate']);
            $user->update($_POST['inputId'], $update_data, "id");
            redirect('Admin/Outlook_Batch');
        }

        if (!empty($_GET['id'])) {
            $user = new Demo_model;
            $user->set_table('users');
            $arr['id'] = $_GET['id'];
            $data['Manage_User'] = $user->first($arr);
            $this->view('Admin/Update_Batch', $data);
        } else {
            redirect('Admin/Outlook_Batch');
        }
    }

    public function Outlook_Batch()
    {
        $user = new Demo_model; // Load Model
        $user->set_table('users'); // Set Model Table
        $data['page'] = "Outlook Batch"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $row = $user->findAll();
        $data['Usres_table'] = $row;
        $this->view('Admin/Outlook_Batch', $data);
    }

    public function Delete_Batch()
    {
        $data = [];
        $data['page'] = "Delete Batch"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $user = new Demo_model;
        $user->set_table('users');
        $row = $user->custom_query("SELECT id,email FROM `users`;");
		$data['User_table'] = $row;

        if (!empty($_GET['delete'])) {
            $user->delete($_GET['delete']);
            redirect('Admin/Outlook_Batch');
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $insert_data = array("email" => $_POST['inputEmail'], "password" => $_POST['inputPassword']);
            $user->insert($insert_data);
            redirect('Admin/Outlook_Batch');
        }


        $this->view('Admin/Delete_Batch', $data);
    }
          
    public function Manage_Semester()
    {
        $data = [];
        $data['page'] = "Manage Semester"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new Demo_model;
            $user->set_table('users');
            $insert_data = array("email" => $_POST['inputEmail'], "password" => $_POST['inputPassword']);
            $user->insert($insert_data);
            redirect('Admin/Outlook_Semester');
        }
        $this->view('Admin/Manage_Semester', $data);
    }

    public function Update_Semester()
    {
        $data = [];
        $data['page'] = "Update Semester"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new Demo_model;
            $user->set_table('users');
            $update_data = array("email" => $_POST['inputEmail'], "password" => $_POST['inputPassword'], "date" => $_POST['inputDate']);
            $user->update($_POST['inputId'], $update_data, "id");
            redirect('Admin/Outlook_Semester');
        }

        if (!empty($_GET['id'])) {
            $user = new Demo_model;
            $user->set_table('users');
            $arr['id'] = $_GET['id'];
            $data['Manage_User'] = $user->first($arr);
            $this->view('Admin/Update_Semester', $data);
        } else {
            redirect('Admin/Outlook_Semester');
        }
    }

    public function Outlook_Semester()
    {
        $user = new Demo_model; // Load Model
        $user->set_table('users'); // Set Model Table
        $data['page'] = "Outlook Semester"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $row = $user->findAll();
        $data['Usres_table'] = $row;
        $this->view('Admin/Outlook_Semester', $data);
    }

    public function Delete_Semester()
    {
        $data = [];
        $data['page'] = "Delete Semester"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $user = new Demo_model;
        $user->set_table('users');
        $row = $user->custom_query("SELECT id,email FROM `users`;");
		$data['User_table'] = $row;

        if (!empty($_GET['delete'])) {
            $user->delete($_GET['delete']);
            redirect('Admin/Outlook_Semester');
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $insert_data = array("email" => $_POST['inputEmail'], "password" => $_POST['inputPassword']);
            $user->insert($insert_data);
            redirect('Admin/Outlook_Semester');
        }


        $this->view('Admin/Delete_Semester', $data);
    }
              
    public function Manage_Course()
    {
        $data = [];
        $data['page'] = "Manage Course"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new Demo_model;
            $user->set_table('users');
            $insert_data = array("email" => $_POST['inputEmail'], "password" => $_POST['inputPassword']);
            $user->insert($insert_data);
            redirect('Admin/Outlook_Course');
        }
        $this->view('Admin/Manage_Course', $data);
    }

    public function Update_Course()
    {
        $data = [];
        $data['page'] = "Update Course"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new Demo_model;
            $user->set_table('users');
            $update_data = array("email" => $_POST['inputEmail'], "password" => $_POST['inputPassword'], "date" => $_POST['inputDate']);
            $user->update($_POST['inputId'], $update_data, "id");
            redirect('Admin/Outlook_Course');
        }

        if (!empty($_GET['id'])) {
            $user = new Demo_model;
            $user->set_table('users');
            $arr['id'] = $_GET['id'];
            $data['Manage_User'] = $user->first($arr);
            $this->view('Admin/Update_Course', $data);
        } else {
            redirect('Admin/Outlook_Course');
        }
    }

    public function Outlook_Course()
    {
        $user = new Demo_model; // Load Model
        $user->set_table('users'); // Set Model Table
        $data['page'] = "Outlook Course"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $row = $user->findAll();
        $data['Usres_table'] = $row;
        $this->view('Admin/Outlook_Course', $data);
    }

    public function Delete_Course()
    {
        $data = [];
        $data['page'] = "Outlook Course"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $user = new Demo_model;
        $user->set_table('users');
        $row = $user->custom_query("SELECT id,email FROM `users`;");
		$data['User_table'] = $row;

        if (!empty($_GET['delete'])) {
            $user->delete($_GET['delete']);
            redirect('Admin/Outlook_Course');
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $insert_data = array("email" => $_POST['inputEmail'], "password" => $_POST['inputPassword']);
            $user->insert($insert_data);
            redirect('Admin/Outlook_Course');
        }


        $this->view('Admin/Delete_Course', $data);
    }
                  
    public function Manage_Award()
    {
        $data = [];
        $data['page'] = "Manage Award"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new Demo_model;
            $user->set_table('users');
            $insert_data = array("email" => $_POST['inputEmail'], "password" => $_POST['inputPassword']);
            $user->insert($insert_data);
            redirect('Admin/Outlook_Award');
        }
        $this->view('Admin/Manage_Award', $data);
    }

    public function Update_Award()
    {
        $data = [];
        $data['page'] = "Update Award"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new Demo_model;
            $user->set_table('users');
            $update_data = array("email" => $_POST['inputEmail'], "password" => $_POST['inputPassword'], "date" => $_POST['inputDate']);
            $user->update($_POST['inputId'], $update_data, "id");
            redirect('Admin/Outlook_Award');
        }

        if (!empty($_GET['id'])) {
            $user = new Demo_model;
            $user->set_table('users');
            $arr['id'] = $_GET['id'];
            $data['Manage_User'] = $user->first($arr);
            $this->view('Admin/Update_Award', $data);
        } else {
            redirect('Admin/Outlook_Award');
        }
    }

    public function Outlook_Award()
    {
        $user = new Demo_model; // Load Model
        $user->set_table('users'); // Set Model Table
        $data['page'] = "Outlook Award"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $row = $user->findAll();
        $data['Usres_table'] = $row;
        $this->view('Admin/Outlook_Award', $data);
    }

    public function Delete_Award()
    {
        $data = [];
        $data['page'] = "Delete Award"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $user = new Demo_model;
        $user->set_table('users');
        $row = $user->custom_query("SELECT id,email FROM `users`;");
		$data['User_table'] = $row;

        if (!empty($_GET['delete'])) {
            $user->delete($_GET['delete']);
            redirect('Admin/Outlook_Award');
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $insert_data = array("email" => $_POST['inputEmail'], "password" => $_POST['inputPassword']);
            $user->insert($insert_data);
            redirect('Admin/Outlook_Award');
        }


        $this->view('Admin/Delete_Award', $data);
    }
                  
    public function Manage_Student()
    {
        $data = [];
        $data['page'] = "Manage Student"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new Demo_model;
            $user->set_table('users');
            $insert_data = array("email" => $_POST['inputEmail'], "password" => $_POST['inputPassword']);
            $user->insert($insert_data);
            redirect('Admin/Outlook_Student');
        }
        $this->view('Admin/Manage_Student', $data);
    }

    public function Update_Student()
    {
        $data = [];
        $data['page'] = "Update Student"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new Demo_model;
            $user->set_table('users');
            $update_data = array("email" => $_POST['inputEmail'], "password" => $_POST['inputPassword'], "date" => $_POST['inputDate']);
            $user->update($_POST['inputId'], $update_data, "id");
            redirect('Admin/Outlook_Student');
        }

        if (!empty($_GET['id'])) {
            $user = new Demo_model;
            $user->set_table('users');
            $arr['id'] = $_GET['id'];
            $data['Manage_User'] = $user->first($arr);
            $this->view('Admin/Update_Student', $data);
        } else {
            redirect('Admin/Outlook_Student');
        }
    }

    public function Outlook_Student()
    {
        $user = new Demo_model; // Load Model
        $user->set_table('users'); // Set Model Table
        $data['page'] = "Outlook Student"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $row = $user->findAll();
        $data['Usres_table'] = $row;
        $this->view('Admin/Outlook_Student', $data);
    }

    public function Delete_Student()
    {
        $data = [];
        $data['page'] = "Delete Student"; // Page URL
        $data['pagegroup'] = "UserManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $user = new Demo_model;
        $user->set_table('users');
        $row = $user->custom_query("SELECT id,email FROM `users`;");
		$data['User_table'] = $row;

        if (!empty($_GET['delete'])) {
            $user->delete($_GET['delete']);
            redirect('Admin/Outlook_Student');
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $insert_data = array("email" => $_POST['inputEmail'], "password" => $_POST['inputPassword']);
            $user->insert($insert_data);
            redirect('Admin/Outlook_Student');
        }


        $this->view('Admin/Delete_Student', $data);
    }

    public function Profile()
    {
        
    }

    public function Settings()
    {
        
    }

    public function Logout()
    {
        if (!empty($_SESSION['USER'])) unset($_SESSION['USER']);
        if (empty($_SESSION['USER'])) {
            redirect('Auth/login');
        }
    }
}