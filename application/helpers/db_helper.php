<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function initCommonFields($objModel)
{
    $strPrefix = $objModel->prefix;
    $arrCommon = ["ID","CollectionID","IsActive","CreatedBy","ModifiedBy","DateCreated","DateModified"];

    $arrPopulatedCommon = array();

    foreach ($arrCommon as $strCommon) {
        $objModel->{$strCommon} = $strPrefix.$strCommon;
    }
}

function db_GetActiveByID($objModel, $intID)
{
    $CI =& get_instance();
    $CI->db->select();
    $CI->db->from($objModel->tableName);
    $CI->db->where($objModel->CollectionID, $intID);
    $CI->db->where($objModel->IsActive, 1);
    $CI->db->limit(1);
    $row = db_GetRow();
    return($row);
}

function db_SetInActiveByID($objModel, $intID, $delete = null)
{
    $CI =& get_instance();

    // Clone current record into memory first if delete
    if ($delete) {
        $objCurrent = db_GetActiveByID($objModel, $intID);
    }

    // Set IsActive for all records matching the collection ID to 0
    $CI->db->set($objModel->IsActive, 0);
    $CI->db->where($objModel->CollectionID, $intID);
    $CI->db->update($objModel->tableName);


    // Reinsert cloned record if delete, then update who and when it was modified.
    if ($delete) {
        foreach ($objModel->fields as $strFieldName) {
            $CI->db->set($strFieldName, $objCurrent->{$strFieldName});
        }

        $CI->db->set($objModel->CollectionID, $intID);
        $CI->db->set($objModel->IsActive, 0);
        $CI->db->set($objModel->CreatedBy, $objCurrent->{$objModel->CreatedBy});
        $CI->db->set($objModel->ModifiedBy, $CI->session->userdata("user")->UsCollectionID);
        $CI->db->set($objModel->DateCreated, $objCurrent->{$objModel->DateCreated});
        $CI->db->set($objModel->DateModified, 'NOW()', false);
        $CI->db->insert($objModel->tableName);
    }
}

function db_GetAll($objModel, $intRecords = null, $intPage = null, $arrWhere = null)
{
    $CI =& get_instance();
    $CI->db->select();
    $CI->db->from($objModel->tableName);
    $CI->db->where($objModel->IsActive, 1);
    $CI->db->order_by($objModel->DateCreated, "asc");

    if ($arrWhere !== null) {
        foreach ($arrWhere as $value) {
            $CI->db->where($value->field, $value->value);
        }
    }

    if ($intRecords !== null) {
        if ($intPage !== null) {
            $intStart = ($intPage - 1) * $intRecords;
            $CI->db->limit($intRecords, $intStart);
            $results = db_GetResultsWithCount();
            $results["per_page"] = $intRecords;
            $results["current_page"] = $intPage;
        } else {
            $CI->db->limit($intRecords);
            $results = db_GetResults();
        }
    } else {
        $results = db_GetResults();
    }

    return $results;
}

function db_GetResultsWithCount()
{
    $CI =& get_instance();
    $query = $CI->db->get();
    $results = $query->result();
    $total = $CI->db->query('SELECT FOUND_ROWS() AS `CNT`')->row()->CNT;
    return array("results"=>$results, "total"=>$total);
}

function db_GetResults()
{
    $CI =& get_instance();
    $query = $CI->db->get();
    $results = $query->result();
    return $results;
}

function db_GetRow()
{
    $CI =& get_instance();
    $query = $CI->db->get();
    $row = $query->row();
    return $row;
}

function db_UpdateByID($objModel, $objData, $intID = null)
{
    $CI =& get_instance();

    if ($intID !== null) {
        $objCurrent = db_GetActiveByID($objModel, $intID);
        db_SetInActiveByID($objModel, $intID);

        $CI->db->set($objModel->DateCreated, $objCurrent->{$objModel->DateCreated});
        $CI->db->set($objModel->CreatedBy, $objCurrent->{$objModel->CreatedBy});
    } else {
        $intID = db_GetNextCollectionID($objModel);
        $CI->db->set($objModel->DateCreated, 'NOW()', false);
        if (isset($CI->session->userdata("user")->UsCollectionID)) {
            $CI->db->set($objModel->CreatedBy, $CI->session->userdata("user")->UsCollectionID);
        } else {
            $CI->db->set($objModel->CreatedBy, 0);
        }

    }

    foreach ($objModel->fields as $strFieldName) {

        if($strFieldName== $objModel->prefix . "Password") {

            $strDataFieldName = str_replace($objModel->prefix, "", $strFieldName);
            if(strlen($objData[$strDataFieldName])==0) {
                $CI->db->set($strFieldName, $objCurrent->$strFieldName);
            } else {
                $CI->db->set($strFieldName, password_hash($objData[$strDataFieldName], PASSWORD_DEFAULT));
            }

        } else {
            $strDataFieldName = str_replace($objModel->prefix, "", $strFieldName);
            $CI->db->set($strFieldName, $objData[$strDataFieldName]);
        }
    }

    $CI->db->set($objModel->CollectionID, $intID);
    $CI->db->set($objModel->IsActive, 1);
    if (isset($CI->session->userdata("user")->UsCollectionID)) {
        $CI->db->set($objModel->ModifiedBy, $CI->session->userdata("user")->UsCollectionID);
    } else {
        $CI->db->set($objModel->ModifiedBy, 0);
    }

    $CI->db->set($objModel->DateModified, 'NOW()', false);

    $CI->db->insert($objModel->tableName);

    return $intID;
}

function db_NewModel($objModel)
{
    $objNewModel = new stdClass();
    $objNewModel->{$objModel->CollectionID} = "";

    foreach ($objModel->fields as $strField) {
        $objNewModel->{$strField} = "";
    }

    return $objNewModel;
}

function db_GetNextCollectionID($objModel)
{
    $CI =& get_instance();
    $CI->db->select('COALESCE(MAX(' . $objModel->CollectionID . ')+1,1) as CollectionID', false);
    $CI->db->from($objModel->tableName);
    $CI->db->limit(1);
    $row = db_GetRow();
    return($row->CollectionID);
}

// Extra functions

function db_GetSettings()
{
    $CI =& get_instance();
    $CI->load->model('Settings_model', '', true);
    $objSettings = $CI->Settings_model->getAllByKeyValue();
    return $objSettings;
}