Author: W3tweaks
Author URL: http://www.w3tweaks.com/
Author Email: w3tweaks@gmail.com

============ Steps to Follow ============
1. Create a database (facebooklogin) at phpMyAdmin.
2. Import the users.sql file into the database (facebooklogin).
3. Open the User.php file and modify the $dbHost, $dbUsername, $dbPassword, $dbName variables value with your MySQL database credentials.
4. Open the fbConfig.php file and specify the $appId, $appSecret, and $redirectURL as per your Facebook App credentials.
5. Browse the index.php file in the browser and test the Login with Facebook functionality