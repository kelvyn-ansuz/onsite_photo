<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Authentication
{
    private $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('Users_model', '', true);
        $this->CI->load->library('session');
    }

    public function authenticate($strEmail, $strPassword)
    {
        $objUser = $this->CI->Users_model->getByEmail($strEmail);

        if ($objUser) {
            if (password_verify($strPassword, $objUser->UsPassword)) {
                unset($objUser->UsPassword);
                $this->CI->session->set_userdata(array(
                    'logged_in' => true,
                    'user' => $objUser
                ));

                return true;
                // TODO: version login records
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function logout($strRedirect = false)
    {
        $this->CI->session->sess_destroy();
        if ($strRedirect) {
            $this->CI->load->helper('url');
            $this->CI->session->set_flashdata('error', 'You have been logged out.');
            redirect($strRedirect, 'refresh');
        }
    }

    public function checkAdmin($redirect = false)
    {
        if ($this->checkLoggedIn()) {
            $user = $this->CI->session->userdata('user');
            if ($user->UsAccess == 1) {
                if($redirect) {
                    redirect($redirect, "refresh");
                }
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function checkModerator($redirect = false)
    {
        if ($this->checkLoggedIn()) {
            $user = $this->CI->session->userdata('user');
            if ($user->UsAccess == 2) {
                if($redirect) {
                    redirect($redirect, "refresh");
                }
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }


    public function checkLoggedIn($redirect = false)
    {
		return $this->CI->session->userdata('logged_in');
    }

    public function checkAdminAndRedirect()
    {
        if (!$this->CI->authentication->checkAdmin()) {
            $this->CI->session->set_flashdata('error', 'Access Denied.');
            redirect("/admin/", "refresh");
        }
    }

    public function checkAdminAndModeratorAndRedirect()
    {
        if (!$this->CI->authentication->checkAdmin() && !$this->CI->authentication->checkModerator()) {
            $this->CI->session->set_flashdata('error', 'Access Denied.');
            $this->CI->session->set_flashdata('previousURL', current_url());

            //echo current_url();

            //exit();
            redirect("/admin/", "refresh");
        }
    }


}