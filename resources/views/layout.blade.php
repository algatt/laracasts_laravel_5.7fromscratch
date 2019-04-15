<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Survey Data Cleaner')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <style>
        .is-complete
        {
            text-decoration: line-through;
        }
    </style>
</head>
<body>
 
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item">SDC</a>
            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="topNavbar">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            </a>
        </div>
            
        <div id="topNavbar" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="/">Home</a>
                
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">Projects</a>
                    
                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="/projects">Projects</a>
                        <a class="navbar-item" href="/projects/create">Create Project</a>
                    </div>
                </div>
                        
                <a class="navbar-item" href="/contact">Contact Us</a>
                <a class="navbar-item" href="/about">About Us</a>
            </div>
        </div>
    </nav>
                

    <div class="container">
        @yield ('content')
    </div>
   
    <script src="/js/app.js"></script>
   
</body>
</html>