# FileUpload
# Table of contents
1. [Introduction](#introduction)
2. [Project Deployment](#deployment)
    1. [Technical Requirements](#technicalrequirements)
    2. [Project Installation](#instalation)
3. [Features](#features)
    1. [File Upload Form](#upload)
    2. [File Validation](#validation)
    3. [File Handling](#handling)
  
## The project's goal: <a name="introduction"></a>
This project aims to create a web page with a form that allows users to upload files simultaneously using file input elements.

## Project Deployment: <a name="deployment"></a>
#### Technical Requirements: <a name="technicalrequirements"></a>

- The computer must have a local web server installed, for example, XAMPP.
- The source code ZIP file must be downloaded and available on the computer.

#### Project Installation: <a name="instalation"></a>

1. Open the XAMPP control panel and start "Apache" and "MySQL".
2. Extract the downloaded source code ZIP file.
3. Copy the extracted source code folder and paste it into the XAMPP "htdocs" directory.
4. Access PHPMyAdmin by entering "root" in the Username text field. Leave the password field empty.
5. After logging into PHPMyAdmin, create a new database named "test_db".
6. Import the provided SQL file named "test_db.sql," which can be found in the source code folder.

## Features: <a name="features"></a>

#### File Upload Form: <a name="upload"></a>
- The web page will have a user-friendly form that allows users to select and upload no more than two files at once.
- File input elements will be provided, enabling users to choose different files from their device.

#### File Validation: <a name="validation"></a>
- Upon form submission, the program will validate the uploaded files to ensure they meet the requirements.
- Validations will be performed to verify if the uploaded files are either images (JPG, GIF, PNG) or documents (DOC, DOCX).

#### File Handling: <a name="handling"></a>
- The validated files will be stored in different directories on the server.
- Image files will be saved in one designated directory, while document files will be saved in another directory.
