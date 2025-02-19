# Project Title: AHDLC 

## Project Structure
```
projet-ahdlc/
├── .htaccess                 # URL rewriting rules
├── config/
│   ├── config.php           # Global configuration
│   └── database.php         # Database connection
├── controllers/
│   ├── HomeController.php
│   ├── AboutController.php
│   ├── NewsController.php
│   ├── DomainController.php
│   ├── ServiceController.php
│   └── ContactController.php
├── models/
│   ├── User.php
│   ├── News.php
│   ├── Service.php
│   └── Contact.php
├── core/
│   ├── App.php             # Application core class
│   ├── Controller.php      # Base controller class
│   ├── Database.php        # Database wrapper class
│   └── Router.php          # URL routing class
├── views/
│   └── Pages view for controllers
├── public/
│   └── index.php           # Entry point
└── README.md

```mermaid
graph TB
    User((User))

    subgraph "Website System"
        subgraph "Frontend Container"
            WebUI["Web Interface<br>HTML/CSS/JS"]
            
            subgraph "View Components"
                Pages["Page Views<br>PHP"]
                SharedIncludes["Shared Components<br>PHP"]
                Assets["Static Assets<br>CSS/JS"]
            end
            
            subgraph "Page Components"
                Home["Home Page<br>PHP"]
                About["About Page<br>PHP"]
                News["News Page<br>PHP"]
                Contact["Contact Page<br>PHP"]
                Services["Services Page<br>PHP"]
                Domain["Domain Page<br>PHP"]
            end
        end
        
        subgraph "Backend Container"
            WebServer["Web Server<br>Apache"]
            DatabaseConn["Database Connection<br>PDO"]
        end
        
        subgraph "Data Container"
            MySQL[("Database<br>MySQL")]
        end
    end

    %% User interactions
    User -->|"Accesses website"| WebServer
    WebServer -->|"Serves"| WebUI
    
    %% Frontend relationships
    WebUI -->|"Includes"| Pages
    WebUI -->|"Uses"| SharedIncludes
    WebUI -->|"Loads"| Assets
    
    %% Page relationships
    Pages -->|"Contains"| Home
    Pages -->|"Contains"| About
    Pages -->|"Contains"| News
    Pages -->|"Contains"| Contact
    Pages -->|"Contains"| Services
    Pages -->|"Contains"| Domain
    
    %% Shared components relationships
    SharedIncludes -->|"Provides header for"| Pages
    SharedIncludes -->|"Provides footer for"| Pages
    SharedIncludes -->|"Provides navigation for"| Pages
    SharedIncludes -->|"Provides social bar for"| Pages
    
    %% Backend relationships
    WebServer -->|"Connects via"| DatabaseConn
    DatabaseConn -->|"Queries"| MySQL
```
```

## Setup Instructions
1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Ensure you have a local server environment (like XAMPP or MAMP) set up to run PHP.
4. Place the project folder in the server's root directory (e.g., `htdocs` for XAMPP).
5. Access the project via your web browser at `http://localhost/project-ahdlc`.

## Features
- Responsive design with CSS for various screen sizes.
- Interactive elements powered by JavaScript.
- Organized structure for easy navigation and maintenance.

## Technologies Used
- PHP
- HTML
- CSS
- JavaScript

## License
This project is licensed under the MIT License.