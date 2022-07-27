<?php

session_start();

if(isset($_SESSION['userfname']))
{ ?>

 <form id="form3" action="add_address2.php" method=POST>
    <div class="address">

    <h3>Address Field:</h3>
    <label for="address1">Address-1:</label>
    <input type="text" value="" name="address1"><br><br>
    
    <label for="address2">Address-2:</label>
    <input type="text" value="" name="address2"><br><br>

    <label for="usercity">City:</label>
    <input type="text" value="" name="usercity"><br><br>
    
    <label for="userstate">State:</label>
    <input type="text" value="" name="userstate"><br><br>

    <label for="userzip">Zip Code:</label>
    <input type="text" value="" name="userzip"><br><br>

    <label for="usercountry">Country:</label>
    <input type="text" value="" name="usercountry"><br><br>

    <button>Add</button>
    
    </div>
 </form>

<?php }
?>