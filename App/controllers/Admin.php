<?php
class Admin
{
    public function __construct()
    {
          //if (empty($_SESSION['USER'])) {
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
        $data['Student_table'] = $row;
        $this->view('Admin/index', $data);
    }

    public function Create_Degree()
    {
        $data = [];
        $data['page'] = "Create Degree"; // Page URL
        $data['pagegroup'] = "DegreeManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $degree = new Demo_model;
            $degree->set_table('degree');
            $insert_data = array("degree_name" => $_POST['inputEmail']);
            $degree->insert($insert_data);
            redirect('Admin/Manage_Degree');
        }
        $this->view('Admin/Create_Degree', $data);
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
            redirect('Admin/Manage_Degree');
        }

        if (!empty($_GET['id'])) {
            $user = new Demo_model;
            $user->set_table('users');
            $arr['id'] = $_GET['id'];
            $data['Create_User'] = $user->first($arr);
            $this->view('Admin/Update_Degree', $data);
        } else {
            redirect('Admin/Manage_Degree');
        }
    }

    public function Manage_Degree()
    {
        $data['page'] = "Manage Degree"; // Page URL
        $data['pagegroup'] = "DegreeManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $degree = new Demo_model; // Load Model
        $data['Degree_table'] =  $degree->custom_query(
            "SELECT * FROM `degree` LEFT JOIN `department`  ON degree.dep_id = department.dep_id LEFT JOIN `staff`  ON degree.dep_id = staff.dep_id"
        );
        $this->view('Admin/Manage_Degree', $data);
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            if (isset($_GET['delete'])) {
                $degree->set_table('degree');
                $degree->delete($_GET['id'], "deg_id");
                route_url('Admin/Manage_Degree');
            }
        }
    }
      
    public function Create_Batch()
    {
        $data = [];
        $data['page'] = "Manage Batch"; // Page URL
        $data['pagegroup'] = "BatchManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new Demo_model;
            $user->set_table('users');
            $insert_data = array("email" => $_POST['inputEmail'], "password" => $_POST['inputPassword']);
            $user->insert($insert_data);
            redirect('Admin/Manage_Batch');
        }
        $this->view('Admin/Create_Batch', $data);
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
            redirect('Admin/Manage_Batch');
        }

        if (!empty($_GET['id'])) {
            $user = new Demo_model;
            $user->set_table('users');
            $arr['id'] = $_GET['id'];
            $data['Create_User'] = $user->first($arr);
            $this->view('Admin/Update_Batch', $data);
        } else {
            redirect('Admin/Manage_Batch');
        }
    }

    public function Manage_Batch()
    {
        $data['page'] = "Manage Batch"; // Page URL
        $data['pagegroup'] = "BatchManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $batch = new Demo_model; // Load Model
        $data['Batch_table'] =  $batch->custom_query(
            "SELECT * FROM `batch` LEFT JOIN `degree`  ON batch.deg_id = degree.deg_id"
        );
        $this->view('Admin/Manage_Batch', $data);
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            if (isset($_GET['delete'])) {
                $batch->set_table('batch');
                $batch->delete($_GET['id'], "batch_id");
                route_url('Admin/Manage_Batch');
            }
        }
    }
          
    public function Create_Semester()
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
            redirect('Admin/Manage_Semester');
        }
        $this->view('Admin/Create_Semester', $data);
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
            redirect('Admin/Manage_Semester');
        }

        if (!empty($_GET['id'])) {
            $user = new Demo_model;
            $user->set_table('users');
            $arr['id'] = $_GET['id'];
            $data['Create_User'] = $user->first($arr);
            $this->view('Admin/Update_Semester', $data);
        } else {
            redirect('Admin/Manage_Semester');
        }
    }

    public function Manage_Semester()
    {
        $data['page'] = "Manage Semester"; // Page URL
        $data['pagegroup'] = "SemesterManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $semster = new Demo_model; // Load Model
        $data['Semester_table'] =  $semster->custom_query(
            "SELECT * FROM `semester`"
        );
        $this->view('Admin/Manage_Semester', $data);
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            if (isset($_GET['delete'])) {
                $semster->set_table('semester');
                $semster->delete($_GET['id'], "semester_id");
                route_url('Admin/Manage_Semester');
            }
        }
    }
              
    public function Create_Course()
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
            redirect('Admin/Manage_Course');
        }
        $this->view('Admin/Create_Course', $data);
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
            redirect('Admin/Manage_Course');
        }

        if (!empty($_GET['id'])) {
            $user = new Demo_model;
            $user->set_table('users');
            $arr['id'] = $_GET['id'];
            $data['Create_User'] = $user->first($arr);
            $this->view('Admin/Update_Course', $data);
        } else {
            redirect('Admin/Manage_Course');
        }
    }

    public function Manage_Course()
    {
        $data['page'] = "Manage Course"; // Page URL
        $data['pagegroup'] = "CourseManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $semster = new Demo_model; // Load Model
        $data['Course_table'] =  $semster->custom_query(
            "SELECT * FROM `course` LEFT JOIN `semester`  ON course.sem_id = semester.sem_id"
        );
        $this->view('Admin/Manage_Course', $data);
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            if (isset($_GET['delete'])) {
                $semster->set_table('course');
                $semster->delete($_GET['id'], "course_id");
                route_url('Admin/Manage_Course');
            }
        }
    }

    public function Create_Department()
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
            redirect('Admin/Manage_Department');
        }
        $this->view('Admin/Create_Department', $data);
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
            redirect('Admin/Manage_Department');
        }

        if (!empty($_GET['id'])) {
            $user = new Demo_model;
            $user->set_table('users');
            $arr['id'] = $_GET['id'];
            $data['Create_User'] = $user->first($arr);
            $this->view('Admin/Update_Department', $data);
        } else {
            redirect('Admin/Manage_Department');
        }
    }

    public function Manage_Department()
    {
        $data['page'] = "Manage Department"; // Page URL
        $data['pagegroup'] = "DepartmentManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $department = new Demo_model; // Load Model
        $data['Department_table'] =  $department->custom_query(
            "SELECT * FROM `department`"
        );
        $this->view('Admin/Manage_Department', $data);
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            if (isset($_GET['delete'])) {
                $department->set_table('department');
                $department->delete($_GET['id'], "dep_id");
                route_url('Admin/Manage_Department');
            }
        }
    }

    public function Create_Staff()
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
            redirect('Admin/Manage_Staff');
        }
        $this->view('Admin/Create_Staff', $data);
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
            redirect('Admin/Manage_Staff');
        }

        if (!empty($_GET['id'])) {
            $user = new Demo_model;
            $user->set_table('users');
            $arr['id'] = $_GET['id'];
            $data['Create_User'] = $user->first($arr);
            $this->view('Admin/Update_Staff', $data);
        } else {
            redirect('Admin/Manage_Staff');
        }
    }

    public function Manage_Staff()
    {
        $data['page'] = "Manage Staff"; // Page URL
        $data['pagegroup'] = "StaffManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $semster = new Demo_model; // Load Model
        $data['Staff_table'] =  $semster->custom_query(
            "SELECT * FROM `staff`"
        );
        $this->view('Admin/Manage_Staff', $data);
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            if (isset($_GET['delete'])) {
                $semster->set_table('staff');
                $semster->delete($_GET['id'], "staff_id");
                route_url('Admin/Manage_Staff');
            }
        }
    }

    public function Create_Award()
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
            redirect('Admin/Manage_Award');
        }
        $this->view('Admin/Create_Award', $data);
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
            redirect('Admin/Manage_Award');
        }

        if (!empty($_GET['id'])) {
            $user = new Demo_model;
            $user->set_table('users');
            $arr['id'] = $_GET['id'];
            $data['Create_User'] = $user->first($arr);
            $this->view('Admin/Update_Award', $data);
        } else {
            redirect('Admin/Manage_Award');
        }
    }

    public function Manage_Award()
    {
        $data['page'] = "Manage Award"; // Page URL
        $data['pagegroup'] = "AwardManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $semster = new Demo_model; // Load Model
        $data['Award_table'] =  $semster->custom_query(
            "SELECT * FROM `award`"
        );
        $this->view('Admin/Manage_Award', $data);
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            if (isset($_GET['delete'])) {
                $semster->set_table('award');
                $semster->delete($_GET['id'], "Award_id");
                route_url('Admin/Manage_Award');
            }
        }
    }

    public function Create_Student()
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
            redirect('Admin/Manage_Student');
        }
        $this->view('Admin/Create_Student', $data);
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
            redirect('Admin/Manage_Student');
        }

        if (!empty($_GET['id'])) {
            $user = new Demo_model;
            $user->set_table('users');
            $arr['id'] = $_GET['id'];
            $data['Create_User'] = $user->first($arr);
            $this->view('Admin/Update_Student', $data);
        } else {
            redirect('Admin/Manage_Student');
        }
    }

    public function Manage_Student()
    {
        $data['page'] = "Manage Student"; // Page URL
        $data['pagegroup'] = "StudentManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $semster = new Demo_model; // Load Model
        $data['Student_table'] =  $semster->custom_query(
            "SELECT * FROM `student` LEFT JOIN `degree`  ON student.deg_id = degree.deg_id"
        );
        $this->view('Admin/Manage_Student', $data);
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            if (isset($_GET['delete'])) {
                $semster->set_table('student');
                $semster->delete($_GET['id'], "Student_id");
                route_url('Admin/Manage_Student');
            }
        }
    }

    public function Manage_Token()
    {
        $data['page'] = "Manage Token"; // Page URL
        $data['pagegroup'] = "TokenManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $semster = new Demo_model; // Load Model
        $data['Token_table'] =  $semster->custom_query(
            "SELECT * FROM `student_token` LEFT JOIN `student`  ON student_token.student_id = student.student_id"
        );
        $this->view('Admin/Manage_Token', $data);
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            if (isset($_GET['delete'])) {
                $semster->set_table('student');
                $semster->delete($_GET['id'], "Student_id");
                route_url('Admin/Manage_Token');
            }
        }
    }

    public function Profile()
    {
        $user = new Demo_model; // Load Model
        $user->set_table('user'); // Set Model Table
        $data['page'] = "View Profile"; // Page URL
        $data['pagegroup'] = "ProfileManagement"; // Page Sub Group Customer -> Manage Customer
        $data['User'] = $_SESSION['USER']->email; // Login User Name
        $row = $user->findAll();
        $data['User_table'] = $row;
        $this->view('Admin/Profile', $data);
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