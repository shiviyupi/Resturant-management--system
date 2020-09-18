<?php

class LOGIN2 extends CI_MODEL{

public function registration($data){
  $q=  $this->db->insert('res',$data);
  return $this->db->insert_id();


}
public function login( $data){
   $q=  $this->db->insert('login',$data);
}

public function getdata(){
   $query=$this->db->get('login');
   return $query->result();
}
   public function insert_food($data){
     $q=  $this->db->insert('orders',$data);
   }
   public function getprice(){
      $query=$this->db->get('orders');
    return $query->result();
   }
   public function getpricenonveg(){
      $query=$this->db->get('orders');
    return $query->result();
   }
   public function dototal(){
      $query=$this->db->get('orders');
    return $query->result();

   }

   public function adminlogin( $data){
      $q=  $this->db->insert('admin',$data);
   }


   public function contact( $data){
      $q=  $this->db->insert('contactus',$data);
   }
















  public  function get_user($usr, $pwd)
   {
        $this->db->where('username', $usr);
        $this->db->where('password', md5($pwd));
        $query = $this->db->get('login');
        //echo $query;
        return $query->num_rows();
   }
}





   ?>