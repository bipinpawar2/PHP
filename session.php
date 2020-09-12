<?php
/* A session is a way to store information (in variables) to be used across multiple pages.
 When you work with an application, you open it, do some changes, and then you close it. This is much like a Session. 
 The computer knows who you are. It knows when you start the application and when you end. 
 But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.
 Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc).
 By default, session variables last until the user closes the browser. 


NOTE :The session_start() function must be the very first thing in your document. Before any HTML tags.

*/

     session_start();                  // File no 1.
     $_SESSION["id"]="user no 1";         //value=id  and name = user no 1.
     echo "session is set";
 
     session_start();         //File no 2. To view session we have created this new file
     print_r($_SESSION);
/*
     session_start();        // File no3. Again new file to delete or destroy session.
     session_unset();        //unset is function for which remove variable which has been created.
     session_destroy();       // session directly dosn't destroy .Therefore unset is used.
     echo"session is destroy";
*/
     if(isset($_SESSION["id"]))
     {                                    // To check session is set or not.
      echo "it is set";                   // we can use in any file.
     }
?>