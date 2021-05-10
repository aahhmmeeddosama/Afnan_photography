<html>
    
    <head>
        <meta charset="utf-8">
        <title>team-section</title>
    <style>
*{
    margin:0;
        padding:0;
        font-family:sans:serif;
        
        }        
        
        
.team-section
        {
        overflow:hidden;
        text-align:center;
        padding:60px
            
        }
    
.team-section h1
        {
        text-transform:uppercase;
        margin-bottom:60px;
        color:black;
        font-size:40px;    
        }        
    
.border
        {
            display: block;
            margin: auto;
            width: 160px;
            height: 3px;
            margin-bottom: 40px;
                
        }
    
        .ps
        {
            margin-bottom: 40px;
            
            
        }
        
        
        .ps a
        {
            display: inline-block;
            margin: 0 40px;
            width: 250px;
            height: 500px;
            overflow: hidden;
            border-radius: 0%;
            
        }
        
   .ps a img
        {
            width: 100%;
            border-radius: 0px;
            filter: grayscale(100%);
            transition: 0.4s all;
        }
 .ps a:hover >img
        {
           filter:none;
            
            
        }
        
        .section{
            width: 600px;
            margin: auto;
            font-size: 20px;
            color: white;
            text-align: justify;
            height: 0px;
            overflow: hidden;
        }
        
        .section:target{
            height: auto;
            
        }
        
        .name{
            display: block;
            margin-bottom: 30px;
            text-transform: uppercase;
            font-size: 22px;
            
        }
        
        </style>
        
        
    </head>
    
    <body>
       <?php include "The_New_Nav.html"?>
        
        <div class="team-section">
            <br> <br>
            <span class="border"></span>
        <div class="ps">
            <a href="#p1"><img src="icon.jpg" alt="Afnan"></a>  
        </div>
         <div class = "section" id = "p1">
            <span class ="name"> Afnan Mohamed Mahmoud Gharid </span>
             <span class ="border"> </span>
             <p style="color: black;">
              <h2>The Greatest places that I worked in:</h2>
              <br>
                 <h4>.police Mosque<br>
                 .The Castle<br>
                 .Tobio Maadi<br>
                 .Al Azhar Park<br>
                 .Camp Ismailia<br>
                 .January 25 Ismailia<br></h4>
              <br>
              <h2>Years of experience : 2 years</h2>
              <h2>The Greatest places that I worked in:</h2>
              <br>
                 <h4>
                 .Benha<br>
                 .Ash Sharqia<br>
                 .Ismailia<br>
                 .Cairo<br>
                 .Port Said<br>
                  </h4>
              <br>
             </p>
            </div>    
        </div>       
    </body>
</html>