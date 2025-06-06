<?php

class Settings
{
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getSettingById($data)
	{
		$this->db->query('SELECT * FROM tbl_page_setting WHERE cle = :cle');
		$this->db->bind('cle', $data['cle']);
		return $this->db->single();
	}

	public function getAllSettings()
	{
		$this->db->query('SELECT * FROM tbl_page_setting');

		$results = $this->db->resultSet();

		$settings = [];

		foreach ($results as $row) {
			$settings[$row->cle] = $row->valeur;
		}

		return $settings;
	}

	public function addSetting($data)
	{
		$this->db->query('INSERT INTO tbl_page_setting 
			            (cle, valeur, description) 
			             VALUES (:cle, :valeur, :description)');
		$this->db->bind(':id', $data['id']);
		$this->db->bind(':cle', $data['cle']);
		$this->db->bind(':valeur', $data['valeur']);
		$this->db->bind(':description', $data['description']);

		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}

	public function updateSetting($data)
	{
		$this->db->query("UPDATE tbl_page_setting  SET 
			              cle = :cle, 
			              valeur = :valeur, 
			              description = :description 
			              WHERE id = :id");
		$this->db->bind(':id', $data['id']);
		$this->db->bind(':cle', $data['cle']);
		$this->db->bind(':valeur', $data['valeur']);
		$this->db->bind(':description', $data['description']);

		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}

	public function deleteSetting($id)
	{
		$this->db->query("DELETE FROM tbl_page_setting WHERE id = :id");
		$this->db->bind(':id', $id);

		if ($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}
}
