# Activity 7: PHP Conditional Statements - User Profile System

**Project Description:**

This mini-project is designed to help students apply their knowledge of PHP conditional statements in a practical scenario. The objective is to create a simple user profile system that demonstrates various aspects of PHP conditionals, including if-else statements, switch statements, and nested conditionals.

**Instructions:**

1. Create a New File:

    - Create a new file named user_profile.php.
    - This file will contain the main script for your user profile system.

2. Implement Time-Based Greeting:

    - Create a function to get the current hour (0-23).
    - Implement a function that returns an appropriate greeting based on the time of day using if-else statements.

3. Age Verification System:

    - Create a function that takes a user's age as input and returns an appropriate message using if-elseif-else statements.
    - Include different messages for minors, teenagers, adults, and seniors.

4. User Type Classification:

    - Implement a function that determines the user type based on login count using a switch statement.
    - Include categories like "New User", "Beginner", "Regular User", and "Expert User".

5. Simulated User Data:

    - Create variables to store simulated user data (name, age, login count).
    - In a real system, this data would come from a database, but for this exercise, you can hardcode the values.

6. Main Execution:

    - Use the implemented functions to generate appropriate messages for the user.
    - Display a user profile with the following information:
        - Greeting (based on time of day)
        - Current time
        - User's name and age
        - Age-specific message
        - User type
        - Login count

7. Additional Conditional Feature:

    - Implement an additional feature that displays different messages based on the user type.
    - For example, show a congratulatory message for expert users or motivational messages for others.

8. Error Handling:

    - Implement basic error handling to deal with invalid inputs (e.g., negative age or login count).

9. Code Organization and Comments:

    - Organize your code into clearly defined functions.
    - Use comments to explain the purpose of each function and any complex logic.

10. Test Your Script:

    - Test your PHP script with different simulated user data to ensure all conditional paths are working correctly.

11. Extend the Project (Optional):

    - Add more user attributes and corresponding conditional logic.
    - Implement a simple login system that updates the login count.
    - Create a visual representation of the user's progress towards becoming an expert user.

**Example Output:**

```PHP
User Profile
Good afternoon, John Doe!
Current Time: 02:30 PM
Age: 25
Message: Welcome, adult user! 
User Type: Regular User
Login Count: 10
Keep logging in! You need 11 more logins to become an Expert User.
```

By completing this mini-project, students will demonstrate their understanding of PHP conditional statements, including if-else statements, switch statements, and nested conditionals. They will create a practical application that showcases these concepts and prepares them for more advanced PHP programming tasks. Additionally, they will gain experience in creating and organizing functions, handling user data, and implementing time-based logic.
