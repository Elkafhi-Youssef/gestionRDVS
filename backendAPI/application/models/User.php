<?php

    class Users{

        private $db = null;
        public function __construct(){
            $this->db = new Db();
        }

        // Get all users
       

        

       
        
        public function login($email,$pass){
            $this->db->prepareQuery("SELECT * FROM user where email =? and password = ?");
            $this->db->execute([$email,$pass]);
            return  $this->db->getRow(); 
            
        }
        public function getAllMovies(){
            $this->db->prepareQuery("SELECT * FROM post
            where categoryFilm ='Movies'");
           $this->db->execute();
            return  $this->db->getResult(); 
            
        }
        public function getAllSerials(){
            $this->db->prepareQuery("SELECT * FROM post
            where categoryFilm ='Serials'");
           $this->db->execute();
            return  $this->db->getResult(); 
            
        }
     }