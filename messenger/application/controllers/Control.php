<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Control extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dbModel');
    }

    public function view(){
        $this->load->view("login");
    }

    public function val(){
        $email=$this->input->post("email");
        $mdp=$this->input->post("mdp");
        $user=$this->dbModel->auth($email,$mdp);
        if($user){
            $this->session->set_userdata($user);
            redirect(base_url()."control/page");
        }else{
            redirect (base_url()."control/view");
        }
    }
    public function auth(){
        $email=$this->input->post("email");
        $mdp=$this->input->post("mdp");
        $nom=$this->input->post("nom");
        echo $email;
        $this->dbModel->SaveUsers($nom,$email,$mdp);
        $nom=$this->dbModel->getPersonNom($nom);
        $this->dbModel->tlmd($nom["idP"]);
        redirect (base_url()."control/view");
           
    }
    public function page($id2="3"){
        $id=$this->session->userdata();
        $amis=$this->dbModel->getAmis($id["idP"]);
        $data['amis']=$amis;
        $p1=$this->session->userdata("idP");
        $data['id1']=$p1;
        $prs=$this->dbModel->getPerson($id2); 
        $data['idP']=$id;
        $data["id2"]=$id2;
        $data["prs"]=$prs;
       
        $this->load->view("messenger",$data);
        $this->load->view("contact",$data);
        $this->load->view("mess",$data);
    }

    public function send($a1,$a2){
        $mess=$this->input->post("mess");
        $this->dbModel->sendMess($a1,$a2,$mess);
        redirect(base_url()."control/page/".$a2);
    }

    public function insc(){
        $this->load->view("isnc");
    }
    
    public function test(){
        
                $nom=$this->dbModel->getPersonNom("julio");
                $this->dbModel->tlmd($nom["idP"]);
                echo $nom["idP"];

                
        
    }


}