$(document).ready(function(){
  $('.form').validate({
    rules: {
       courier: {
        required: true
       
      },
      username: {
        required: true
      },
      secret: {
        required: true
       
      },
      answer: {
        required: true
       
      },
       name: {
        required: true,
        email: true
      },
       email: {
        required: true,
        email: true
      },
       phone: {
        required: true,
        email: true
      },
      desig: {
       
        required: true
      },
      store: {
       
        required: true
      },	
      psw: {
        minlength: 6,
        required: true
      },
      psw2: {
        equalTo: "#pword"
      },
       order_type: {
        required: true
       
      },
      provider: {
        required: true
      },
      desc: {
        required: true
       
      },
      price: {
        required: true
       
      },
       r_phone: {
        required: true
       
      },
             r_email: {
        required: true
       
      },
      r_address: {
        required: true
      },
      order_no: {
        required: true
       
      },
        the_date: {
        required: true
       
      }
	
    }
  });
  
   
   
});

