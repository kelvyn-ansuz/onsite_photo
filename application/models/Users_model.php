<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model
{
    public $tableName = "tblusers";
    public $prefix = "Us";
    public $fields =  ["UsFirstName",
                    "UsLastName",
                    "UsEmailAddress",
                    "UsPassword",
                    "UsAccess"];

    public function __construct()
    {
        parent::__construct();
        initCommonFields($this);
    }

    public function get($intID)
    {
        return db_GetActiveByID($this, $intID);
    }

    public function getAll()
    {
        return db_GetAll($this);
    }

    public function new()
    {
        return db_NewModel($this);
    }

    public function update($objData, $intID = null)
    {
        return db_UpdateByID($this, $objData, $intID);
    }

    public function delete($intID)
    {
        db_SetInActiveByID($this, $intID, true);
    }

    // Extra functions
    public function getByEmail($strEmail)
    {
        $this->db->select();
        $this->db->from("tblusers");
        $this->db->where("UsEmailAddress", $strEmail);
        $this->db->where($this->IsActive, 1);
        $this->db->limit(1);
        $query = $this->db->get();
        $result = $query->row();

        if($result)
        {
            return($result);
        }
        else
        {
            return false;
        }
    }


}