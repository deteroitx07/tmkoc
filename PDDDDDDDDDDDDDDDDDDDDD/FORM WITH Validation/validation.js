function validateForm() {
    let firstname = document.forms["myForm"]["firstname"].value;

    let middlename = document.forms["myForm"]["middlename"].value;

    let lastname = document.forms["myForm"]["lastname"].value;

    let phone = document.forms["myForm"]["phone"].value;

    let email = document.forms["myForm"]["email"].value;

    let percentile = document.forms["myForm"]["percentile"].value;

    let address = document.forms["myForm"]["address"].value;

    var regPhone=/^\d{10}$/; //FOR number validation

    var nameval=/^[A-Za-z ]+$/;  //FOR Name validation

    var regEmail=/^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/g; //For Email validation


    
    if (firstname==null || firstname=="")
    {  
      alert("Name can't be blank");  
      return false;
    }
    
    if(!nameval.test(firstname))
     {  
       alert("Only Alphabets Allowed");  
       return false;
     } 

    if (middlename == "") {
      alert("Middle name must be filled out");
      return false;
    }

    if(!nameval.test(middlename))
     {  
       alert("Only Alphabets Allowed");  
       return false;
     } 

    if (lastname == "") {
      alert("Last name must be filled out");
      return false;
    }

    if(!nameval.test(lastname))
     {  
       alert("Only Alphabets Allowed");  
       return false;
     } 

    if (phone == "" || !regPhone.test(phone)) {
                      alert("Please enter valid phone number.");
                      return false;
                  }

    if (email == "" || !regEmail.test(email)) {
                      window.alert("Please enter a valid e-mail address.");
                      return false;
                  }

    if (percentile == "") {
      alert("CET percentile must be filled out");
      return false;
    }
    
    if (address == "") {
                      window.alert("Please enter your address.");
                      return false;
                  }
  }