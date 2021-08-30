<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class DbModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function auth($email,$pass){
        $querry=$this->db->get("person");
        $tab=$querry->result_array();
        foreach ($tab as $t){
            if ($t['email']==$email && $t['mdp']==$pass){
                return $t;
            }
        }
        return NULL;
    }

    public function getAmis($id){
        $Q="SELECT *  FROM `amie` WHERE `id_1` =$id";
        $qe = $this->db->query($Q);
        return $qe->result_array();
    }

    public function getPerson($id){
        $querry = $this->db->get("person");
        $tab = $querry->result_array();
        $res=array();
        foreach($tab as $t){
            if($t['idP']==$id){
                $res=$t;
            }
        }
        return $res;
    }
    public function getPersonNom($id){
        $querry = $this->db->get("person");
        $tab = $querry->result_array();
        $res=array();
        foreach($tab as $t){
            if($t['Nom']==$id){
                $res=$t;
            }
        }
        return $res;
    }

    public function sendMess($a1,$a2,$mess){
        $Q= "INSERT INTO `message` (`idM`, `message`, `a1`, `a2`) VALUES (NULL, '$mess', $a1, $a2)";
        $this->db->query($Q);
    }
    public function SaveUsers($nom,$email,$pass){
        $Q= "insert into person value(NULL,'$nom','$email','$pass')";
        $this->db->query($Q);
    }

    public function tlmd($id){
        $querry=$this->db->get("person");
        $tab=$querry->result_array();
        foreach ($tab as $t){
            if ($t['idP']!=$id){
                $tmp=$t['idP'];
                $Q="INSERT INTO `amie` (`idAmi`, `id_1`, `id_2`) VALUES (NULL, '$id', '$tmp')";
                $this->db->query($Q);
                $Q="INSERT INTO `amie` (`idAmi`, `id_1`, `id_2`) VALUES (NULL, '$tmp', '$id')";
                $this->db->query($Q);
            }
        }
        
    }
}