<?php
defined('BASEPATH') OR exist('No direct script access allowed');

class Cijarditou extends CI_Controller {
	public function accueil () {
		$this->db;
		$this->load->view('cijarditou/header');		
		$this->load->view('cijarditou/index');
		$this->load->view('cijarditou/footer');

	}

	public function contact(){
		$this->load->view('cijarditou/header');
		//$this->load->view('cijarditou/contact');//
		
		//chargement de Helper Form//
        $this->load->helper("form");
        // Chargement de la librairie form_validation//
        $this->load->library('form_validation'); 

        // Condition pour la validation//
        if ($this->input->post()) 
        { // 2ème appel de la page: traitement du formulaire
     
            //Récupération des données du formulaire// 
            $data = $this->input->post();
     
             // Définition des filtres pour valider ou non les données//
             $this->form_validation->set_rules("nom", "nom", "required|regex_match[~^[a-zA-Z-éèçëê\s]+$~]", array("required" => "Vous devez renseigner votre %s.", "regex_match" => "Saisissez seulement des lettres et des tirets"));
             $this->form_validation->set_rules("prenom", "prénom", "required", array("required" => "Vous devez renseigner votre %s."));
			 $this->form_validation->set_rules("genre", "genre", "required", array("required" => "Vous devez renseigner votre %s."));
			 $this->form_validation->set_rules("date", "date", "required|regex_match[\^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$\]", array("required" => "Vous devez renseigner la %s.", "regex_match" => "La %s est invalide"));
             $this->form_validation->set_rules("postal", "code postal", "required|regex_match[~^[0-9]{5}$~]", array("required" => "Vous devez renseigner le %s.", "regex_match" => "La %s est invalide"));
             $this->form_validation->set_rules("adresse", "adresse", "required", array("required" => "Vous devez renseigner votre %s."));
			 $this->form_validation->set_rules("ville", "ville", "required", array("required" => "Vous devez renseigner votre %s."));
			 $this->form_validation->set_rules("mail", "mail", "required|valid_email", array("required" => "Vous devez renseigner votre %s.", "regex_match" => "Le %s est invalide"));
			 $this->form_validation->set_rules("sujet", "sujet", "required", array("required" => "Vous devez choisir un %s."));
			 $this->form_validation->set_rules("question", "question", "required", array("required" => "Posez votre question %s."));
             
             if ($this->form_validation->run())
             //sous-entendu: $this->form_validation->run()= TRUE//
             { // Réussite de la validation//
     
                   $this->load->view('cijarditou/merci');
             }
             else
             { // La validation a échoué, on retourne au formulaire
     
                 $this->load->view('cijarditou/contact');
     
             }       
         } 
         else 
         { // 1er appel de la page: affichage du formulaire
                $this->load->view('cijarditou/contact');
         }
		 $this->load->view('cijarditou/footer');
    }

    public function clientconnex(){
        
        //chargement de Helper Form//
        $this->load->helper("form");
        // Chargement de la librairie form_validation//
        $this->load->library('form_validation'); 
        // Condition pour la validation//
        if ($this->input->post()) { 
        // 2ème appel de la page: traitement du formulaire

        //Récupération des données du formulaire// 
        $data = $this->input->post();

        // Définition des filtres pour valider ou non les données//
        $this->form_validation->set_rules("login", "Champ", "required", array("required" => "%s obligatoire"));
        $this->form_validation->set_rules("mdp", "Champ", "required", array("required" => "%s obligatoire"));

            if ($this->form_validation->run()){
                //sous-entendu: $this->form_validation->run()= TRUE//
             // Réussite de la validation et authentification avec appel au modèle//
                //Récupération du login saisi dans le formulaire//
                $login = $this->input->post['login'];
                //Récupération du mot de passe saisi dans le formulaire //
                $passeword = $this->input->post['mdp'];
                //chargement du modèle pour authentifier le login et le mot de passe//
                $this->auth_user->($login, $password);
                if ($this->auth_user->is_connected){
                    redirect('clientespace');
                    // VOIR SI REDIRECT FONCTIONNE//
                }
                 else{
                  // La validation a échoué, on retourne au formulaire
                    $this->load->view('cijarditou/clientconnex');
                 }       
         } 
         else 
         { // 1er appel de la page: affichage du formulaire
                $this->load->view('cijarditou/clientconnex');
         }
    }

    public function clientespace (){
        $this->load->view('cijarditou/clientespace');
    }

    public function accueiladmin (){
        $this->load->view('cijarditou/admin_header');
    }

    public function liste () {
		$this->db;
		$this->load->view('cijarditou/admin_header');		
		$this->load->view('cijarditou/admin_liste');

	}
    
    public function detail(){
        $this->db;
        $this->load->view('cijarditou/admin_header');
        $this->load->view('cijarditou/admin_detail');
    }

    public function ajout(){
        $this->db;
        $this->load->view('cijarditou/admin_header');		
		$this->load->view('cijarditou/admin_ajout');
    }

    public function modif(){
        $this->db;	
        $this->load->view('cijarditou/admin_header');	
		$this->load->view('cijarditou/admin_update');

    }
}