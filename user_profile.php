<!-- PHP Conditional Statements - User Profile System --> 
<?php 
/**
 * Project: PHP Conditional Statements - User Profile System
 * Description: A mini-project  to demonstrate the use of PHP conditionals, including if-else statements, switch statements, 
 * and nested conditionals.
 */

# --- 1. Implement Time-Based Greeting: ---
// Create a function to get the current hour (0-23).
function getCurrentTime(): void {echo date("h:i a");}

// Implement a function that returns an appropriate greeting based on the time of day using if-else statements.
function getGreeting(): void {
  echo (date("a") === "am") ? "Good morning, John Doe!" : "Good afternoon, John Doe!";
}

# --- 2. Age Verification System: ---
// Create a function that takes a user's age as input and returns an appropriate message using if-elseif-else statements.
// Include different messages for minors, teenagers, adults, and seniors.
$userAge = 14;
function getAgeMessage($userAge): void {
  if ($userAge >= 1 && $userAge < 13) {
    echo "Sorry, but use must be at least 13 years old to use our system.";
  } elseif ($userAge >= 13 && $userAge < 18) {
    echo "Welcome, teenage user! Some content may be restricted.";
  } elseif ($userAge >= 18 && $userAge < 65) {
    echo "Welcome, adult user! ";
  } elseif ($userAge >= 65) {
    echo "Welcome, senior user! We hope you enjoy your experance.";
  } else {
    echo "Error: Please enter a vaild age.";
  }
}

# --- 3. User Type Classification: ---
// Implement a function that determines the user type based on login count using a switch statement.
// Include categories like "New User", "Beginner", "Regular User", and "Expert User".
$loginCount = 15;
function getUserType($loginCount) {
  switch (true) {
    case $loginCount == 1:
      return "New User!";      
    case $loginCount > 1 && $loginCount <= 5:
      return "Beginner! 📖";
    case $loginCount > 5 && $loginCount <= 20:
      return "Regular User! 😎";
    case $loginCount > 200:
      return "Expert User! ⭐";
    default:
      echo "Unknown usr type!";
  }
}
        
# --- 4. Simulated User Data: ---
// Check if the form has been submitted and get the age from the POST data.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $userAge = $_POST['userAge'];
}

# --- 5. Main Execution: ---
// This is where the functions are called to demonstrate the constant usage.
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile System</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gray-100 p-8 font-sans">
    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
      <h1 class="text-3xl font-bold mb-6 text-center">User Profile</h1>
      
      <!--
      Login Count: 10
      Keep logging in! You need 11 more logins to become an Expert User. -->
      
      <hr class="my-6">
      <form action="user_profile.php" method="POST">
        <div class="mt-8">
          <p class="text-2xl font-semibold mb-4"><?php getGreeting(); ?></p>
          <p>
            <strong>Current Time:</strong> <?php getCurrentTime(); ?></span>
          </p>
          <p>
            <strong>Age:</strong> <?php echo $userAge; ?>
          </p>
          <div class="mt-3 mb-6">
            <label class="text-md/6 font-medium text-gray-900" for="userAge">Age: </label>
            <input class="w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
            type="number" name="userAge" value="<?php echo $userAge; ?>" min="1" max="120" placeholder="Please enter your age" required
            />
          </div>
          <p>
            <strong>Message:</strong> <?php getAgeMessage($userAge); ?>
          </p>
          <p>
            <strong>User Type:</strong> <?php echo getUserType($loginCount); ?>
          </p>
          <p>
            <strong>Login Count:</strong> <?php echo $loginCount; ?>
          </p>
          <?php
          $userType = getUserType($loginCount);
          # --- 6. Additional Conditional Feature: ---
          if ($userType == "Expert User! ⭐") {
            echo "<p class='mt-2'>Congratulations! You've unlocked expert features.</p>";
          } elseif ($userType == "Beginner! 📖" || $userType == "Regular User! 😎") {
            $loginsTillExpert = 21 - $loginCount;
            echo "<p class='mt-2'>Keep logging in! You need {$loginsTillExpert} more logins to become an Expert User.</p>";
          } else {
            echo "<p class='mt-2'>Welcome! We hope you enjoy using our system.</p>";
          }
          ?>
        </div>
      </form>
        
    </div>
      
  </body>
</html>