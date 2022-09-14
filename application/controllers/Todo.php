<?php

class Todo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('TodoModel');
    }

    public function index()
    {
        // Menambahkan data
        if (!empty($_POST["list"])) {
            $this->TodoModel->addTodo($_POST["list"]);
        }

        // Menghapus data
        if (!empty($_POST["delList"])) {
            $this->TodoModel->deleteTodoById($_POST["id"]);
        }

        // Mengupdate data
        if (!empty($_POST["changeList"])) {
            $this->TodoModel->changeTodoById($_POST["id"], $_POST["changeList"]);
        }

        // Mencari data
        if (!empty($_POST["searchList"])) {
            $data["todo"] = $this->TodoModel->findTodoByName($_POST["searchList"]);
        } else {
            $data["todo"] = $this->TodoModel->getTodo();
        }

        // Menampilkan view 
        $data['judul'] = 'Todolist';
        $this->load->view('templates/header', $data);
        $this->load->view('todo/index', $data);
        $this->load->view('templates/footer');
    }

    // Function untuk mengupdate data
    public function change()
    {
        // Menampilkan view
        $data['judul'] = 'Change List';
        $this->load->view('templates/header', $data);
        $this->load->view('todo/change');
        $this->load->view('templates/footer');
    }
}
