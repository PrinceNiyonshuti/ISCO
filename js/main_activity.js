function ge(el){
  return document.getElementById(el);
}

function ajax_changetab_and_send_data5(php_file, el, send_data){
  var hr=new XMLHttpRequest();
  hr.open('POST', php_file, true);
  hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  hr.onreadystatechange=function(){
      if(hr.readyState==4 && hr.status==200){
          ge(el).innerHTML=hr.responseText;
      }
  };

  hr.send(send_data);
}

function ajax_changetab_and_send_data6(php_file, el, send_data){
  var hr=new XMLHttpRequest();
  hr.open('POST', php_file, true);
  hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  hr.onreadystatechange=function(){
      if(hr.readyState==4 && hr.status==200){
          ge(el).innerHTML=hr.responseText;
      }
  };

  hr.send(send_data);
};

function ajax_changetab_and_send_data7(php_file, el, send_data){
  var hr=new XMLHttpRequest();
  hr.open('POST', php_file, true);
  hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  hr.onreadystatechange=function(){
      if(hr.readyState==4 && hr.status==200){
          ge(el).value=hr.responseText;
      }
  };

  hr.send(send_data);
};





function Ben_way_to_get_element(el){
  return document.getElementById(el);
}

function ajax_changetab_and_send_data(php_file, el, send_data){
  var hr=new XMLHttpRequest();
  hr.open('POST', php_file, true);
  hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  hr.onreadystatechange=function(){
      if(hr.readyState==4 && hr.status==200){
          Ben_way_to_get_element(el).innerHTML=hr.responseText;
      }
  };

  hr.send(send_data);
}

function ajax_changetab_and_send_data1(php_file, el, send_data){
  var hr=new XMLHttpRequest();
  hr.open('POST', php_file, true);
  hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  hr.onreadystatechange=function(){
      if(hr.readyState==4 && hr.status==200){
          Ben_way_to_get_element(el).value=hr.responseText;
      }
  };

  hr.send(send_data);
}

  function login1(){
  Ben_way_to_get_element('alert1').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Authenticating …</div>";

  var username=$('#username').val();
  var password=$('#password').val();
  
  $.ajax({
      type:'POST',
      url:'pages/login/login.php',
      data:{
          username:username,
          password:password,
  
      },
      
      success: function (response){
          $("#alert1").html(response);
      }
  
  });
  }



// Site registration

function register_site(){

  ge('Message2').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Creating New Site </div>";

  var formdata=new FormData();
  var ajax1=new XMLHttpRequest();
          
  var site_name=ge('site_name').value;
  var site_tel=ge('site_tel').value;
  var site_mail=ge('site_mail').value;
  var site_addrs=ge('site_addrs').value;

  formdata.append('site_name',site_name);
  formdata.append('site_tel',site_tel);
  formdata.append('site_mail',site_mail);
  formdata.append('site_addrs',site_addrs);
          
  ajax1.open('POST', 'site_data/new_site_save.php');//third argument can be true or false which is optional
  ajax1.send(formdata);
          
  ajax1.onreadystatechange=function(){
      ge('Message2').innerHTML=ajax1.responseText;
          
  }; 
          
}

 // Master update profile

function master_profile_update(){
        Ben_way_to_get_element('Message2').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Updating Your Profile . . . . </div>";
      
        var formdata=new FormData();
        var ajax1=new XMLHttpRequest();

          var m_id = Ben_way_to_get_element('m_id').value;
          var m_username = Ben_way_to_get_element('m_username').value;
          var m_mail = Ben_way_to_get_element('m_mail').value;
          var m_tel = Ben_way_to_get_element('m_tel').value;
          var m_pass = Ben_way_to_get_element('m_pass').value;
          var profile = Ben_way_to_get_element('profile').files[0];

          formdata.append('m_id', m_id);
          formdata.append('m_username', m_username);
          formdata.append('m_mail', m_mail);
          formdata.append('m_tel', m_tel);
          formdata.append('m_pass', m_pass);
          formdata.append('profile', profile);
      
        ajax1.open('POST', 'admin_data/complete_profile_update_data.php'); //third argument can be true or false which is optional
        ajax1.send(formdata);
      
        ajax1.onreadystatechange=function(){
            Ben_way_to_get_element('Message2').innerHTML=ajax1.responseText;
      
        }; 
}

// supervisor user registration

