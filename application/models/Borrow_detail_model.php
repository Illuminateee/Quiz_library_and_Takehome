<?php

class Borrow_detail_model extends CI_Model
{
    protected $table = 'borrow_details';

    // public function getAll()
    // {
        
    //     return $this->db->query("SELECT borrow_books.id, nik, full_name, phone, address, is_active, trx_date, note, borrow_books.created_at as createdBB, 
    //     CASE
    //         WHEN members.is_active = 1 THEN 'ACTIVE'
    //         ELSE 'NON ACTIVE'
    //     END AS StatusMember
    //     FROM $this->table left join members on borrow_books.member_id = members.id
    //     ")->result();
    // }

    public function findById($id)
    {
        // return $this->db->query("SELECT * FROM $this->table where id=?", [$id])->row();
        // return $this-> db->get_where($this->table,["id" => $id]) -> row();

        return $this->db->query("SELECT isbn, title, synopsis, author, nik, full_name, phone, address, is_active, trx_date, borrow_books.note as borrowBookNote, deadline_at, borrow_details.note as borrowDetailNote, borrow_details.created_at as borrowDetailCreatedAt,
        CASE
            WHEN is_active = 1 Then 'ACTIVE'
            else 'NON ACTIVE'
        END AS memberStatus
        from borrow_details
        left join books on borrow_details.book_id = books.id
        left join borrow_books on borrow_details.book_id = borrow_books.id
        left join members on borrow_books.member_id = members.id 
        where borrow_details.id = ?
        ", [$id]) -> row();

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
