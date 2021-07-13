<?php
class Pengguna_model extends CI_Model
{

	function pengguna_list()
	{
		$data = $this->db->query("SELECT * FROM pengguna");
		return $data->result();
	}

	function simpanPengguna($id, $nama, $no_telefon)
	{
		$data = $this->db->query("INSERT INTO pengguna (id, nama, no_telefon) VALUES('$id','$nama','$no_telefon')");
		return $data;
	}

	function get_pengguna_by_id($id)
	{
		$hsl = $this->db->query("SELECT * FROM pengguna WHERE id='$id'");
		if ($hsl->num_rows() > 0) {
			foreach ($hsl->result() as $data) {
				$data = array(
					'id' => $data->id,
					'nama' => $data->nama,
					'no_telefon' => $data->no_telefon,
				);
			}
		}
		return $data;
	}

	function updatePengguna($id, $nama, $no_telefon)
	{
		$data = $this->db->query("UPDATE pengguna SET nama='$nama',no_telefon='$no_telefon' WHERE id='$id'");
		return $data;
	}

	function hapusPengguna($id)
	{
		$data = $this->db->query("DELETE FROM pengguna WHERE id='$id'");
		return $data;
	}
}
