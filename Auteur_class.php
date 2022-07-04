<?php
    //localhost:8888/OOP-PHP(Book)-Part3/Auteur_class.php

    class Auteur {

        private string $_nom;
        private string $_prenom;
        private array $_livres;


        public function __construct (string $nom, string $prenom){
            $this->_nom = $nom;   //when we create new objects or we get the data from user which pass from form tag, they're gonna stock here!
            $this->_prenom = $prenom;
            $this->_livres = [];
        }

        public function setNom (string $nom){
            $this->_nom = $nom;
        }

        public function getNom (){
            return $this->_nom;
        }

        public function setPrenom (string $prenom){
            $this->_prenom = $prenom;
        }

        public function getPrenom (){
            return $this->_prenom;
        }

        public function setLivres (Livre $livres){ //here we are creating an argument for the setter method with the object(Livre) type.
            $this->_livres[] = $livres;  //here we are setting the (_livres) property to this $livres variable, where we stock the data we get from new objects / user
        }

        public function getLivres (){
            return $this->_livres;
        }

        public function __toString(){
            return $this->_prenom . $this->_nom;

        }

        public function afficherBibliographie (){
            //$auteurLivre = $this->_prenom . $this->_nom;
            $result = "<br><b>Livres de $this:</b><ul>";       //$this here, refers to all the elements we have in our class
            foreach($this->_livres as $livre){
                //if ($auteurLivre == $auteurLivre)
                    $result .= "<li> $livre</li>";
                }
                $result .= "</ul>";
                return $result;
        }
    }
