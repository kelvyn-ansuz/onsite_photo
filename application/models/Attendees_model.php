<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendees_model extends CI_Model
{
    public $tableName = "tblattendees";
    public $prefix = "At";
    public $fields =  ["AtEmailAddress",
                    "AtFirstName",
                    "AtLastName",
                    "AtHashTag",
                    "AtText",
                    "AtImage",
                    "AtRow",
                    "AtColumn",
                    "AtAlignment",
                    "AtIsPublished",
                    "AtIsPinned",
                    "AtIPAddress",
                    "AtHeader"];

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

    public function getAllDESC()
    {
        $this->db->select("*");
        $this->db->from("tblattendees");
        $this->db->where("AtIsActive", 1);
        $this->db->where($this->IsActive, 1);
        $this->db->order_by("AtIsPinned", "ASC");
        $this->db->order_by("AtIsPublished", "ASC");
        $this->db->order_by("AtDateCreated", "DESC");
        $query = $this->db->get();
        $results = $query->result();
        return $results;

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

    public function getRandom($strExceptions = null)
    {
        $this->db->select("AtCollectionID, AtRow, AtColumn, AtText, AtHashTag, AtFirstName, AtLastName");
        $this->db->from("tblattendees");
        $this->db->where("AtIsPublished", 1);
        $this->db->where($this->IsActive, 1);
        $this->db->order_by("AtRow", "asc");
        $this->db->order_by("AtColumn", "asc");

        if($strExceptions) {
            $this->db->where_not_in("AtCollectionID", $strExceptions, false);
        }

        $query = $this->db->get();
        $results = $query->result();

        shuffle($results);

        return $results;

        if ($results) {
            return($results);
        } else {
            return false;
        }
    }

    public function getPublished()
    {
        $this->db->select("AtCollectionID, AtRow, AtColumn, AtText, AtHashTag, AtFirstName, AtLastName, AtIsPinned");
        $this->db->from("tblattendees");
        $this->db->where("AtIsPublished", 1);
        $this->db->where($this->IsActive, 1);
        $this->db->order_by("AtIsPinned", "DESC");
        $this->db->order_by("AtDateCreated", "DESC");
        //$this->db->limit(25);

        $query = $this->db->get();
        $results = $query->result();

        if ($results) {
            return($results);
        } else {
            return false;
        }
    }

    public function getNextPositionByAlignment($strAlignment)
    {
        $objSettings = db_GetSettings();
        $maxRow = $objSettings["Rows"];
        $maxCol = $objSettings["Columns"];

        // Find row based on alignment. If row is null, assume row is 1

        $this->db->select("COALESCE(MAX(AtRow),1) as CURRENT_ROW");
        $this->db->from("tblattendees");
        $this->db->where("AtAlignment", $strAlignment);
        $this->db->where("AtIsPublished", 1);
        $this->db->where("AtIsActive", 1);

        $query = $this->db->get();
        $results = $query->result();
        $intCurrentRow = $results[0]->CURRENT_ROW;

        // Find max col based on max row

        $this->db->select("COALESCE(MAX(AtColumn),0) as CURRENT_COL");
        $this->db->from("tblattendees");
        $this->db->where("AtAlignment", $strAlignment);
        $this->db->where("AtRow", $intCurrentRow);
        $this->db->where("AtIsPublished", 1);
        $this->db->where("AtIsActive", 1);

        $query = $this->db->get();
        $results = $query->result();

        $intCurrentCol = $results[0]->CURRENT_COL;

        if ($intCurrentCol==$maxCol) {
            $intCurrentCol = 1;
            $intCurrentRow = $intCurrentRow+1;
        } else {
            $intCurrentCol = $intCurrentCol + 1;
        }

        // Left = odd, right = even

        if ($strAlignment == "right") {
            // make column even
            if ($intCurrentCol % 2 == 1) {
                $intCurrentCol = $intCurrentCol + 1;
            }
        } else {
            // make column odd
            if ($intCurrentCol % 2 == 0) {
                $intCurrentCol = $intCurrentCol + 1;

                if($intCurrentCol > $maxCol) {
                    $intCurrentCol = 1;
                    $intCurrentRow = $intCurrentRow+1;
                }
            }
        }

        if ($intCurrentRow > $maxRow) {
            $intCurrentRow = 1;
        }

        $arrPos["column"] = $intCurrentCol;
        $arrPos["row"] = $intCurrentRow;


        return $arrPos;
    }

    public function currentTilePosition()
    {
        $objSettings = db_GetSettings();
        $maxRow = $objSettings["Rows"];
        $maxCol = $objSettings["Columns"];


        $this->db->select("COUNT(1) as CNT");
        $this->db->from("tblattendees");
        $this->db->where("AtIsPublished", 1);
        $this->db->where("AtIsActive", 1);

        $query = $this->db->get();
        $results = $query->result();

        $arrPos = array();

        if ($results[0]->CNT == 0) {
            $arrPos["row"] = 1;
            $arrPos["column"] = 1;
            $arrPos["alignment"] = "left";
        } else if ($results[0]->CNT >= 16) {
            $this->db->set("AtIsPublished", 0);
            $this->db->update("tblattendees");
            $this->db->where("AtIsPublished", 1);
            $this->db->where("AtIsActive", 1);

            $arrPos["row"] = 1;
            $arrPos["column"] = 1;
            $arrPos["alignment"] = "left";
        } else {
            // Check if left is more or right is more

            $this->db->select("SUM(CASE WHEN AtAlignment='left' THEN 1 ELSE 0 END) as TOTAL_LEFT,
                                SUM(CASE WHEN AtAlignment='right' THEN 1 ELSE 0 END) as TOTAL_RIGHT");
            $this->db->from("tblattendees");
            $this->db->where("AtIsPublished", 1);
            $this->db->where("AtIsActive", 1);

            $query = $this->db->get();
            $results = $query->result();

            $intTotalLeft = $results[0]->TOTAL_LEFT;
            $intTotalRight = $results[0]->TOTAL_RIGHT;

            if ($intTotalLeft > $intTotalRight) {
                $arrPos["alignment"] = "right";
            } else {
                $arrPos["alignment"] = "left";
            }

            $arrReturn = $this->getNextPositionByAlignment($arrPos["alignment"]);


            $arrPos["column"] = $arrReturn["column"];
            $arrPos["row"] = $arrReturn["row"];

            /*
            $arrPos["row"] = 1;

            $arrPos["alignment"] = "right";

            */
        }

        return $arrPos;
    }

    function queueTile($intID)
    {
        $data["QuAttendeeID"] = $intID;
        $data["QuStatus"] = 0;
        $this->db->insert('tblqueue', $data);
    }

    function getQueue()
    {
        $this->db->select();
        $this->db->from("tblqueue");
        $this->db->where("QuStatus", "0");
        $this->db->limit(1);
        $query = $this->db->get();
        $results = $query->result();

        return $results;


        //$query = $this->db->get();
        //$results = $query->result();

    }

    function updateQueue($intID)
    {
        $this->db->set("QuStatus", 1);
        $this->db->update("tblqueue");
        $this->db->where("QuID", $intID);
    }
}