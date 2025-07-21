<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Words_model extends CI_Model
{
    public $tableName = "tblwords";
    public $prefix = "Wo";
    public $fields =  ["WoText"];

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
}