<!DOCTYPE html>
<html>

<head>
     <title>Find a Worker</title>
     <link rel="stylesheet" type="text/css" href="./styless/styles.css">
     <style>
     /* General styling */
     body {

          display: flex;
          height: 100vh;
          font-family: Arial, sans-serif;
          background-image: url('bg.avif');
          background-position: center;
          background-size: 100% 100%;
          background-repeat: no-repeat;
     }


     h1 {
          text-align: left;
     }

     /* Form container */
     .search-form {
          display: flex;
          align-items: center;
          width: 35%;
          height: 555px;
          float: left;
          padding: 40px;
          margin-top: 10px;
          margin-right: 10px;
          background-color: black;
          color: #ffff;
          border: 2px solid white;
          border-radius: 3%;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          text-align: center;
     }

     /* Input fields and labels */
     .search-form input[type="text"],
     .search-form input[type="submit"] {
          display: inline-block;
          width: 51%;
          /* Adjust this width as needed */
          padding: 10px;
          margin-bottom: 10px;
          border: 2px solid #ccc;
          border-radius: 4px;
     }

     .address {
          display: inline-block;
          width: 80%;
          height: 300px;
          padding: 40px;
          margin-top: 10px;
          margin-bottom: 10px;
          border: 2px solid #ccc;
          border-radius: 4px;
     }

     .link {
          display: inline-block;
          width: 90%;
          height: auto;
          padding: 40px;
          margin-top: 10px;
          margin-bottom: 10px;
          border: 4px solid black;
          border-radius: 4px;
     }

     .search-form input[type="submit"] {
          width: 330px;
          background-color: #007bff;
          color: #fff;
          border: none;
          padding: 10px;
          cursor: pointer;
     }

     /* Worker results container */
     .worker-results {
          width: 100%;
          height: 90%;
          float: right;
          padding: 20px;
          margin-top: 0px;
          display: flex;
          flex-direction: column;
          border-radius: 2%;
          border: 4px solid black;
          background-color: white;
          font-weight: bold;
          font-size: larger;
          color: #ffff;
     }

     #districts,
     #Cities,
     #work {
          font-size: 14px;
          padding: 8px;
          width: 200px;
          margin-bottom: 15px;
          border-radius: 5px;
     }
     </style>

</head>

<body>

     <div class="search-form">

          <form method="post" action="">
               <h1>Search your worker here:</h1><br>

               <div class="address">
                    <label>Choose -- State :</label>
                    <input type="text" name="state" value="Telangana" required><br><br>

                    <label>Choose--District:</label>
                    <select id="districts" name="district">
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
                    </select><br><br>

                    <label> Choose -- City :</label>
                    <select id="Cities" name="city">
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
                    </select><br><br>


                    <label>Choose -- work :</label>
                    <select id="work" name="work">
                         <option value="#">Select a work here</option>
                         <option value="DailyLabour">Daily Labour</option>
                         <option value="Mechanic">Mechanic</option>
                         <option value="Teacher">Teacher</option>
                         <option value="Cook">Cook</option>
                         <option value="Houseshifting">House Shifting</option>
                         <option value="HouseHold worker">HouseHold worker</option>
                         <option value="Assignment Writers">Assignment Writers</option>
                         <option value="Electrician">Electrician</option>
                    </select><br><br>
                    <input type="submit" name="search" value="Search">
               </div>

          </form>
     </div>

     <div class="worker-results">
          <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search'])) {
    include('db.php');

    $work = $_POST['work'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $city = $_POST['city'];

    $query = "SELECT w_name, w_num FROM workerdata WHERE w_skill = '$work' AND w_state = '$state' AND w_district = '$district' AND w_city = '$city'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Create clickable links based on fetched data
            echo '<a class="link" href="new_php_file.php?worker_name=' . urlencode($row['w_name']) . '&mobile_number=' . urlencode($row['w_num']) . '">';
            echo "Worker Name: " . $row['w_name'] . "<br><br>Mobile Number: " . $row['w_num'] . "<br><br>";
            echo '</a>';
        }
    } else {
        echo "<h1 style='color: red; font-size: 24px;'>No workers found on specified area! <br><br>Sorry for inconvience😔<br></h1><h3  style='color: red; font-size: 18px;'>It's because they might be not registered on quickhire. Don't worry we'll expand<br> our network, corrently for now warangal urban, warangal got more workers.</h3>";
    }

    mysqli_close($conn);
}
?>

     </div>
</body>

</html>