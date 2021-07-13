<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filter extends CI_Controller {

	
	   public function __construct()
    {
        parent::__construct();
        $this->load->model('crud_model');
        
	}
	public function index()
	{
		$data['data']=$this->db->get('student')->result();
		$this->load->view('mahasiswa/filter',$data,FALSE);
	}
	
	public function load_mahasiswa()
	{
		$angkatan=$_GET['angkatan'];
		//$angkatan=$this->input->post('angkatan');
		//print_r($_GET);
		if($angkatan==0){
			$data=$this->db->get('student')->result();
		}else{

			$data=$this->db->get_where('student',['angkatan_id'=>$angkatan])->result();
		}
		if(!empty($data))
		{

		$no=1;foreach($data as $row):?>
        <tr>
        <td><?=$no++?></td>
        <td><?=$row->name?></td>
        <td><?=$row->standard?></td>
        <td><?=$row->percentage?></td>
        </tr>
        <?php endforeach?><?php
		}
		else
		{
        ?>
		<tr><td align="center">Tidak ada data</td></tr>
		<?php
		}
	}
	
}
