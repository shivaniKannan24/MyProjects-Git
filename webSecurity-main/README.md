Project title- “Secure Login & Threat Prevention In BankManagement System”

This project aims to enhance the security of a bank management website
by implementing strong password policies, encrypted passwords, and additional
authentication measures. These measures help mitigate the risks of brute force
attacks, SQL injection, cross-site scripting (XSS), and unauthorized access. The
project focuses on improving the security and integrity of sensitive financial
data, ensuring a safer online banking experience for users.


Experimental setup
o Database management system (DBMS) software -WAMPSERVER
( phpmyadmin)
o Programming language - PHP,JAVASCRIPT,HTML,CSS.
o Database Management – MySQL
o Integrated Development Environment (IDE) for coding and testing -
Visual Studio Code


Introduction
The security of online banking systems is crucial to protect users'
financial information from malicious attacks. This project addresses this need
by implementing various security measures in a bank management website. By
enforcing strong password policies, encrypting passwords using AES-128, and
adding additional authentication steps such as email-based one-time passwords
(OTP) for modifying user details, the website's security is significantly
enhanced. These measures help prevent common security threats like brute
force attacks, SQL injection, XSS, and unauthorized access, making the website
more secure for users.

Architecture
The architecture of the bank management website is designed to ensure
the security and integrity of the system. It consists of several key components,
including the user interface, the application logic, the database, and the security
features. The user interface allows users to interact with the website, while the
application logic handles user requests and processes data. The database stores
user information securely, and the security features, such as strong password
policies and encryption, protect this data from unauthorized access. The
architecture is designed to be robust and scalable, ensuring the website can
handle a large number of users securely.

Modules
The bank management website is divided into several modules, each
responsible for a specific functionality. The modules include the user
authentication module, which handles user login and registration, the password
management module, which enforces strong password policies and encrypts
passwords, the data modification module, which adds additional authentication
measures for modifying user details, and the security module, which protects
the website from common security threats. Each module works together to
ensure the security and integrity of the website's data and functionality.

Home page : It contains admin and user login link


Admin login page :While login we added SQL injection prevention technique.
This page also responsible for sending OTP to user’s email when user request to
edit their data. Session hijacking is prevented.


User login page : While login we added sql injection prevention technique .
This page also contains registration option if not registered. After registration
password setting will be done during this we added strong password
requirements . .Additional to this , we added authentication like permission
request from admin. In this User login page we included the Cross Site
Scripting prevention technique to prevent the attack which is affect the website.
And also in user login system, we included the technique which encrypt
passwords before storing them in the database to enhance security. This page
also contains the prevention technique from the session hijacking attack is a
type of attack where an attacker takes the user’s active session to gain
unauthorized access to a web Application.
