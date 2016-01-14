__________________________________________________________________________________

                 SAVE & SHOP
__________________________________________________________________________________
  ReadMe.txt

  Thank you for using this website.

  This ReadMe contains minute to minute information and troubleshooting tips.
__________________________________________________________________________________
 CONTENTS
__________

	1) SYSTEM REQUIREMENTS
	2) TESTING AND PERFORMANCE EVALUTION
	3) IMPLEMENTATION
	4) OBJECTIVES
	5) SCOPE
	6) APPLICATIONS
	7) TECHNOLOGY OVERVIEW
	8) CONTACT INFORMATION

__________________________________________________________________________________
 1) SYSTEM REQUIREMENTS
________________________

The scripting languages used are HTML, CSS for front-end and PHP for back-end.

Supported Operating Systems are:
	Windows 2000 Professional (Workstation) plus Service Pack 3
	Windows XP (Home and Professional) plus Service Pack 1
	Windows 7
	Windows 7 ultimate
	Windows 8
	windows 8.1
	windows 10

The following operating systems are NOT supported:
	Windows 98
	Windows 98 Second Edition and before. 
	
Minimum Hardware Requirements
	Processor   : 1.5GHz or more
	Hard Disk   : requires 2GB free Space 
	RAM         : 500MB(min) 
	
	Keyboard(if)
	Mouse(if)

EXISTING SYSTEM:

	The existing web applications give details of the product in online stores. When user browses for product price user is given with price in online stores.

PROPOSED SYSTEM:

	This model adds an extra feature of displaying the details of product in offline stores.
	
	In this case user is requested to enter city name and product model, then prices of the product along with the store addresses are given to user.


__________________________________________________________________________________ 
 2) TESTING AND PERFORMANCE EVALUTION:
_________________

	Software testing is a critical element of software quality assurance and represents the ultimate review of specification, design and coding. It is the major quality measure employed during software development.

	Testing is the exposure of the system to trail input to see whether it produces correct output. It is the process which reveals errors in the program. During testing, the program is executed with a set of test cases and the output of the program for the test cases is evaluated to determine if the program is performing as it is expected to perform.

TEST CASES AND TEST CRITERIA
	During Test Cases that are good at revealing the presence of faults is central to successful testing. The reason for this is that if there is a fault in the program, the program can still provide the expected behavior on the certain inputs. Only for the set of inputs the faults that exercise the fault in the program will the output of the program devise from the expected behavior. Hence, it is fair to say that testing is as good as its test case. The number of test cases used to determine errors in the program should be minimum.  There are two fundamental goals of a practical testing activity:-
   
	 maximize the number of errors detected and.

	 minimize the number of test cases. 

	As these two goals are contradictory so the problem of selecting test cases is a complex one. While selecting the test cases the primary objective is to ensure that if there is an error or fault in the program, it is exercised by one of its test cases. An ideal test case is one which succeeds(meaning that there are no errors, revealed in its execution) only it there are no errors in the program one possible set of ideal test cases is one which includes all the possible inputs to the program. This is often called "exhaustive testing", however it is impractical and infeasible a seven a small program can have an infinite input domain. So to avoid this problem we use "test criteria" in selection of the test cases. There are two aspects of the test case selection:-
	
	 specifying a criteria for evaluating the test cases.

	 generating the set of cases that satisfy a given criteria.
 	
	The fully automated process of generating test criteria has not been yet found rather guidelines are only the automated tool available to us previously. The two fundamental properties for a testing criterion are:-

	 Reliability a criterion is reliable if all the sets that satisfy the criteria detect the same error. 
	
	 Validity a criterion is valid if for any error in the program there is some set satisfying the criteria that will reveal the error. The fundamental theorem of testing is that if a testing criterion is valid and reliable, if a set satisfying criteria succeeds then the program contains no errors.

   TESTING METHODOLOGIES

	1. White Box Testing
	2. Black Box Testing
	3. System Testing

White Box Testing
 It is also called Glass – Box – Testing.
Using white box testing, the software engineer can derive test cases that
1. Guarantee that all independent paths with in a module have been    examined atleast once.    
2. Exercise all logical decision on their true and false sides.
3. Execute all loops at their boundaries and with in their operational bounds.
4. Exercise internal data structures to ensure their validity.

Black Box Testing:
It is also called Behavioural Testing.
Black box testing is not an alternate to white box testing; rather it is a complementary approach that is likely to uncover a different class of errors than white-box testing methods.          