function register_supervisor(){

  ge('Message2').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Creating Supervisor Account . . .</div>";

  var formdata=new FormData();
  var ajax1=new XMLHttpRequest();
          
  
  var sup_name=ge('sup_name').value;
  var sup_mail=ge('sup_mail').value;
  var sup_tel=ge('sup_tel').value;
  var profile=ge('profile').files[0];
  var sup_gender=ge('sup_gender').value;

  formdata.append('sup_name',sup_name);
  formdata.append('sup_mail',sup_mail);
  formdata.append('sup_tel',sup_tel);
  formdata.append('profile',profile);
  formdata.append('sup_gender',sup_gender);
          
  ajax1.open('POST', 'supervisor_data/new_supervisor_save.php');//third argument can be true or false which is optional
  ajax1.send(formdata);
          
  ajax1.onreadystatechange=function(){
      ge('Message2').innerHTML=ajax1.responseText;
          
  }; 
          
}

// Security registration

function register_security(){

  ge('Message2').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Creating Security . . .</div>";

  var formdata=new FormData();
  var ajax1=new XMLHttpRequest();
          
  
  var sec_name=ge('sec_name').value;
  var sec_dob=ge('sec_dob').value;
  var sec_gender=ge('sec_gender').value;
  var sec_mail=ge('sec_mail').value;
  var sec_tel=ge('sec_tel').value;
  var profile=ge('profile').files[0];

  formdata.append('sec_name',sec_name);
  formdata.append('sec_dob',sec_dob);
  formdata.append('sec_gender',sec_gender);
  formdata.append('sec_mail',sec_mail);
  formdata.append('sec_tel',sec_tel);
  formdata.append('profile',profile);
  
          
  ajax1.open('POST', 'security_data/new_security_save.php');//third argument can be true or false which is optional
  ajax1.send(formdata);
          
  ajax1.onreadystatechange=function(){
      ge('Message2').innerHTML=ajax1.responseText;
          
  }; 
          
}

// assign Supervisor

function assign_supervisor(){

  ge('Message2').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Assigning Supervisor . . .</div>";

  var formdata=new FormData();
  var ajax1=new XMLHttpRequest();
          
  var site_id=ge('site_id').value;
  var sup_id=ge('sup_id').value;

  formdata.append('site_id',site_id);
  formdata.append('sup_id',sup_id);
          
  ajax1.open('POST', 'site_data/site_supervisor_assignment.php');//third argument can be true or false which is optional
  ajax1.send(formdata);
          
  ajax1.onreadystatechange=function(){
      ge('Message2').innerHTML=ajax1.responseText;
          
  }; 
          
}

// update Supervisor site

function update_site_supervisor(){

  ge('Message2').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Updating Supervisor . . .</div>";

  var formdata=new FormData();
  var ajax1=new XMLHttpRequest();
          
  var site_id=ge('site_id').value;
  var sup_id=ge('sup_id').value;

  formdata.append('site_id',site_id);
  formdata.append('sup_id',sup_id);
          
  ajax1.open('POST', 'site_data/update_site_supervisor_assignment.php');//third argument can be true or false which is optional
  ajax1.send(formdata);
          
  ajax1.onreadystatechange=function(){
      ge('Message2').innerHTML=ajax1.responseText;
          
  }; 
          
}


// assign Supervisor

function assign_security(){

  ge('Message2').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Assigning Security . . .</div>";

  var formdata=new FormData();
  var ajax1=new XMLHttpRequest();
          
  var site_id=ge('site_id').value;
  var sec_id=ge('sec_id').value;

  formdata.append('site_id',site_id);
  formdata.append('sec_id',sec_id);
          
  ajax1.open('POST', 'site_data/site_security_assignment.php');//third argument can be true or false which is optional
  ajax1.send(formdata);
          
  ajax1.onreadystatechange=function(){
      ge('Message2').innerHTML=ajax1.responseText;
          
  }; 
          
}

// assign Shifts

function assign_shift(){

  ge('Message2').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Assigning Shift . . .</div>";

  var formdata=new FormData();
  var ajax1=new XMLHttpRequest();
          
  var shift_id=ge('shift_id').value;
  var sec_id=ge('sec_id').value;

  formdata.append('shift_id',shift_id);
  formdata.append('sec_id',sec_id);
          
  ajax1.open('POST', 'shift_data/new_shift_assign.php');//third argument can be true or false which is optional
  ajax1.send(formdata);
          
  ajax1.onreadystatechange=function(){
      ge('Message2').innerHTML=ajax1.responseText;
          
  }; 
          
}

// update Securty Shift

function update_security_shift(){

  ge('Message2').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Updating Security Shift . . .</div>";

  var formdata=new FormData();
  var ajax1=new XMLHttpRequest();
          
  var shift_id=ge('shift_id').value;
  var sec_id=ge('sec_id').value;

  formdata.append('shift_id',shift_id);
  formdata.append('sec_id',sec_id);
          
  ajax1.open('POST', 'shift_data/update_shift_assign.php');//third argument can be true or false which is optional
  ajax1.send(formdata);
          
  ajax1.onreadystatechange=function(){
      ge('Message2').innerHTML=ajax1.responseText;
          
  }; 
          
}