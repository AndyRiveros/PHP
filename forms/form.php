<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){

    var_dump($_POST);

}
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Forms</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="post">
            <div>
                <label for="title">Title</label>: <input type ="text" name="title" id="title" placeholder="title">
            </div>

            <input name = "username">
            <input name="password" type="password">

            <div>
                <input type="checkbox" name="terms" value="yes" id="visible" checked>I agree
                <label for="visible">Visible</label>

                <label><input type="checkbox" name="Invisible" value="No">Invisible</label>
                solo para checkbox y radiobutton
            </div>

            <p>Which colours do you like?</p>
            <div>
                <input type="checkbox" name="red">Red
            
                <input type="checkbox" name="green">Green
            
                <input type="checkbox" name="blue">Blue
            </div>


            <fieldset>
                <legend>ATTRIBUTES</legend>
                
                <input type="radio" name="colour" value="Red">Red
            
                <input type="radio" name="colour" value="Green">Green
            
                <input type="radio" name="colour" value ="Blue">Blue
            
            </fieldset>
            

            <select name="country">
                <optgroup label="Europe">
                    <option value="germany" selected>Germany</option>
                    <option value="france">France</option>
                    <option value="uk" disabled>United Kingdom</option>
                </optgroup>
                <optgroup label="America">
                    <option value="Brazil">Brasil</option>
                    <option value="Canada">Canada</option>
                    <option value="USA">United States</option>
                </optgroup>
            </select>

            <button>Send</button>

        </form>

    </body>
</html>
