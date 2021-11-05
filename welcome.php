<html>
    <meta name="viewport " content="width=device-width,initial-scale=1.0" >
    <head><title>Welcome</title>
    <link rel="stylesheet" href="newstyle.css">
    <link href ="https://fonts.googleapis.com/css2?"
    famiy=Roboto:wght@400;700&display=swap rel="stylesheet">
</head>
<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];

//Database connection
$conn = new mysqli('localhost','root','','student');
if($conn->connect_error){
    die ('Connection Failed :'.$conn->connect_error);
}else{
    $stmt= $conn->prepare("insert into info(fname,lname,email) 
    values (?,?,?)");
    $stmt->bind_param("sss",$fname,$lname,$email);
    $stmt->execute();
   
    $stmt->close();
    $conn->close();
}
?>
<body>
<div class="container">
<div class="row">
<div class="col">
        <h1>MERU EMS</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
             Corporis modi quisquam illo facere consectetur, minima enim voluptatem,<br>
            hic architecto amet illum quae consequuntur ipsum aliquid suscipit repudiandae voluptas rem. Maiores?</p><br>
            <br><p> Click the button below to register and apply for an Extracurricular activivty</p>
            <button class="button" onclick="document.location='apply.html'">Apply</button>
            
</div>
<div class="col">
<div class="card card1">
                <h4> Outdoor Games</h4>
                <p>They include basketball,athletics,soccer,volleyball etc.</p>
            </div>
                <div class="card card2">
                <h3> Indoor Games</h3>
                <p>They include badminton,table tennis,darts,pool etc.</p>
</div>
<div class="card card3">
                <h4>Innovation clubs</h4>
                <p>They include wed development,android,robotics etc.</p>
</div>
<div class="card card4">
                <h4>Fun Clubs</h4>
                <p>They include cards,chess,scrabble etc.</p></div>
</div>
</div>
</div>
 <!--ChatBot-->

 <button class="open-button"
    onclick="openForm()">Chat</button>
    
<div class="chat-pop" id ="myForm">
    <form action="/action_page.php" class ="form-container">
    <h1><center>Chat</center></h1>
    <h>For any inquiry kindly feel free to ask,we will  get to answer you</h><br><br>
   <label for="msg"><b>Message</b></label><br><br>
   <textarea placeholder="Type message.."name="msg"required></textarea>
    <button type="submit"
    class="btn">Send</button>
    <button type="button"
    class="btn cancel"
    onclick="closeForm()">Close</button>
</form>
</div>
<!--ChatBot End-->
<script>
    function openForm(){
        document.getElementById("myForm").style.display="block";
    }
    function closeForm()
    {
        document.getElementById("myForm").style.display="none";
    }
</script>
</body>
</html>