
    function validationForm()
    {
       let firstname = document.forms["Form"] ["firstname"].value;

       let lastname =document.forms["Form"] ["lastname"].value;

       let Email =document.forms["Form"] ["Email"].value;

       let Phone = document.forms["Form"] ["phone"].value;

        
       var regPhone= /^\d{10}$/;
       
       var regEmail=/^\w+([\.-]?\w+)@\w+([\.-]?(\.\w){2,3})+$/g;

       if(phone ==""||!regPhone.test(phone))
       {
          alert("please enter valid email");
          return false;
       }
       if(email =="" || ! regEmail.test(email))
       {
          window.alert("please enter a valid  e-mail address");
          return false;
       }
    }