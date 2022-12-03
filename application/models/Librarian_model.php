<?php

class Librarian_model extends CI_Model
{
    protected $table = 'librarians';

    public function getAll()
    {
        return $this->db->query("SELECT * FROM $this->table")->result();
    }

    public function findById($id)
    {
        // return $this->db->query("SELECT * FROM $this->table where id=?", [$id])->row();
        return $this-> db->get_where($this->table,["id" => $id]) -> row();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($data, $id)
    {
        return $this->db->update($this->table,$data, ["id"=>$id]);
        
        
    }


    public function delete($id)
    {
        return $this->db->delete($this->table, array('id' => $id));
    }
}
