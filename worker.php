<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $workername = $_POST["w_name"];
    $email = $_POST["w_email"];
    $number = $_POST["w_num"];
    $adhar = $_POST["w_adhar"];
    $state = $_POST["w_state"];
    $district = $_POST["w_district"];
    $city = $_POST["w_city"];
    $skill = $_POST["w_skill"];

    if (!empty($workername) && !empty($number) && !empty($adhar) && !empty($state) && !empty($district) && !empty($city) && !empty($skill)) {
        // Insert data into the database
        $query = "INSERT INTO workerdata (w_name, w_email, w_num, w_adhar, w_state, w_district, w_city, w_skill) VALUES ('$workername', '$email', '$number', '$adhar', '$state', '$district', '$city', '$skill')";
        
        if (mysqli_query($conn, $query)) {
            // Set session variable after successful KYC completion
            echo "<script type='text/javascript'>alert('KYC completed.'); window.location='view.php'; </script>";
        } else {
            echo "<script type='text/javascript'>alert('Error: " . mysqli_error($conn) . "'); window.location='worker.php';</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Enter Valid details.'); window.location='worker.php';</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <title>WorkerDetails</title>
     <link rel="stylesheet" href="./styless/userd.css">
     <style>
     body {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          font-family: Arial, sans-serif;
          background-image: url("./assets/bg.avif");
          background-position: center;
          background-size: 100% 100%;
          background-repeat: no-repeat;
     }

     header {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          display: flex;
          padding: 20px;
          justify-content: space-between;
          align-items: center;
          border: none;
          border-radius: 0px 0px 23px 23px;
          box-shadow: 0 0 1px rgb(29, 26, 26);
          background-image: url("bg.avif");
          background-size: cover;
          background-repeat: no-repeat;
          z-index: 999;
          height: 5%;
          /* Default height for desktop */
          transition: height 0.3s ease;
          /* Header height transition */
     }

     /* Style for the logo */
     .logo img {
          width: 240px;
          height: auto;
          margin-left: 20px;
          /* Adjust as needed */
          transition: all 0.3s ease;
          /* Logo transition */
     }

     #workerform {
          background-color: #fff;
          padding: 20px;
          margin-bottom: 1px;
          border-radius: 8px;
          box-shadow: 0 0 40px rgba(0, 0, 0, 0.1);
          width: 400px;
     }

     input[type="text"],
     button {
          width: 50%;
          padding: 5px;
          margin-bottom: 15px;
          border: 1px solid #9f9f9f;
          border-radius: 4px;
          outline: none;
          /* Remove default focus outline */
          border: 1px solid #aaa;
          box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
     }

     input[type="submit"] {
          width: 50%;
          height: auto;
          padding: 10px;
          margin-left: 90px;
          margin-bottom: 10px;
          border: 1px solid #cccccc;
          border-radius: 4px;
          background-color: blue;
          color: #fff;
          cursor: pointer;
          outline: none;
          /* Remove default focus outline */
          border: 1px solid #aaa;
          box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
     }

     #signup-form img,
     #login-form img {
          width: 30px;
          height: 30px;
          margin: 10px;
     }

     label {
          font-weight: bold;
          padding: 5px;
          width: 150px;
          display: inline-block;
     }

     h2 {
          margin-top: 0%;
          text-align: center;
          font-size: 35px;
          color: #333;
          text-decoration: underline;
     }

     h4 {
          font-size: 14px;
          margin-bottom: 10px;
          color: #333;
     }

     /* Basic styling for the dropdown */
     #districts,
     #Cities,
     #skill {
          font-size: 14px;
          padding: 3px;
          width: 200px;
          margin-bottom: 15px;
          border-radius: 5px;
     }

     /* Style the dropdown arrow */
     #districts::after {
          content: "\25BC";
          /* Unicode for down arrow */
          position: absolute;
          top: 50%;
          right: 10px;
          transform: translateY(-50%);
          pointer-events: none;
          /* Make the arrow unselectable */
     }

     /* Style when dropdown is open */
     #districts:focus {
          outline: none;
          border: 1px solid #aaa;
          box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
     }
     </style>
</head>

<body>

     <header>
          <div class="logo">
               <img src="white.png" alt="Logo" />
          </div>
     </header>



     <div id="workerform" style="display: block;">
          <h2>KYC-FORM:</h2>
          <form method="POST" id="signup">

               <label>User Name:</label>
               <input type="text" name="w_name" required placeholder="Same as username"><br>

               <label>Email:</label>
               <input type="text" name="w_email" required placeholder="Mandatory"><br>

               <label>Mobile Number:</label>
               <input type="text" name="w_num" required placeholder="Mandatory"><br>

               <label>Adhar Number:</label>
               <input type="text" name="w_adhar" required placeholder="Mandatory"><br>

               <label>State:</label>
               <input type="text" name="w_state" required placeholder="Type 'Telangana'"><br>


               <div class="address">
                    <!-- Rest of the form fields -->
                    <label>District:</label>
                    <select id="districts" name="w_district">
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
                    <select id="Cities" name="w_city">
                         <option value="select">Select City</option>
                         <option value="Hanamkonda">Hanamkonda</option>
                         <option value="Kazipet">Kazipet</option>
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
                         <option value="Warangal">Warangal</option>
                         <option value="Wardhannapet">Wardhannapet</option>
                    </select>


                    <label>Profession:</label>
                    <select id="skill" name="w_skill">
                         <option value="client">Just to be a client!</option>
                         <option value="DailyLabour">Daily Labour</option>
                         <option value="Mechanic">Mechanic</option>
                         <option value="Teacher">Teacher</option>
                         <option value="Cook">Cook</option>
                         <option value="Houseshifting">House Shifting</option>
                         <option value="HouseHold worker">HouseHold worker</option>
                         <option value="Assignment Writers">Assignment Writers</option>
                         <option value="Electrician">Electrician</option>
                    </select>

               </div>
               <br>
               <input type="submit" name="submit">
          </form>
     </div>
</body>

</html>