<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

      $clientname = $_POST["cname"];
      $cemail = $_POST["cemail"];
      $cnumber = $_POST["cnum"];
      $caltnumber = $_POST["caltnum"];
      $cadhar = $_POST["cadhar"];
      $cpanno = $_POST["cpan"];
      $cstate = $_POST["cstate"];
      $cdistrict = $_POST["cdistrict"];
      $ccity = $_POST["ccity"];


      if(!empty($clientname) && !empty($cemail) && !is_numeric($clientname))
      {

        $query = "insert into clientdata (cname,cemail,cnum,caltnum,cadhar,cpan,cstate,cdistrict,ccity) values('$clientname','$cemail','$cnumber','$caltnumber','$cadhar','$cpanno','$cstate','$cdistrict','$ccity')";

        mysqli_query($con, $query);

        echo"<script type='text/javascript'>alert('Sucesfully Registered.')</script>";
      }
      else{

        echo"<script type='text/javascript'>alert('Enter Valid details.')</script>";
      

      }


    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <title>ClientDetails</title>
     <link rel="stylesheet" href="./styless/userd.css">
</head>

<body>
     <div id="workerform" style="display: block;">
          <h2>KYC-FORM:(client)</h2>
          <form method="POST" id="signup">

               <label>Name:</label>
               <input type="text" name="cname" required><br>

               <label>Email:</label>
               <input type="text" name="cemail" placeholder="optional"><br>

               <label>Mobile Number:</label>
               <input type="text" name="cnum" required><br>

               <label>Alternate Number:</label>
               <input type="text" name="caltnum" placeholder="optional"><br>

               <label>Adhar Number:</label>
               <input type="text" name="cadhar" required><br>

               <label>PAN Number:</label>
               <input type="text" name="cpan" required><br>

               <label>State:</label>
               <select id="Cities" name="cstate" required>
                    <option value="select">Telangana</option>
               </select>

               <div class="address">
                    <label>District:</label>
                    <select id="districts" name="cdistrict">
                         <option value="select">Select District</option>
                         <option value="Adilabad">Adilabad</option>
                         <option value="Bhadradri Kothagudem">Bhadradri Kothagudem</option>
                         <option value="Hyderabad">Hyderabad</option>
                         <option value="Jagtial">Jagtial</option>
                         <option value="Jangaon">Jangaon</option>
                         <option value="Jayashankar Bhupalpally">Jayashankar Bhupalpally</option>
                         <option value="Jogulamba Gadwal">Jogulamba Gadwal</option>
                         <option value="Kamareddy">Kamareddy</option>
                         <option value="Karimnagar">Karimnagar</option>
                         <option value="Khammam">Khammam</option>
                         <option value="Kumuram Bheem">Kumuram Bheem</option>
                         <option value="Mahabubabad">Mahabubabad</option>
                         <option value="Mahabubnagar">Mahabubnagar</option>
                         <option value="Mancherial">Mancherial</option>
                         <option value="Medak">Medak</option>
                         <option value="MedchalMalkajgiri">Medchal Malkajgiri</option>
                         <option value="Nagarkurnool">Nagarkurnool</option>
                         <option value="Nalgonda">Nalgonda</option>
                         <option value="Narayanpet">Narayanpet</option>
                         <option value="Nirmal">Nirmal</option>
                         <option value="Nizamabad">Nizamabad</option>
                         <option value="Peddapalli">Peddapalli</option>
                         <option value="Rajanna Sircilla">Rajanna Sircilla</option>
                         <option value="Ranga Reddy">Ranga Reddy</option>
                         <option value="Sangareddy">Sangareddy</option>
                         <option value="Siddipet">Siddipet</option>
                         <option value="Suryapet">Suryapet</option>
                         <option value="Vikarabad">Vikarabad</option>
                         <option value="Wanaparthy">Wanaparthy</option>
                         <option value="Warangal Rural">Warangal Rural</option>
                         <option value="Warangal Urban">Warangal Urban</option>
                         <option value="Yadadri Bhuvanagiri">Yadadri Bhuvanagiri</option>
                    </select>

                    <label>City:</label>
                    <select id="Cities" name="ccity">
                         <option value="select">Select City</option>
                         <option value="Hanamkonda">Hanamkonda</option>
                         <option value="Kazipet">Kazipet</option>
                         <option value="Warangal">Warangal</option>
                         <option value="Jangaon">Jangaon</option>
                         <option value="Mahabubabad">Mahabubabad</option>
                         <option value="Narsampet">Narsampet</option>
                         <option value="Bhupalpally">Bhupalpally</option>
                         <option value="Thorrur">Thorrur</option>
                         <option value="Mangapet">Mangapet</option>
                         <option value="Ghanpur (Station)">Ghanpur (Station)</option>
                         <option value="Nellikudur">Nellikudur</option>
                         <option value="Parkal">Parkal</option>
                         <option value="Atmakur">Atmakur</option>
                         <option value="Duggondi">Duggondi</option>
                         <option value="Rayaparthy">Rayaparthy</option>
                         <option value="Regonda">Regonda</option>
                         <option value="Bachannapeta">Bachannapeta</option>
                         <option value="Chennaraopet">Chennaraopet</option>
                         <option value="Devaruppula">Devaruppula</option>
                         <option value="Geesugonda">Geesugonda</option>
                         <option value="Ghanpur (Mulug)">Ghanpur (Mulug)</option>
                         <option value="Gudur">Gudur</option>
                         <option value="Kesamudram">Kesamudram</option>
                         <option value="Maddur">Maddur</option>
                         <option value="Mulkalapally">Mulkalapally</option>
                         <option value="Narmetta">Narmetta</option>
                         <option value="Nekkonda">Nekkonda</option>
                         <option value="Raiparthy">Raiparthy</option>
                         <option value="Venkatapur">Venkatapur</option>
                         <option value="Wardhannapet">Wardhannapet</option>
                    </select>
               </div>
               <br>
               <input type="submit" name="submit">
          </form>
     </div>
</body>

</html>