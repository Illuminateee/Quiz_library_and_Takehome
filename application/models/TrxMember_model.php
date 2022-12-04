<?php

class TrxMember_model extends CI_Model
{
    protected $table = 'member_trxs';

    public function getAll()
    {
        // $this->db->select('full_name, phone, address, title, month, price, member_trxs.trx_date, member_trxs.active_at, member_trxs.expire_at, member_trxs.status, member_trxs.total_order, member_trxs.note, member_trxs.created_at');
        // $this->db->from('member_trxs');
        // $this->db->join('members', 'member_trxs.member_id = members.id','left');
        // $this->db->join('subscriptions', 'member_trxs.subs_id = subscriptions.id','left');

        return $this->db->query("SELECT full_name, phone, address, title, subscriptions.month as submonth, price, member_trxs.trx_date, member_trxs.active_at, member_trxs.expire_at, member_trxs.status, member_trxs.total_order, member_trxs.note, member_trxs.created_at
        from member_trxs
        left join members on member_trxs.member_id = members.id
        left join subscriptions on member_trxs.subs_id = subscriptions.id
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
