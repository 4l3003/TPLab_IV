<?php
    namespace Models;
   
    class Funcion {
        private $id_funcion;
        private $id_cine;       
        private $id_sala;
        private $id_pelicula;
        private $horaYdia;
       
        

        function __construct($id_funcion = '',$id_cine = '',$id_sala = '', $id_pelicula = '', $horaYdia = '')
        {  
            $this->id_funcion = $id_funcion;
            $this->id_cine = $id_cine;
            $this->id_sala = $id_sala;
            $this->id_pelicula = $id_pelicula;
            $this->horaYdia = $horaYdia;
                       
        }               

       
        public function getId_funcion()
        {
                return $this->id_funcion;
        }

        
        public function setId_funcion($id_funcion)
        {
                $this->id_funcion = $id_funcion;
               
        }

         
        public function getId_sala()
        {
                return $this->id_sala;
        }

       
        public function setId_sala($id_sala)
        {
                $this->id_sala = $id_sala;
              
        }

         
        public function getId_pelicula()
        {
                return $this->id_pelicula;
        }

        
        public function setId_pelicula($id_pelicula)
        {
                $this->id_pelicula = $id_pelicula;
               
        }
 
        public function gethoraYdia()
        {
                return $this->dia;
        }

       
        public function sethoraYdia($dia)
        {
                $this->dia = $dia;
               
        }

        public function getId_cine()
        {
                return $this->id_cine;
        }

        
        public function setId_cine($id_cine)
        {
                $this->id_cine = $id_cine;
               
        }
    }

?>