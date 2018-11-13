<?php
    class Persona{
        public $nombre;
        public $apellido;
        public $password;
        public $edad;
        public $fechaNacimiento;

        function registrarPersona(){
            echo "Se registrara la persona";
        }

        function vivir(){
            echo "Esto no tiene sentido";
        }

        function morir(){
            echo "Esto tampoco tiene sentido";
        }
    }
?>