Black box testing attempts to find errors in the following categories
                   1. Incorrect (Or) Missing Functions.
                   2. Interface errors.
                   3. Errors in data structures (Or) external data base access.
                   4. Behaviours (Or) Performance errors.
                   5. Initialization and termination errors.
By applying black box testing techniques, we can derive a set of test cases that satisfy the following criteria: 

i)	Test cases that reduce by a count, that is greater than one the number of additional test cases that must be designed to achieve reasonable testing.

(ii)	Tests cases that tell us something about the presence (Or) absence of classes of errors rather than an error associated only with the specific test at hand.

System Testing:
	It is a series of different tests whose primary purpose is to fully exercise the computer based system.
Each test has a different purpose all work to verify that system elements have been properly integrated and perform allocated functions.
 Types:
		(i) Recovery Testing 
		(ii) Security Testing
		(iii) Stress Testing
		(iv) Performance Testing
 		(v) Sensitivity Testing

(1) Recovery Testing:
It is a system test that forces the software to fail in a variety of ways and verifies that recovery is properly performed.
If recovery is automatic [i.e. performed by system itself] then
		=> Reinitialization. 
		=> Check pointing mechanisms.
		=> Data recovery & Restart are evaluated for correctness.
If recovery requires human intervention the Mean Time to Repair [MTTR] is evaluated to determine whether it is with in acceptable limits.


(2) Security Testing:
It verifies that protection mechanism built into a system will in fact protect it from improper penetration. During security testing the tester plays the role of the individual who desires to penetrate the system.
Given enough time and resources good security testing will ultimately penetrate a system.The role of the system designer is to make penetration cost more than the value of the information that will be obtained.


(3) Stress Testing:
Stress testing executes a system in a manner that demands resources in abnormal quality, frequency (Or) volume.*


(4) Performance Testing: 
It is designed to test the Run tike performance of software within the context of an integrated system. Performance testing occurs throughout all steps in the testing process.
Performance tests are often coupled with stress testing and usually require both hardware and software requirements.


(5) Sensitivity Testing:
It is an variation of stress testing.
For example in most mathematical algorithm a small range of data contained with in the bounds of valid data may cause extreme and erroneous processing.
Sensitivity testing attempts to uncover data combinations within valid inputs classes that may cause instability (Or) improper processing.




PERFORMANCE EVALUATION
	The Placement Information System provides high performance than existing system. This system provides accurate information for the placements which are queried by the users.
	The Placement Information System provides high security of data because the use of database in order to save the data. The security is provided by having all information at administrator and having password for the accounts. Performance of the system increased compare to the existing system.   

TEST CASES:

ONLINE PRODUCT SEARCH:
	If product is found then details of the product (store name, price, link to the store) are displayed.
else product search  not found is displayed and requested to enter product name once again.

OFFLINE PRODUCT SEARCH:
	If city name and product name match is found then details of product (store name, price, store address) is displayed else search not found is displayed. And requested to enter city name and product name once again.  


__________________________________________________________________________________
 3) IMPLEMENTATION
________________________

     Implementation literally means to put into effect or to carry out. In the system implementation phase, the software deals with translation of the design specifications into source code. The ultimate goal of the implementation is to write the source code and the internal documentation so that it can be verified easily.

MODULES:

HOME PAGE:
 	This module helps user to select the stream in which he/she wants to compare the price of the product.

STORE PAGE:
 	This module helps the user to select online or offline stores in which he/she want to compare the price of he/she product.

ONLINE PAGE:
 	This module helps the user to enter product name and once the user submits product name then a table is displayed which consists of name of the online store, price and link of the product in that particular store.

OFFLINE PAGE:
	This module helps the user to enter city name and product name and once the user submits then a table is displayed which consists of name of the store, price of the product, address of the store in that particular city.

ABOUTUS PAGE:
	 This module helps the user to know the services provided by this application.

CONTACTUS PAGE:
	This module helps the user by providing details of the application maintainers.

SEARCH ENGINE:
	This module helps user to search with auto completion feature like google. The user can search for the desired product details like technical specifications and etc.

_________________________________________________________________________________

 4) OBJECTIVES
__________________

	The main objective of this web application is to save money and time of the customer and make him/her satisfied with the product shopping by providing best price of the product.

	At the same time to reduce browsing time, before shopping customer may waste his/her time in searching price of product in various online stores and offline stores in various cities. Using this application browsing time can be reduced as prices of product are provided at one place in various online stores and offline store in that corresponding city.  


_____________________________________________________________________________________

 5) SCOPE
_______________________

