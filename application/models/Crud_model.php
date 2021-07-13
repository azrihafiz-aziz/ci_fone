<?php
class Crud_model extends CI_Model {

        public function get_entries()
        {
                $query = $this->db->get('student');
                return $query->result();
        }

        public function getYears()
        {
                $this->db->select('YEAR(`created_at`) AS year');
                $this->db->distinct();
                $this->db->from('student');
                $this->db->order_by('created_at','ASC');
                $query = $this->db->get();
                return $query->result();
        }

        public function getYear($year)
        {
                $this->db->select('*');
                $this->db->from('student');
                $this->db->where('YEAR(`created_at`)',$year);
                $query = $this->db->get();
                return $query->result();
        }

}
?>