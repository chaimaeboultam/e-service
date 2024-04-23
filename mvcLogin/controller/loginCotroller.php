<?php
require('C:\xampp\htdocs\e-service\mvcLogin\model\LoginModel.php');

function loginAction(){
    require('C:\xampp\htdocs\e-service\mvcLogin\view\loginView.php');

    $connection = connect_database();

    if(isset($_POST['submit'])){
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);

        // Call givingData() function with the provided email
        $usr = givingData($email);
    

        
        if ($usr && strcasecmp($usr['motDePasse'], $password) == 0 && strcasecmp($usr['email'], $email) == 0) {
            
           
            if (strcasecmp($usr['role'], "etudiant") == 0) {
                echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "Login successful!",
                    footer: "<a href=\'#\'>Continue</a>"
                }).then((result) => {
                    // Redirect after user clicks OK
                    window.location.href = "/e-service/mvcLogin/view/loginEtudiant.php";
                });
            </script>';
                exit();
                 
            }
            if(strcasecmp($usr['role'], "professeur") == 0) {
                echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "Login successful!",
                    footer: "<a href=\'#\'>Continue</a>"
                }).then((result) => {
                    // Redirect after user clicks OK
                    window.location.href = "/e-service/mvcLogin/view/loginProf.php";
                });
            </script>';
               
                exit();
            }
            if(strcasecmp($usr['role'], "chef de departement") == 0){
                echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "Login successful!",
                    footer: "<a href=\'#\'>Continue</a>"
                }).then((result) => {
                    // Redirect after user clicks OK
                    window.location.href = "/e-service/mvcLogin/view/loginChefDepartChoix.php";
                });
            </script>'; 
               
                exit();
            }
            if(strcasecmp($usr['role'], "coordinateur") == 0){
                echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "Login successful!",
                    footer: "<a href=\'#\'>Continue</a>"
                }).then((result) => {
                    // Redirect after user clicks OK
                    window.location.href = "/e-service/mvcLogin/view/loginCoordinChoix.php";
                });
            </script>';
               
                exit();
            }
            
        }
        else {
            // Display SweetAlert if credentials are incorrect
           echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Somthing going wrong...',
                    text: 'Incorrect email or password!',
                    footer: '<a href=\"#\">Why do I have this issue?</a>'
                });
                </script>";
          

        }
        
}
}


?>