DELIVERABLES:
	Compare the prices. The main deliverable from this application is comparison of price of the particular product in various online and offline stores.

	Navigate to the site and shop. In case of online stores price comparison user is provided with link where he/she can navigate to that particular site and shop over there. 

	Can easily spot the location of the concerned stores. In case of offline sores user is provided with address of the store along with the price of the product in that particular store.


BOUNDARIES:
	The application is bound to electronics. This application is limited to laptops, mobiles, tablets and desktops.


_________________________________________________________________________________
 6) APPLICATIONS
_________________


	Can also be used for shopping goods other than electronics. This application can be extend its services to goods like clothing, furniture and etc.

	Can be used for advertising purpose. This application can be used to promote new stores, inventions and trending goods in market.

	Can be used for booking online tickets. By modifying this application we can compare price of the ticket in various travels and flights.


 **LIMITATIONS:

	It just gives price of the regarding product. This application does not provide technical specifications of the product, how it is different from rest of the models and user rating .

	The application is limited to cities. The service of the application is limited to major cities and promotes stores that are in these major cities.

	Is used to shop only electronics like laptops, mobiles, desktops and tablets.


__________________________________________________________________________________
 7) TECHNOLOGY OVERVIEW
____________

	The technology selected for implementing Employee leave Management System is PHP/MYSQL. Apache is used as the HTTP server. The development was done in a ‘windows’ environment.

PHP:
	PHP is a general-purpose scripting language that is especially suited to server-side web development where PHP generally runs on a web server. PHP code is embedded into the HTML source document. Any PHP code in a requested file is executed by the PHP runtime, usually to create dynamic web page content. It can also be used for command-line scripting and client-side GUI applications. PHP can be deployed on many web servers and operating systems, and can be used with many relational database management systems (RDBMS). It is available free of charge, and the PHP Group provides the complete source code for users to build, customize and extend for their own use.

MySQL:
	MySQL is a relational database management system (RDBMS) that runs as a server providing multi-user access to a number of databases. MySQL is a popular choice of database for use in web applications and is an open source product. The process of setting up a MySQL database varies from host to host, However we will end up with a database name, a user name and a password. Before using our database, we must create a table. A table is a section of the database for storing related information. In a table we will set up the different fields which will be used in that table. Creating a table in phpMyAdmin is simple; we just type the name, select the number of fields and click the ‘go’ button. We will then be taken to a setup screen where you must create the fields for the database. Another way of creating databases and tables in phpMyAdmin is by executing simple SQL statements.

XAMPP:
	XAMPP is a small and light Apache distribution containing the most common web development technologies in a single package. Its contents, small size, and portability make it the ideal tool for students developing and testing applications in PHP and MySQL. XAMPP is available as a free download in two specific packages: full and lite. While the full package download provides a wide array of development tools, XAMPP Lite contains the necessary technologies that meet the Ontario Skills Competition standards. The lite version is a small package containing Apache HTTP Server, PHP, MySQL, phpMyAdmin, Openssl, and SQLite.

OBTAINING AND INSTALLING XAMPP
	As previously mentioned, XAMPP is a free package available for download and use for web development tasks. All XAMPP packages and add-ons are distributed through the Apache Friends website at the address: http://www.apachefriends.org/. Once on the website, navigate and find the Windows version of XAMPP and download the self-extracting ZIP archive. After downloading the archive, run and extract its contents into the root path of a hard disk or USB drive. For example, the extract path for a local windows  installation would simply be C:\. If extracted properly we will notice a new window directory in the root of your installation disk. In order to test that everything has been installed correctly, first start the Apache HTTP Server by navigating to the XAMPP directory and clicking on the apache_start.bat batch file.


_____________________________________________________________________________________
 
 8) CONTACT INFORMATION
________________________

For news, hints, and the SERVER, check out 
	 
	www.w3schools.com
	www.stackoverflow.com
	www.mysmartprice.com
	Beginning PHP and MySQL: From Novice to Professional, Third Edition

For Technical Support:-

	YUGANDHAR.P
	p.yugandhar.26@gmail.com
	8790271964

	SHIVA TEJA YADAV
	shivatejayadav@gmail.com
	9493795256

	PREM SHIVA SAI
	premsvs21@gmail.com
	7793991428

	If necessary, you may be asked by Technical Support to obtain an analysis of you machine to help troubleshoot problems. Forward this file to Technical Support only when
 perform an analysis:-
 	Using Explorer, locate the "WWW" main directory, and right
click on ".EXE FILE", then select the option "Launch Analysis". This will create the 

__________________________________________________________________________________
This software and documentation 
Copyright (c) 2016 SAVE AND SHOP.
_____________________________________________________________________________________