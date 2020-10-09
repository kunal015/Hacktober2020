
       <?php
        $name=$_POST['name'];
        $email=$_POST['mail'];
        $pass=$_POST['pass'];
        $dob=$_POST['dob'];
        $gender=$_POST['gender'];
		$time="";
        $conn=new mysqli("localhost","root","hpcomp15","reg");
        if(!$conn){
            die('Connection Failed');
        }
        else
        {
             $stmt= $conn->prepare("insert into info values(?,?,?,?,?,?)");
             $stmt->bind_param($name,$email,$pass,$dob,$gender,$time);
             $stmt->execute();
             $stmt->close();
             $conn->close();
			 echo 'Connected';
        }
        ?>
