<?php 
    include("humano.php");
    include("ser-vivo.php");
    class Ingeniero implements SerVivo, Humano{
        
        public function vivir(){
            echo "Ingeniero vive";
        }

        public function morir(){
            echo "Ingeniero muere TT";
        }

        public function reproducir(){
            echo "Ingeniero nunca jamas hará esto";
        }

        public function caminar(){
            echo "Camina";
        }

        public function saltar(){
            echo "Salta";
        }

        public function estudiar(){
            echo "Nunca";
        }

    }

?>