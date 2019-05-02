<?php
/**
 * Created by PhpStorm.
 * User: ziadelsarrih
 * Date: 2019-04-27
 * Time: 08:21
 */
define("cookieName", "myPage");
require ('tools.php');
if (isset($_COOKIE[cookieName])){
    header("Location: index2.php");
    exit;
}else if (isset($_POST['Submit'])){
    $data =init($_POST);
    if ($data!="fill all checkboxes") {
        setcookie(cookieName, $data, time() + 3600 * 24 * 30);//one month
        header("Location: index2.php");
        exit;
    }else {
        echo $data;
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>lab6</title>
    <link rel="stylesheet" href="styleSheet.css">
</head>
<body>
<form action="Index.php" method="post">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <nav class="flex-container">
        <div>
            <h2>Background</h2>
            <section class="intern-flex-container">
                <div>
                    <h5>Color</h5>
                    <input type="checkbox" class="check" name="gray_color_bg" value="gray"> Gray<br>
                    <input type="checkbox" class="check" name="black_color_bg" value="black"> Black<br>
                    <input type="checkbox" class="check" name="white_color_bg" value="white"> White <br><br>
                    <script>
                        $(document).ready(function(){
                            $('.check').click(function() {
                                $('.check').not(this).prop('checked', false);
                            });
                        });
                    </script>
                </div>
            </section>
        </div>

        <div>
            <h2>Header</h2>
            <section class="intern-flex-container">
                <div>
                    <h5>Color</h5>
                    <input type="checkbox" class="check1" name="gray_color_hd" value="gray"> Gray<br>
                    <input type="checkbox" class="check1" name="black_color_hd" value="black"> Black<br>
                    <input type="checkbox" class="check1" name="white_color_hd" value="white"> White <br><br>
                    <script>
                        $(document).ready(function(){
                            $('.check1').click(function() {
                                $('.check1').not(this).prop('checked', false);
                            });
                        });
                    </script>
                </div>
                <div>
                    <h5>Size</h5>
                    <input type="checkbox" class="check2" name="14px_hd" value="14"> 14 px <br>
                    <input type="checkbox" class="check2" name="16px_hd" value="16"> 16 px <br>
                    <input type="checkbox" class="check2" name="18px_hd" value="18"> 18 px <br><br>
                    <script>
                        $(document).ready(function(){
                            $('.check2').click(function() {
                                $('.check2').not(this).prop('checked', false);
                            });
                        });
                    </script>
                </div>
            </section>
        </div>

        <div>
            <h2>Main Text </h2>
            <section class="intern-flex-container">
                <div>
                    <h5>Color</h5>
                    <input type="checkbox" class="check3" name="gray_color_mt" value="gray"> Gray<br>
                    <input type="checkbox" class="check3" name="black_color_mt" value="black"> Black<br>
                    <input type="checkbox" class="check3" name="white_color_mt" value="white"> White <br><br>
                    <script>
                        $(document).ready(function(){
                            $('.check3').click(function() {
                                $('.check3').not(this).prop('checked', false);
                            });
                        });
                    </script>
                </div>
                <div>
                    <h5>Size</h5>
                    <input type="checkbox" class="check4" name="14px_mt" value="14"> 14 px <br>
                    <input type="checkbox" class="check4" name="16px_mt" value="16"> 16 px <br>
                    <input type="checkbox" class="check4" name="18px_mt" value="18"> 18 px <br><br>
                    <script>
                        $(document).ready(function(){
                            $('.check4').click(function() {
                                $('.check4').not(this).prop('checked', false);
                            });
                        });
                    </script>
                </div>
            </section>
        </div>
    </nav>

    <input type="submit" name="Submit">

</form>
</body>
</html>
