<?php
$error = null;
    if ($_GET){
        if ( ! $_GET['full_name']) {
            $error .= "Error:  The full name is required.<br>";    }
        else {
            $chars = str_split($_GET['full_name']);
            foreach ($chars as $char){
                if(is_numeric($char)){
                    $error .= "Error:  Full Name must contain only letters.<br>";
                    break;
                }
            }           
        }

        if ( ! $_GET['phone_number']) {
            $error .= "Error:  The phone number is required.<br>";    }            
        elseif (! preg_match('/^[0-9]{10}+$/', $_GET['phone_number'])) {
            $error .= "Error:  Only get digits in phone number.<br>";    }

        if ( ! $_GET['e_mail']) {
            $error .= "Error:  The e-mail is required.<br>";    }
        elseif (! filter_var($_GET['e_mail'],FILTER_VALIDATE_EMAIL))    {
            $error .= "Error:  Only get valid E-Mail.<br>";    }   

        if ( ! $_GET['city']) {
            $error .= "Error:  The city is required.<br>";    }
        else {
            $chars = str_split($_GET['city']);
            foreach ($chars as $char){
                if(is_numeric($char)){
                    $error .= "Error:  City name must contain only letters.<br>";
                    break;
                }
            }           
        }

        if ( ! $_GET['neighborhood']) {
            $error .= "Error:  The neighborhood is required.<br>";    }
        else {
            $chars = str_split($_GET['neighborhood']);
            foreach ($chars as $char){
                if(is_numeric($char)){
                    $error .= "Error:  Neighborhood name must contain only letters.<br>";
                    break;
                }
            }           
        }   
        
        if(isset($error)){
                echo $error;
        }
        else{
            $fullname = $_GET['full_name'];
            $phoneNum = $_GET['phone_number'];
            $e_mail = $_GET['e_mail'];
            $city = $_GET['city'];
            $neighborhood = $_GET['neighborhood'];
            echo $fullname.'<br>'.$phoneNum.'<br>'.$e_mail.'<br>'.$city.'<br>'.$neighborhood.'<br>';

            $transport = array('car', 'bus', 'bike', 'e-bike', 'foot', 'motorcycle');
            echo "the transpotaion veicles are: ";
            foreach ($transport as $key => $value) {                                 
                if(isset($_GET[$value])){
                    echo $value.' ';
                }
            }
        }
    }

?>
    
<!doctype html>
<html>
	<head>
		<title>Nana's Food - Recips&Guides</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">     
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>   
        <link rel="icon" href="Pics/icon.png" type="image/icon_path">
	</head>
	<body>
        <form>
            <header>
                <h1> So</h1>
            </header>
            <fieldset>
                <legend><b>welcome for the suggest</b></legend>
                <h4>Product Name:</h4>
                <p><input type = "text" name = "name"></p>
                <h4>Product Price:</h4>
                <p><input type = "number" name = "price"></p>
                <h4>Product Amount:</h4>
                <p><input type = "number" name = "amount"></p>
                <p><input type = "submit" name = "run"></p>
            </fieldset>
        </form>

    </body>
</html>
