<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <title>Sidebar Actions</title>
     <style>
     /* Basic styling for the layout */
     body {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          font-family: Arial, sans-serif;
          background-image: url('bg.avif');
          background-position: center;
          background-size: cover;
          background-repeat: no-repeat;
          padding-top: 60px;
          /* Ensure content starts below the fixed header */
          margin: 0;
          /* Reset default margin */
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

     .sidebar {
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
          background-image: url('bg.avif');
          background-size: cover;
          background-repeat: no-repeat;
          z-index: 999;
          height: 10%;
          /* Default height for desktop */
          transition: height 0.3s ease;
          /* Header height transition */
     }

     /* Adjusted styles for sidebar buttons */
     .sidebar button {
          width: 80px;
          /* Adjusted width */
          height: 80px;
          /* Adjusted height */
          padding: 10px;
          margin: 10px;
          /* Uniform margin */
          border: 2px solid #000;
          /* Slightly increased border thickness */
          border-radius: 100%;
          background-color: #fff;
          color: #000;
          font-weight: bold;
          font-size: 12px;
          /* Increased font size for better readability */
          cursor: pointer;
          outline: none;
     }

     /* Adjust content position to accommodate the fixed sidebar */
     .content {
          margin-top: 60px;
          /* Adjust based on the sidebar height */
          flex: 1;
          padding: 20px;
     }

     .hidden {
          display: none;
     }

     .container {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
     }

     .buttons-container {
          display: flex;
          padding: 15px;
          justify-content: center;
          align-items: center;
          flex-direction: column;
          margin-top: 0px;
     }

     .client-button,
     .worker-button {
          padding: 25px 40px;
          margin: 10px;
          font-size: 16px;
          border: none;
          cursor: pointer;
          border-radius: 8px;
          outline: none;
          transition: all 0.3s ease;
     }

     .client-button {
          background-color: #3498db;
          color: #fff;
     }

     .worker-button {
          background-color: #e74c3c;
          color: #fff;
     }

     .client-button:hover,
     .worker-button:hover {
          transform: scale(1.1);
     }

     /* Animation for button icons */
     @keyframes highlight {
          0% {
               transform: scale(1);
          }

          50% {
               transform: scale(1.1);
          }

          100% {
               transform: scale(1);
          }
     }

     .client-button::before,
     .worker-button::before {
          content: "";
          display: inline-block;
          width: 15px;
          height: 20px;
          border-radius: 50%;
          margin-right: 10px;
          animation: highlight 2s infinite;
     }

     .client-button::before {
          background-color: #3498db;
     }

     .worker-button::before {
          background-color: #e74c3c;
     }

     h1 {
          display: inline;
     }

     h2 {
          font-size: 37px;
          margin-bottom: 30px;
          color: #ffffff;
     }
     </style>
</head>

<body>
     <div class="sidebar">

          <div class="logo">
               <img src="white.png" alt="Logo" />
          </div>

          <div class="btan">
               <button onclick="showContent('home')">
                    <h1 style="font-size: 30px;">🏠</h1>Home
               </button>
               <button onclick="showContent('profile')">
                    <h1 style="font-size: 30px;">👨‍💼</h1> Profile
               </button>
               <button onclick="showContent('payment')">
                    <h1 style="font-size: 30px;">💸</h1> Payment
               </button>
               <button onclick="showContent('help')">
                    <h1 style="font-size: 30px;">❗</h1> Help
               </button>
               <button onclick="showContent('settings')">
                    <h1 style="font-size: 30px;">⚙️</h1> Settings
               </button>
          </div>
     </div>

     <div class="content">
          <div id="homeContent">

               <div class="container">
                    <div class="buttons-container">
                         <form method="post" action="redirectc.php">
                              <!--<h2>Searching for a worker click below button</h2>-->
                              <button class="dashboard-button client-button" name="dashboard" value="client">
                                   <h1>Need a Worker🔍? <br> Click this button</h1>
                              </button>
                              <!--<h2>Searching for a work click below button</h2><br>
                <button class="dashboard-button worker-button" name="dashboard" value="worker"><h1>Need a Work🔍? Click this button </h1></button>-->
                         </form>
                    </div>
               </div>
          </div>

          <div id="profileContent" class="hidden">
               <div class="container">
                    <div class="buttons-container">
                         <form method="post" action="redirect.php">
                              <!--<h2>Searching for a worker click below button</h2>-->
                              <button class="dashboard-button client-button" name="dashboard" value="worker">
                                   <h1>Click the button to<br> complete KYC.</h1>
                              </button>
                              <button class="dashboard-button client-button" name="dashboard" value="profile">
                                   <h1>Click the button<br>view profile</h1>
                              </button>
                         </form>
                    </div>
               </div>
          </div>

          <div id="paymentContent" class="hidden">

               <h2>Payment Content</h2>

          </div>

          <div id="kyc" class="hidden">
               <h2>Profile Content</h2>
               <p>View and edit your profile here.</p>
          </div>

          <div id="helpContent" class="hidden">

               <h2>Help Content</h2>
               <p>Get assistance and support here.</p>
          </div>

          <div id="settingsContent" class="hidden">

               <p>Adjust your account settings here.</p>
          </div>
     </div>

     <script>
     function showContent(section) {
          // Hide all content sections
          var contents = document.querySelectorAll('.content > div');
          contents.forEach(function(content) {
               content.classList.add('hidden');
          });

          // Show the selected content section
          var selectedContent = document.getElementById(section + 'Content');
          if (selectedContent) {
               selectedContent.classList.remove('hidden');
          }
     }
     </script>
</body>

</html>