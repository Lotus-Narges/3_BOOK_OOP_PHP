<?php
    //localhost:8888/OOP-PHP(Book)-Part3/Livre_class.php

    class Livre {

        private string $_titre;
        private int $_nbPages;
        private int $_aneeParution;
        private float $_prix;
        private Auteur $_auteur;

        public function __construct (string $titre, int $nbPages, int $aneeParution, float $prix, Auteur $auteur){

            $this->_titre = $titre;
            $this->_nbPages = $nbPages;
            $this->_aneeParution = $aneeParution;
            $this->_prix = $prix;
            $this->_auteur = $auteur;
            $this->_auteur->setLivres($this);
        }

        public function setTitre (string $titre){
            $this->_titre = $titre;
        }

        public function getTitre (){
            return $this->_titre;
        }

        public function setNbPages (int $nbPages){
            $this->_nbPages = $nbPages;
        }

        public function getNbPages (){
            return $this->_nbPages;
        }

        public function setAneeParution (int $aneeParution){
            $this->_aneeParution = $aneeParution;
        }

        public function getAneeParution (){
            return $this->_aneeParution;
        }

        public function setPrix (float $prix){
            $this->_prix = $prix;
        }

        public function getPrix (){
            return $this->_prix;
        }

        public function setAuteur (Auteur $auteur){
            $this->_auteur = $auteur;
        }

        public function getAuteur (){
            return $this->_auteur;
        }

        public function __toString (){
            return "$this->_titre ($this->_aneeParution): $this->_nbPages pages / $this->_prix € $this->_auteur";
        }

    }
