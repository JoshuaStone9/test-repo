<? php
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    //Database Connection
    $conn = new mysqli('localhost', 'admin', 'root', '','users');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(uname, pass)
            values(?, ?)");
            $stmt->bind_param("ss", $uname, $pass);
            $stmt->execute();
            echo "registration Successfully..."
            $stmt->close();
            $conn->close();
    }
    
?>