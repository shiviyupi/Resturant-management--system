<?php
class login3 extends CI_CONTROLLER{

public function register(){
    $this->load->view('login');
  // $p= $this->input->post('mysubmit');
  if($this->input->post('submit'))
  {
    
        $data['username']=$this->input->post('username');
        $data['password']=$this->input->post('password');
        $this->load->model('LOGIN2');
        $s=$this->LOGIN2->registration($data);
      if(!$s){
       //   $this->load->view('after_register');
         return  redirect ('login3/dashboard');
      }
      else {
          echo "not done" ;
      }
}

}
public function dashboard(){
    $this->load->view('after_register');
}
 public function login(){

 // if($this->input->post('login'))
  //{ 
    
    $this->load->helper(array('form', 'url'));

    $this->load->library('form_validation');

    $this->form_validation->set_rules(' Username', 'Username', 'required|matches[Username]');
    $this->form_validation->set_rules('Password', 'Password', 'required|alpha_numeric');
   

   if ($this->form_validation->run() == FALSE)
   {
           $this->load->view('after_register');
   }
   else
   { 
    $data['Username']=$this->input->post('Username');
    $data['Password']=$this->input->post('Password');
    //$name = $_SESSION['Username'];
 // $password = $_SESSION['Password'];
    $newdata = array(
    'username'  => 'shivangi@123',
    'email'     => '123',
    'logged_in' => TRUE
);

  $p=$this->session->set_userdata($newdata);
    $this->load->model('LOGIN2');
    $s=$this->LOGIN2->login($data);
  if(!$s){
   $this->load->view('myprofile');
    echo $p;
   //  return  redirect ('login3/dashboard');
  
  }
  else {
      echo " done" ;
  }
         
   }
  
  }
 public function menu(){
   $this->load->view('menu');
 }
   public function orders(){
     $this->load->view('orders');

   }
   public function getusername(){
     $this->load->model('LOGIN2');
     $login_id = new LOGIN2;
     $data['d']= $login_id->getdata();
     $this->load->view('myprofile',$data);
   }
                public function invoice (){
    

          $this->load->view('invoice');
    if($this->input->post('submit'))
    {
      
        $data['snacks']=$this->input->post('Snacks');
      
        
          $data['maincourse']=$this->input->post('maincourse');
     
          $data['desserts']=$this->input->post('desserts');
        
          $this->load->model('LOGIN2');
          $s=$this->LOGIN2->insert_food($data);
        if(!$s){
         //   $this->load->view('after_register');
           return  redirect ('login3/payment');
        }
        else {
            echo "not done" ;
        }
  }
}
 public function payment(){
  $this->load->model('LOGIN2');
  $login_id = new LOGIN2;
  $data['d']= $login_id->getprice();
  $this->load->view('payment',$data);
 }
 public function invoicenon (){
    

  $this->load->view('invoice');
if($this->input->post('submit'))
{

$data['nonvegsnacks']=$this->input->post('nonvegsnacks');


  $data['nonvegcurry']=$this->input->post('nonvegcurry');

  $data['nonvegdesserts']=$this->input->post('nonvegdesserts');

  $this->load->model('LOGIN2');
  $s=$this->LOGIN2->insert_food($data);
if(!$s){
 //   $this->load->view('after_register');
   return  redirect ('login3/nonveg');
}
else {
    echo "not done" ;
}
}
 }
       
   public function nonveg(){

    $this->load->model('LOGIN2');
    $login_id = new LOGIN2;
    $data['d']= $login_id->getpricenonveg();
    $this->load->view('nonveg_payment',$data);
   }

   public function total(){
    $this->load->model('LOGIN2');
    $login_id = new LOGIN2;
    $data['d']= $login_id->dototal();
    $this->load->view('nonveg_payment',$data);

   }
  
  public function contactus(){
  $this->load->view('contactus');
  if($this->input->post('submit')){
    
    
      $data['name']=$this->input->post('name');
      $data['email']=$this->input->post('email');
      $data['mobile']=$this->input->post('mobile');
      $data['query']=$this->input->post('query');
      $this->load->model('LOGIN2');
      $s=$this->LOGIN2->contact($data);
    if(!$s){
      echo "query submitted";
     //   $this->load->view('after_register');
      // return  redirect ('login3/dashboard');
    }
    else {
        echo "not done" ;
    }
}

  }





}
?>