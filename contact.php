<html lang="fa-IR" dir="rtl">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles4.css">
    </head>
    <body style="background-image: url('pics/background2.jfif');background-repeat:no-repeat;background-size: cover;">
        <ul>
            <li><a href="introduction.html" >معرفی</a> </li>
            <li><a href="skills.html">توانمندیها</a> </li>
            <li><a href="achievements.html">دستاوردها</a> </li>
            <li><a href="contact.html">تماس با من</a> </li>
        </ul>
        <div id="page-container">
            <div id="content">
                <center><p style="background-color: rgb(50, 50, 150); font-size:150%; color: white; width: 300px; height: 50px;"
                >پیامت با موفقیت ثبت شد. خیلی ممنون!</p></center>
                <?php
                    /*$myfile = fopen("memory.txt", "r");
                    $tedad = (int) (fgets($myfile, 32));
                    fclose($myfile); */

                    $dir = "messages";
                    $tedad = sizeof(scandir($dir)) - 1;
                    
                    $new_file = fopen("messages/$tedad.txt", "w");
                    fwrite($new_file, "name: ");

                    fwrite($new_file, $_POST["name"]);
                    fwrite($new_file, "\n");
                    fwrite($new_file, "email: ");
                    fwrite($new_file, $_POST["email"]);
                    fwrite($new_file, "\n");
                    fwrite($new_file, "message: ");
                    fwrite($new_file, $_POST["matn"]);
                   
                    fclose($new_file);
                    ?>
            </div>
            <div id="footer">
                <footer>
                    <address> بهم
                <a href="mailto:alitwis83@gmail.com" style="color:black; text-align: right;;" > ایمیل </a>
                بزن!
                    </address>
                </footer>
            </div>
        </div>
    </body>

</html>