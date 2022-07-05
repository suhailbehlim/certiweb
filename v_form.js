function signupform() {
      
         if( document.signup.Name.value == "" ) {
            alert( "Please provide your name!" );
            document.signup.Name.focus() ;
            return false;
         }
         if( document.signup.EMail.value == "" ) {
            alert( "Please provide your Email!" );
            document.signup.EMail.focus() ;
            return false;
         }
         
         }
         return( true )