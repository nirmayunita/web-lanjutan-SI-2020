<?php  

class Mahasiswa extends CI_Controller
{
	public function index( $url_nim = '', $url_jur = '')
	{
		$data['nama'] = 'Nirma';
		$data['umur'] = '18';
		$data['nim'] = $url_nim;
		$data['jurusan'] = $url_jur;
		$this->load->view('mahasiswa/v_index', $data);
	}

	public function jurusan()
	{
		echo 'D3 Sistem Informasi';

	}

} 