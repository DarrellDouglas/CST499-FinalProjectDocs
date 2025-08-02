# CST499-FinalProjectDocs
Final Software Project Compiled Documents

Student Name: Darrell DouglasCourse: CST-499 Capstone for Computer SoftwareInstructor: Dr. Joseph RangitschDate Submitted: 08/2/25

1. Software Requirements Specification (SRS) Document


Revised Summary:
This SRS document outlines the full system requirements for the Employee Portal project. The goal of the portal is to streamline employee registration, login authentication, course selection, and account access. Revisions include clearer functional requirements, separation of system-level constraints, and use of standardized IEEE 830-1998 structure.

Key Sections Included:

Purpose and Scope

Functional Requirements

Non-functional Requirements

System Features

External Interface Requirements

Use Cases



2. UML Design Model

Revised Summary:
The UML diagrams have been refined to show a clearer representation of the system architecture, relationships between components, and user interaction flows. Revisions based on instructor feedback included better labeling of classes and consistent actor-role mapping.

Diagrams Included:

Use Case Diagram

Class Diagram

Activity Diagram

Sequence Diagram



3. Landing, Login, and Enrollment Pages (HTML + PHP)

Revised Summary:
Revisions focused on aligning form action methods with backend PHP logic, securing input handling using mysqli_real_escape_string, and improving session management during login. The landing page includes navigation, user instructions, and links to the registration and login pages.

Key Features Implemented:

Secure user login/logout

Registration page with form validation

Class enrollment and dynamic course list display



4. MySQL Database and Class Registration

Revised Summary:
The MySQL schema includes normalized tables for users, courses, and enrollments. Instructor feedback was applied to fix foreign key constraints and refine indexing strategies. Screenshots show before/after of adding/dropping classes and database structure.

Database Tables Included:

users

courses

enrollments

Functionality Demonstrated:

User registration/login

Add course

Drop course

Display user course list



5. PHP Codebase

Revised Summary:
The codebase was cleaned up for better readability and modular structure. PHP scripts are organized into logical components: db_connect.php, register.php, login.php, add_course.php, drop_course.php, and view_courses.php. Instructor feedback emphasized consistent variable naming, secure queries using prepared statements, and proper session handling.

Key PHP Files:

register.php

login.php

add_course.php

drop_course.php

view_courses.php



6. APA Formatted References Page

Revised Summary:
All references have been reviewed for APA 7th edition compliance. URLs were updated to be active links, and in-text citations now correspond directly to the reference list.

Sample Sources Cited:

Tsui, F., Karam, O., & Bernal, B. (2018). Essentials of software engineering (4th ed.). Jones & Bartlett Learning.

Spillner, A., Linz, T., & Schaefer, H. (2014). Software Testing Foundations (4th ed.). Rocky Nook.



7. Final Submission Instructions

All revised documents compiled into a single zipped folder.

GitHub link provided in Waypoint submission comments.

Note: Part Two (Presentation) will include a PowerPoint slide deck and screen recording walkthrough. That will be handled separately per project instructions
