<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendees extends MX_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Attendees_model', '', true);
        $this->load->library("Authentication");
        $this->authentication->checkAdminAndModeratorAndRedirect();
    }

    public function index()
    {
        $this->load->view('header');
        $data["objAttendees"] = $this->Attendees_model->getAllDESC();
        $data["success"] = $this->session->flashdata('success');
        $data["ws_action"] = $this->session->flashdata('action');
        $data["ws_intID"] = $this->session->flashdata('intID');
        $this->load->view('attendees/index', $data);
        $this->load->view('footer');
    }

    public function add()
    {
        if ($this->input->post()) {
            $objPostData = $this->input->post();
            $this->Attendees_model->update($objPostData);
            $this->session->set_flashdata('success', 'Message Added');
            redirect("/admin/attendees");
        } else {
            $this->load->view('header');
            $data["objAttendee"] = $this->Attendees_model->new();
            $data["mode"] = "add";
            $data["name"] = "";
            $this->load->view('attendees/item', $data);
            $this->load->view('footer');
        }
    }

    public function edit($intID)
    {
        if ($this->input->post()) {
            $objPostData = $this->input->post();

            $objPostData["Image"]  = "";
            $objPostData["IPAddress"]  = $this->input->ip_address();

            $objPostData["HashTag"]  = "";
            $objPostData["EmailAddress"]  = "";
            $objPostData["Alignment"]  = "";

            $objPostData["Row"]  = "";
            $objPostData["Column"] = "";

            $this->Attendees_model->update($objPostData, $intID);
            $this->session->set_flashdata('success', 'Message Edited');
            redirect("/admin/attendees");
        } else {
            $this->load->view('header');
            $data["objAttendee"] = $this->Attendees_model->get($intID);
            $data["mode"] = "edit";
            $data["name"] = $data["objAttendee"]->AtFirstName . " " . $data["objAttendee"]->AtLastName;
            $this->load->view('attendees/item', $data);
            $this->load->view('footer');
        }
    }

    public function delete($intID)
    {
        $this->Attendees_model->delete($intID);
        $this->session->set_flashdata('success', 'Message Deleted');
        redirect("/admin/attendees");
    }

    public function publish($intID)
    {
        $this->session->set_flashdata('success', 'Message Published');
        $this->session->set_flashdata('action', 'publish');
        $this->session->set_flashdata('intID', $intID);

        $objAttendee = $this->Attendees_model->get($intID);
        $objAttendee->AtIsPublished = 1;
        $arrAttendee = array();

        foreach ($objAttendee as $key => $value) {
            $strNewKey = str_replace("At", "", $key);
            $arrAttendee[$strNewKey] = $value;
        }

        $this->Attendees_model->update($arrAttendee, $intID);

        redirect("/admin/attendees");
    }

    public function unpublish($intID)
    {
        $this->session->set_flashdata('success', 'Message Unpublished');
        $this->session->set_flashdata('action', 'unpublish');
        $this->session->set_flashdata('intID', $intID);

        $objAttendee = $this->Attendees_model->get($intID);
        $objAttendee->AtIsPublished = 0;
        $arrAttendee = array();

        foreach ($objAttendee as $key => $value) {
            $strNewKey = str_replace("At", "", $key);
            $arrAttendee[$strNewKey] = $value;
        }

        $this->Attendees_model->update($arrAttendee, $intID);

        redirect("/admin/attendees");
    }

    public function pin($intID)
    {
        $this->session->set_flashdata('success', 'Attendee Pinned');
        $this->session->set_flashdata('action', 'pin');
        $this->session->set_flashdata('intID', $intID);

        $objAttendee = $this->Attendees_model->get($intID);
        $objAttendee->AtIsPinned = 1;
        $arrAttendee = array();

        foreach ($objAttendee as $key => $value) {
            $strNewKey = str_replace("At", "", $key);
            $arrAttendee[$strNewKey] = $value;
        }

        $this->Attendees_model->update($arrAttendee, $intID);

        redirect("/admin/attendees");
    }

    public function unpin($intID)
    {
        $this->session->set_flashdata('success', 'Attendee Unpinned');
        $this->session->set_flashdata('action', 'unpin');
        $this->session->set_flashdata('intID', $intID);

        $objAttendee = $this->Attendees_model->get($intID);
        $objAttendee->AtIsPinned = 0;
        $arrAttendee = array();

        foreach ($objAttendee as $key => $value) {
            $strNewKey = str_replace("At", "", $key);
            $arrAttendee[$strNewKey] = $value;
        }

        $this->Attendees_model->update($arrAttendee, $intID);

        redirect("/admin/attendees");
    }

    public function download()
    {
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');

        $query = $this->db->query("SELECT
                                    AtCollectionID as 'Collection ID',
                                    AtFirstName as 'First Name',
                                    AtLastName as 'Last Name',
                                    AtText as 'Text',
                                    IF(AtIsPublished=1,'Published','Unpublished') as 'Published',
                                    IF(AtIsPinned=1,'Pinned','Unpinned') as 'Pinned',
                                    AtDateCreated as 'Date Created'
        FROM tblattendees WHERE AtIsActive=1
        ORDER BY AtDateCreated ASC
        ");
        $data = $this->dbutil->csv_from_result($query);

        force_download('attendees.csv', $data);
    }

}
