<?php
$error = null;
if ($_GET){
    if ( ! $_GET['name']) {
        $error .= "Error:  The full name is required.<br>";    }
    else {
        $chars = str_split($_GET['name']);
        foreach ($chars as $char){
            if(! ctype_alpha($char)){
                $error .= "Error:  City must contain only letters.<br>";
                break;
            }
        }           
    }    
    if ( ! $_GET['email']) {
        $error .= "Error:  The e-mail is required.<br>";    }
    elseif (! filter_var($_GET['email'],FILTER_VALIDATE_EMAIL))    {
        $error .= "Error:  Only get valid e-mail.<br>";    }   

    if ( ! $_GET['phone_num']) {
        $error .= "Error:  The phone number is required.<br>";    }            
    elseif (! preg_match('/^[0-9]{10}+$/', $_GET['phone_num'])) {
        $error .= "Error:  Only get digits in phone number.<br>";    }
        
    if ( ! $_GET['recipe_name']) {
        $error .= "Error:  The recipe name is required.<br>";    }

    if ( ! $_GET['ingredients']) {
        $error .= "Error:  The ingredients are required.<br>";    }

    if ( ! $_GET['preparation']) {
        $error .= "Error:  The preparation process is required.<br>";    }
    if(isset($error)){
            echo $error;
    }
    else{
        $name = $_GET['name'];
        $email = $_GET['email'];
        $phone_num = $_GET['phone_num'];
        $recipe_name = $_GET['recipe_name'];
        $ingredients = $_GET['ingredients'];
        $preparation = $_GET['preparation'];

        echo $name.'<br>'.$email.'<br>'.$phone_num.'<br>'.$recipe_name.'<br>'.$ingredients.'<br>'.$preparation;


    }
}

?>
<!doctype html>
<html>
	<head>
		<title>Nana's Food - Recips&Guides</title>
        <meta charset="utf-8">
        <style>
            /* table{text-align: center;} */
            /* table,td,tr{border: solid black;} */
        </style>
	</head>
	<body>
        <form>
            <header>
                <h1> Adding recipe:</h1>
                <p>We would love you to suggest us a new recipe that we don't have.<br>
                we are promise to keep you updated with our decision.</p>
            </header>
            <fieldset>
                <legend><b>Fill up the following information</b></legend>
                <h4>Personal information:</h4>
                <table>
                    <tr><td>Full name:</td><td><input type = "text" name = "name" maxlength="25"></td></tr>
                    <tr><td>Email address:</td><td><input type = "email" name = "email"></td></tr>
                    <tr><td>Phone number:</td><td><input type = "text" name = "phone_num" maxlength="10"></td></tr>
                </table>

                <h4>Recipe information:</h4>
                <table>
                    <tr><td>Name of recipe:</td><td><input type = "text" name = "recipe_name" maxlength="50" placeholder="max 50 chars"></td></tr>
                    <tr><td>What are the ingredients:</td><td><textarea name = "ingredients" cols = "30" rows = "10" maxlength="100" placeholder="max 100 chars"></textarea></td></tr>
                    <tr><td>The preparation process:</td><td><textarea name = "preparation" cols = "30" rows = "10" maxlength="250" placeholder="max 250 chars"></textarea></td></tr>
                </table>
                
                <table>
                    <tr><td>reset?</td><td><input type="reset" value="reset"></td></tr>
                    <tr><td>submit?</td><td><input type="submit" value="submit this recipe"></td></tr>
                </table>
            </fieldset>
        </form>

    </body>
</html>