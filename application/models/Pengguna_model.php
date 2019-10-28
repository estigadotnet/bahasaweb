<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Pengguna_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function semua() {
		$this->db->select("*");
		$this->db->from("pengguna");
		$this->db->order_by("id", "desc");

		return $this->db->get();
	}

	public function tambah($data) {
		$this->db->insert("pengguna", $data);
		return ($this->db->affected_rows() > 0) ? true : false;
	}

	public function lihat($id) {
		$this->db->select("*");
		$this->db->from("pengguna");
		$this->db->where("id", $id);

		return $this->db->get();
	}

	public function update($data, $id) {
		$this->db->update("pengguna", $data, array("id" => $id));
		return ($this->db->affected_rows() > 0) ? true : false;
	}

	public function hapus($id) {
		$this->db->delete("pengguna", array("id" => $id));
		return ($this->db->affected_rows() > 0) ? true : false;
	}
}