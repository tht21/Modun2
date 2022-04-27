<?php
class Home extends Controller
{
    public function __construct()
    {
        //gọi model User
        $this->UserModel = $this->model('User');
    }

    public function index()
    {
        //gọi method getuser
        $user  = $this->UserModel->getUser();

        //gọi và show dữ liệu ra view
        $this->view('index', [
            'user' => $user
        ]);
    }

    public function create()
    {
        if (isset($_POST['submit'])) {
            $result = $this->UserModel->createUser($_POST['Name'], $_POST['Email'], $_POST['Address']);
            if ($result) {
                header('location:' . URLROOT . '/views/index');
            }
        }
        $this->view('create');
    }

    public function update($id)
    {

        $findUser = $this->UserModel->findUserById($id);

        if (isset($_POST['submit'])) {
            $update = $this->UserModel->updateUser($id, $_POST['Name'], $_POST['Email'], $_POST['Address']);
            if ($update) {
                header('location:' . URLROOT . '/views/index');
            }
        }

        $this->view('update', [
            'findUser' => $findUser
        ]);
    }

    public function delete($id){
        $delete = $this->UserModel->deleteUser($id);
        if($delete){
            header('location:' . URLROOT . '/views/index');
        }
        $this->view('index');
    }
}
