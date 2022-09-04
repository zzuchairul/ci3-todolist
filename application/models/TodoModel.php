<?php

class TodoModel extends CI_Model
{
    // Mengambil semua data di table todo
    public function getTodo()
    {
        return $this->db->get('todo')->result();
    }

    // Menambahkan data ke todo
    public function addTodo($list)
    {
        $data = array('list' => $list);
        $this->db->insert('todo', $data);
    }

    // Menghapus data sesuai dengan id di todo
    public function deleteTodoById($id)
    {
        $data = array('id' => $id);
        $this->db->delete('todo', $data);
    }

    // Mengupdate data sesuai dengan id di todo
    public function changeTodoById($id, $list)
    {
        $data = array('list' => $list);
        $this->db->where('id', $id);
        $this->db->update('todo', $data);
    }

    // Mencari data sesuai dengan nama (list)
    public function findTodoByName($list)
    {
        return $this->db->like('list', $list)
            ->get('todo')
            ->result();
    }
}
