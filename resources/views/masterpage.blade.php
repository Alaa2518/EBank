<html>
    <head>
        <title>home</title>
        <link rel='stylesheet' href='/css/home.css'>
        
    </head>

    <style>

    </style>
    
    <body>
       <div class='container'>
           <header>
               <div class='logo'>
                <h2 >Ebank</h2>  
               </div>
               
               <nav>
                   <ul>
                       <li class='active'><a href='#'>Home</a></li>
                       <li><a href='showusers'>Show Users Details</a></li>
                       <li><a href='#'>Login</a></li>
                       <li><a href='adduserform'>Add User</a></li>
                       <li><a href='#'>feedback</a></li>
                   </ul>
               </nav>
               
           </header>
           
           <div class="container" style="width:800px; padding:25px 0 0 0">
            @yield('content');
               
           </div>

       </div>
       
   </div>
        
    </body>
    
</html>