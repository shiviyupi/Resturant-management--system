<?php
class admin extends CI_CONTROLLER{   
 public function adminlogin(){

   $this->load->view('admin');
   if($this->input->post('submit')) {
   $this->form_validation->set_rules('Email', 'Email', 'required|matches[Email]');
   $this->form_validation->set_rules('Password', 'Password', 'required|alpha_numeric');
  

  if ($this->form_validation->run() == FALSE)
  {   echo "validation not working";
    
    
  }
  else
  { 
   $data['Email']=$this->input->post('Email');
   $data['Password']=$this->input->post('Password');
  
   $this->load->model('LOGIN2');
   $s=$this->LOGIN2->adminlogin($data);
 if(!$s){
  return  redirect ('admin/admindashboard');
  
 }
 else {
     echo " done" ;
 }
        
  }
 
   }

  }

  public function admindashboard(){
    $this->load->view('admin_dashboard');
   // return  redirect ('view/admin_dashboard.php');
  
  }
 }


?>