# Himalayan-Explorer-s-Club-Trek-Management-App 🚣

This is the group project done under the course of CSN-254 (Software Engineering)  at IIT Roorkee, CSE Department.
Please read the report uploaded in the GitHub files selection with the name "report" or read it [here](https://drive.google.com/file/d/1OfLKfJO6OITE5B4cWU1vQm_M0pLfqLuj/view?usp=sharing) to understand all the details of the project.

A demo video file is also uploaded in the drive [link](https://drive.google.com/drive/folders/1cFKTbcN87-D7HiXQXoceqXT0lJhbqNa5?usp=sharing) . kindly open it to see the demo video.

A ppt is also made and you can refer to it also to understand the project's key points in a short time. [ppt](https://docs.google.com/presentation/d/1aYOfpP75mV3NBpSzMJMShHfdNytlawEN/edit?usp=sharing&ouid=107927476449505555117&rtpof=true&sd=true)

All the code files are uploaded as code.zip files in this GitHub repo files section.


# Guide 📌
Follow the instructions below to run the code on your local machine.

Important! You will need to install the following software to run the code.
-----------------------------------------------------------------------------------
  + Apache 2.4.58
  + MariaDB 10.4.32
  + PHP 8.0.30 (VS16 X86 64bit thread safe) + PEAR
  + phpMyAdmin 5.2.1
  + OpenSSL 1.1.1p

####### Recommended Quick Installation #######
Note: You can install them all at once by installing the XAMPP package for Windows.
Link for XAMPP: https://www.apachefriends.org/download.html
------------------------------------------------------------------------------------

This project is a WebApp for the Himalayan Explorers' Club IITR.
This app was written in PHP, JavaScript, CSS, HTML and MySQL.
It uses the MariaDB 10.4.32 as the primary database

Steps to run the code after installing XAMPP:

Step 1: Go to the "htdocs" folder of XAMPP(most probably C:\xampp\htdocs)

Step 2: Replace the contents of the "htdocs" by the content provided in the "code" folder

Step 3: Start the xampp app by searching for "XAMPP Control Panel" after installation. After opening click start buttons for the "Apache Server" and "MySQL" database.

Step 4: Creating the database structure required by the app. I have included the "csn254.sql" file in the code folder. Click the admin button on the XAMPP Conrol Panel for the MySQL server admin portal. Once you are in the admin portal. Click on the Import button to import the "csn254.sql" database.

Step 5: Set the username and password in the 'db_conn.php' file. I have set the default password for the MySQL host and the same is used in the file, so, change only if needed. You can set the password by visiting htttp://localhost/phpmyadmin after running the apache and mysql servers on the xampp control panel.

Step 6: Finally. Visit http://localhost/ to test the webapp now. Please consider using the window appropriately sized for mobile devices as this webapp is primarily focused on mobile devices meant to be run in a webview via an app.


*PASSWORDS

MySQL:

   User: root
   Password:
   (means no password!)

Please don't change the password in 'db_conn.php' unless required.

---------------------------------------------------------------------------------
