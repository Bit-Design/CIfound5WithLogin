<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Authex {

    // +----------------------------------------------------------
    // | TV Shop
    // +----------------------------------------------------------
    // | Thomas More Kempen - 2 TI - 201x-201x
    // +----------------------------------------------------------
    // | Authex library
    // |
    // +----------------------------------------------------------
    // | Nelson Wells
    // | http://nelsonwells.net/2010/05/creating-a-simple-extensible-codeigniter-authentication-library/
    // | aangepast door K. Vangeel
    // +----------------------------------------------------------

    public function __construct() {
        $CI = & get_instance();

        $CI->load->model('user_model');
    }

    function loggedIn() {
        // gebruiker is aangemeld als sessievariabele user_id bestaat
        $CI = & get_instance();
        if ($CI->session->userdata('user')) {
            return true;
        } else {
            return false;
        }
    }

    function getUserInfo() {
        // geef user-object als gebruiker aangemeld is
        $CI = & get_instance();
        if (!$this->loggedIn()) {
            return null;
        } else {
            $id = $CI->session->userdata('user')->id;
            return $CI->user_model->get($id);
        }
    }

    function login($email, $password) {
        // gebruiker aanmelden met opgegeven email en wachtwoord
        $CI = & get_instance();
        $user = $CI->user_model->getUser($email, $password);
        if ($user == null) {
            return false;
        } else {
            $CI->session->set_userdata('user', $user);
            return true;
        }
    }

    function logout() {
        // uitloggen, dus sessievariabele wegdoen
        $CI = & get_instance();
        $CI->session->unset_userdata('user');
    }

    function register($user) {
        // nieuwe gebruiker registreren als email nog niet bestaat
        $CI = & get_instance();
        if ($CI->user_model->emailFree($user->email)) {
            echo "authex";
            $gegevens = $CI->user_model->insert($user);
            print_r($gegevens);
            // return $gegevens;
            return 1;
        } else {
            return 0;
        }
    }

    function activate($id) {
        // nieuwe gebruiker activeren
        $CI = & get_instance();
        $CI->user_model->activeer($id);
    }

}
