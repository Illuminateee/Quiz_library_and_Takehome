<?php

class Borrow_books_model extends CI_Model
{
    protected $table = 'borrow_books';

    public function getAll()
    {
        
        return $this->db->query("SELECT borrow_books.id, nik, full_name, phone, address, is_active, trx_date, note, borrow_books.created_at as createdBB, 
        CASE
            WHEN members.is_active = 1 THEN 'ACTIVE'
            ELSE 'NON ACTIVE'
        END AS StatusMember
        FROM $this->table left join members on borrow_books.member_id = members.id
        ")->result();
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
