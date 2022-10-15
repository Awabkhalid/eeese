<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script src="https://kit.fontawesome.com/b5a00cbc00.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../dist/output.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>
<body class="bg-gray-200 ">
    
    <main class="flex justify-center">
            <form method = "POST" action="" class="p-12 pb-10 pt-1.5 h-3/4 bg-white mt-20 grid grid-cols-1 gap-4 rounded-lg shadow-xl">
                <img class="ml-20 my-3 rounded w-20" src="eeese.jpg" alt="forbes-logo">
                <h1 class="ml-20 font-bold text-xl">Hyphens</h1>
                <input name="index" type="index" class="border border-gray-300 rounded-md w-64 h-9 mt-0 pl-4 hover:border-gray-400 hover:placeholder-gray-600 focus:border-sky-500 focus:outline-none focus:ring-1" placeholder="Student Index" id="email" require>
                <input name="password" type="password" class="border border-gray-300 rounded-md w-64 h-9 pt-0 pl-4 mb-4 hover:border-gray-400 hover:placeholder-gray-600 focus:border-sky-500 focus:outline-none focus:ring-1" placeholder="Password" id="password" require>
                <button name = "sin" class="bg-blue-800 py-2.5 rounded-md text-center text-white cursor-pointer hover:bg-blue-900" id="button">Sign in</button>
</form>
            
    </main>
    <script src="index.js"></script>
    </body>
</html>

    <?php
    $index = "2002";
    $password = "12345";

    if(isset($_POST['sin'])) {
        $getindex = $_POST['index'];
        $getpassword = $_POST['password'];

        if($index === $getindex && $password === $getpassword) {
            header("Location:https://www.google.com/");
            /*    $_SESSION['user'] = $getusername,
                $_SESSION['password'] = $getpassword,
                $_SESSION['login'] = true,

               echo "<script>location.replace('secomd.php') </script>";
            */
        }
    
    
    else{
        echo "<h3>cheak your name and your index</h3>";
    }

    }
    ?>
