<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <footer>
        <p>Interested In Using Our Services?</p>
             
        <!--paragraph-->
        <p>I try to work on your project as quickly as possible. Guarantee for revision until you are satisfied with my work.</p>
        <!--social-->
        <div class="social-icons">
            <a href="#"><i class="fab fa-whatsapp"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
         
        <!--copyright-->
        <p class="copyright">Copyright by Niagahoster Tutorial</p>
      </footer>
    
</body>
</html>

<style>
    footer p{
    font-family: calibri;
}
 
footer p:nth-child(1){
    font-size: 30px;
    font-weight:bold;
    color:#FFFFFF;
    line-height:10px;
}
 
footer p:nth-child(2){
    font-size: 16px;
    color:#7e7d7d;
    width:600px;
    text-align: center;
}
 
footer{
    height:300px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: relative;
    background-color: #191919;
}
 
.social-icons a{
    width:40px;
    height:40px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color:#e6e3e3;
    margin:20px 10px;
    border-radius:50%;
}
 
.social-icons{
    display: flex;
     
}
 
.social-icons i,.social i{
    color:#000000;
}
 
.social-icons a:hover{
    background-color:#000000;
    box-shadow:2px 2px 12px rgba(0,0,0,0.2);
    transition:all ease 0.5s;
}
 
.social-icons a:hover i,
.social a:hover i{
    color:#FFFFFF;
    transition:all ease 0.5s;
}
  
.copyright{
    color:#565555;
    font-size: 15px;
    position: absolute;
    left:50%;
    bottom:10px;
    transform: translateX(-50%);
}
.social{
    position: fixed;
    top:50%;
    right:0px;
    transform:translateY(-50%);
}
 
.social a{
    display: flex;
    justify-content: center;
    align-items: center;
    width:50px;
    height:50px;
    margin:0px;
    padding: 0px;
    line-height:0px;
    background-color:#FFFFFF;
    border:1px solid #CBCBCB;
    box-shadow:2px 2px 12px rgba(0,0,0,0.2);
}
 
.social a:hover{
    background-color:#000000;
    transition:all ease 0.5s;
}
 
.social i{
    font-size:20px;
    color:#2B2B2B;
}
</style>