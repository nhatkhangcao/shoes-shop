<?php


function createshcart($productname, $productimg, $price, $amount, $ctotal,$idbill){
    $conn=connectdb();

    $sql = "INSERT INTO cart (productname, productimg, price, amount, ctotal,idbill)
    VALUES ('$productname', '$productimg', '$price', '$amount', '$ctotal','$idbill')";
        // use exec() because no results are returned
    $conn->exec($sql);

    $conn = null;
 
    
}

function createorder($name, $address, $phone, $email, $total){
    $conn=connectdb();

    $sql = "INSERT INTO bill (name, address, phone, email, total)
    VALUES ('$name', '$address', '$phone', '$email', '$total')";
        // use exec() because no results are returned
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();

    $conn = null;
    return $last_id;    
    
}

function connectdb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project1";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
        
    } catch(PDOException $e) {
        return $e->getMessage();
    }

   
}



function showcart()
{
    $shinfo="";
    if (isset($_SESSION['shcart']) && (is_array($_SESSION['shcart']))) {
        if (sizeof($_SESSION['shcart']) > 0) {
            $total = 0;
            for ($i = 0; $i < sizeof($_SESSION['shcart']); $i++) {

                $price = ($_SESSION['shcart'][$i][2]) * ($_SESSION['shcart'][$i][3]);
                $total += $price;


                $shinfo.= '<tr>
                            <td>' . ($i + 1) . '</td>
                            <td><img src="' . $_SESSION['shcart'][$i][0] . '"></td>
                            <td>' . $_SESSION['shcart'][$i][1] . '</td>
                            <td>' . $_SESSION['shcart'][$i][2] . '</td>
                            <td>' . $_SESSION['shcart'][$i][3] . '</td>
                            <td>
                                <a href="cart.php?delid=' . $i . '"><button style="
                                background: #000;
                                border: 1px solid #000;
                                border-radius: 20px;
                                color: #fff;
                            }">Delete</button></a>
                            </td>
                        </tr>';
            }
            $shinfo.=  '
                    
                        <tr>
                            <th style="padding-top: 50px;" colspan="3">Total</th>
                            
                            <th><div style="padding-top: 50px;">' . $total . '.00$</div></th>
                        
                        </tr>
                        
                    ';
        }
    }
    return $shinfo;
}


function total()

{   
    $total = 0;
    if (isset($_SESSION['shcart']) && (is_array($_SESSION['shcart']))) {
        if (sizeof($_SESSION['shcart']) > 0) {
            
            for ($i = 0; $i < sizeof($_SESSION['shcart']); $i++) {

                $price = ($_SESSION['shcart'][$i][2]) * ($_SESSION['shcart'][$i][3]);
                $total += $price;


                
        }
        }
    }
    return $total;
}
?>