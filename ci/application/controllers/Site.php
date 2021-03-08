<?php
// application/controllers/Produits.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller 
{

    public function essai_page()
    {
        $this->load->view('essai_page');
    }

    public function contactf(){

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
             $this->form_validation->set_rules("nom", "nom", "required", array("required" => "Le %s est obligatoire."));
             $this->form_validation->set_rules("prenom", "prénom", "required", array("required" => "Le %s est obligatoire."));
             
             if ($this->form_validation->run())
             //sous-entendu: $this->form_validation->run()= TRUE//
             { // Réussite de la validation//
     
                   $this->load->view('merci');
             }
             else
             { // La validation a échoué, on retourne au formulaire
     
                 $this->load->view('contactf');
     
             }       
         } 
         else 
         { // 1er appel de la page: affichage du formulaire
                $this->load->view('contactf');
         }
    }
}

?>