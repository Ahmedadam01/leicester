<?php 

$active='Contact';
include("includes/header.php");

?>
     
     <div id="content">
         <div class="container">
             <div class="col-md-12">
                 
                 <ul class="breadcrumb">
                     <li>
                         <a href="index.php">Home</a>
                     </li>
                     <li>
                         Contact Us
                     </li>
                 </ul>
                 
             </div>
             
         
                <div class="col-sm-6 col-md-3" style="
    background: #ffffff;
    padding: 20px;
">
                
                <h4>Find Us</h4>
                
                <p>
                    
                    <strong>Candy Ice Cream</strong>
                    <br>LE2 0DW
                    <br>32 Twycross Street
                    <br>0116-273-1111
                    <br>Candyicecream@gmail.com
                    <br><strong>Mr Adam</strong>
                    
                </p>
                
                
                
                <hr class="hidden-md hidden-lg">
                
            </div>
                <div class="col-sm-6 col-md-6">
                    
                    <div class="box">
                        
                        <div class="box-header">
                            
                            <center>
                                
                                <h2>Feel free to Contact Us</h2>
                                
                                <p class="text-muted">
                                    
                                    If you have any questions, feel free to contact us. Our Customer Service work <strong>24/7</strong>
                                    
                                </p>
                                
                            </center>
                            
                            <form action="contact.php" method="post">
                                
                                <div class="form-group">
                                    
                                    <label>Name</label>
                                    
                                    <input type="text" class="form-control" name="name" required>
                                    
                                </div>
                                
                                
                                <div class="form-group">
                                    
                                    <label>Email</label>
                                    
                                    <input type="text" class="form-control" name="email" required>
                                    
                                </div>
                                
                                
                                <div class="form-group">
                                    
                                    <label>Subject</label>
                                    
                                    <input type="text" class="form-control" name="subject" required>
                                    
                                </div>
                                
                                
                                
                                <div class="form-group">
                                    
                                    <label>Message</label>
                                    
                                    <textarea name="message"  class="form-control"></textarea>
                                    
                                </div>
                                
                                <div class="text-center">
                                    
                                    <button type="submit" name="submit" class="btn btn-primary">
                                    
                                    <i class="fa fa-user-md"></i> Send Message
                                    
                                    </button>
                                    
                                </div>
                                
                            </form>
                            
                            <?php
                            
                            if(isset($_POST['submit'])){
                                
                                /// Admin recieves message with this///
                                
                                $sender_name = $_POST['name'];
                                
                                $sender_email = $_POST['email'];
                                
                                $sender_subject = $_POST['subject'];
                                
                                $sender_message = $_POST['message'];
                                
                                $receiver_email = "Candyicecream@gmail.com";
                                
                                mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email);
                                
                                /// Auto reply to sender with this ///
                                
                                $email = $_POST['email'];
                                
                                $subject = "Welcome to my website";
                                
                                $msg = "Thanks for sending us message. ASAP we will reply your message";
                                
                                $from = "Candyicecream@gmail.com";
                                
                                mail($email,$subject,$msg,$from);
                                
                                echo "<h2> Your message has sent sucessfully </h2>";
                            }
                            
                            ?>
                            
                            
                        </div>
                        
                    </div>
                    
                </div>
             
            
               <div class="col-md-3">
                 
              <?php
    
    include("includes/sidebar.php");
    
    ?>    
                 
             </div>
             
         </div>
     </div>
     
       <?php
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>