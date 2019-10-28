<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Pengguna_controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("pengguna_model");
	}

	public function index() {
		$data["semua_pengguna"] = $this->pengguna_model->semua();

		$this->load->view("layouts/header");
		$this->load->view("daftar_pengguna", $data);
		$this->load->view("layouts/footer");
	}

	public function tambah() {
		$this->load->view("layouts/header");
		$this->load->view("tambah_pengguna");
		$this->load->view("layouts/footer");
	}

	public function tambah_simpan() {
		$data = array(
			"nama" => $this->input->post("nama"),
			"umur" => $this->input->post("umur"),
			"tanggal_lahir" => date("Y-m-d 00:00:00", strtotime($this->input->post("tanggal_lahir"))),
			"jenis_kelamin" => $this->input->post("jenis_kelamin")
		);

		if ($this->pengguna_model->tambah($data) == true) {
			$this->session->set_flashdata("tambah", true);
		}
		else {
			$this->session->set_flashdata("tambah", false);
		}

		redirect(base_url());
	}

	public function edit($id) {
		$data["pengguna"] = $this->pengguna_model->lihat($id)->row();
		$this->load->view("layouts/header");
		$this->load->view("edit_pengguna", $data);
		$this->load->view("layouts/footer");
	}

	public function edit_simpan($id) {
		$data = array(
			"nama" => $this->input->post("nama"),
			"umur" => $this->input->post("umur"),
			"tanggal_lahir" => date("Y-m-d 00:00:00", strtotime($this->input->post("tanggal_lahir"))),
			"jenis_kelamin" => $this->input->post("jenis_kelamin")
		);

		if ($this->pengguna_model->update($data, $id) == true) {
			$this->session->set_flashdata("edit", true);
		}
		else {
			$this->session->set_flashdata("edit", false);
		}

		redirect(base_url());
	}

	public function hapus($id) {
		if ($this->pengguna_model->hapus($id) == true) {
			$this->session->set_flashdata("hapus", true);
		}
		else {
			$this->session->set_flashdata("hapus", false);
		}

		redirect(base_url());
	}
}