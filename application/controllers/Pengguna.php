<?php
class Pengguna extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('pengguna_model');
	}
	function index()
	{
		$this->load->view('templates/header');
		$this->load->view('utama/pengguna');
		$this->load->view('templates/footer');
	}

	function dataPengguna()
	{
		$data = $this->pengguna_model->pengguna_list();
		echo json_encode($data);
	}

	function getPengguna()
	{
		$id = $this->input->get('id');
		$data = $this->pengguna_model->get_pengguna_by_id($id);
		echo json_encode($data);
	}

	function simpanPengguna()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$no_telefon = $this->input->post('no_telefon');
		$data = $this->pengguna_model->simpanPengguna($id, $nama, $no_telefon);
		echo json_encode($data);
	}

	function updatePengguna()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$no_telefon = $this->input->post('no_telefon');
		$data = $this->pengguna_model->updatePengguna($id, $nama, $no_telefon);
		echo json_encode($data);
	}

	function hapusPengguna()
	{
		$id = $this->input->post('id');
		$data = $this->pengguna_model->hapusPengguna($id);
		echo json_encode($data);
	}
}
