<?php 
    class produk{
        private $dbh;
        public function __construct($dbh){
            $this->dbh = $dbh;
        }

        public function dataBarang(){
            $sql="SELECT * FROM produk";
            $rs = $this->dbh->query($sql);
            return $rs;
        }
        
        public function getAllJenis(){
            $sql = "SELECT * FROM produk";
            // fungsi query, eksekusi query dan ambil datanya
            $rs = $this->dbh->query($sql); 
            return $rs;
        }
    }
?>
