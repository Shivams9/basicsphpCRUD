<?php
try{
    print "Try block";
    throw new Execption();

}catch(Execption $e){
    print "Something went wrong, Cought it!";

}finally{
    print "this part is always executed";
}
/* When an execption is thrown, code  following the statement will not be executed, and php will attempt to find the first 
matching catch block.

If an execption is not caught, a PHP Fatal Error will be issued with an "Uncaught Execption ". An execption
can be thrown, and caught within PHP. 
*/