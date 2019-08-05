<?php

class ValidatorService {
    
    public function validator(string $user, string $pass, string $name, string $email) {
        
        $regexUser  = '/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\0-9]/';
        $regexPass  = '/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/';
        $regexEmail = '/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/';
        $regexName  = '/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\0-9]/';
        
        if(preg_match($regexUser, $user)) { 
               return false; 
        }
        if(preg_match($regexPass, $pass)) { 
               return false; 
        }
        if(preg_match($regexEmail, $email)) { 
               return false; 
        }
        if(preg_match($regexName, $name)) { 
               return false; 
        }
        
        return true;
    }
}
