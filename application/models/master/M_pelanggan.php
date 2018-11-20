<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
class M_pelanggan extends CI_Model {

	var $table = 'pelanggan';
    var $column = array('nama', 'alamat', 'no_telpon', 'id'); 
    var $order = array('nama' => 'asc');

    private function _get_datatables_query()
    {
        
        $this->db->from($this->table);

        $i = 0;
    
        foreach ($this->column as $item) 
        {
            if($_POST['search']['value']) 
            {
                
                if($i===0) 
                {
                    $this->db->group_start();
                    
                    
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                    
                }

                if(count($this->column) - 1 == $i)
                    $this->db->group_end();
            }
            $column[$i] = $item;
            $i++;
        }
        
        if(isset($_POST['order']))
        {
            $this->db->order_by($column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
            
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    public function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        
        return $query->num_rows();
    }
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function tampil()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        
        $query = $this->db->get();
        return $query->result();
    }

    function simpan($data)
    {
        $this->db->insert($this->table, $data);
        echo json_encode("Success");
    }
    
    function edit($id, $data)
    {
        $this->db->Where('id', $id);
        $this->db->update($this->table, $data);
        echo json_encode("Success");
    }

    function get_data($id)
    {
    	$this->db->where('id', $id);
    	echo json_encode($this->db->get($this->table)->row());
    }

    function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
        echo json_encode("Success");
    }
}