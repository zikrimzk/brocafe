<?php

require_once("inc/dbcon.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://kit.fontawesome.com/aa1845efb0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="formatlog.css">


    <title>Bro's - Login</title>
</head>
<body class="bg-cover bg-fixed  "style="background-image: url(img/login_bg.jpg);">
    <!-- Navbar -->
<nav class=" p-5 shadow-l md:flex md:items-center md:justify-between z-[3] w-full bg-transparent">
    <div class="flex justify-between items-center">
        <span class=" text-1xl font-[cursive] cursor-pointer font-bold ">
            <img class="w-[300px] inline"src="img/logo_6.png" alt="logo">
        </span>
        <span class="cursor-pointer text-3xl md:hidden block mx-2 text-yellow-300">
            <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
        </span>
    </div>
    <div>
        
    </div>
    <ul class="md:flex md:items-center z-[1] md:z-auto md:static absolute backdrop-blur-xl w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0
    top-[-400px] transition-all ease text-white " >
    <li class="mx-4 my-6 md:my-0 "><a href="index.html#" class="text-xl hover:text-yellow-100 duration-500 font-[Poppins]">Home</a></li class="mx-4 my-6 md:my-0">
        <li class="mx-4 my-6 md:my-0"><a href="index.html#about" class="text-xl hover:text-yellow-100 duration-500 font-[Poppins]">About</a></li class="mx-4 my-6 md:my-0">
        <li class="mx-4 my-6 md:my-0"><a href="index.html#profile" class="text-xl hover:text-yellow-100 duration-500 font-[Poppins]">Special</a></li class="mx-4 my-6 md:my-0">
        <li class="mx-4 my-6 md:my-0"><a href="index.html#menu" class="text-xl hover:text-yellow-100 duration-500 font-[Poppins]">Menu</a></li class="mx-4 my-6 md:my-0">
    </ul class="">
</nav>
    <!-- Login section -->
    <section class="login ">
        <div class="container w-[300px] h-[500px] float sm:w-[500px] sm:h-[500px] text-white mx-auto my-[60px] rounded-3xl backdrop-blur-3xl transition-all duration-500 ease-out">
            <form method="post" action="inc/login-gateway.php">
                <div class="columns-1 mx-auto">
                    <h1 class="text-[16pt] sm:text-[18pt] font-[Poppins] font-semibold text-center mt-8 bg-gradient-to-tr from-yellow-300 to-yellow-300 bg-clip-text text-transparent ">LOGIN</h1>
                </div>
                <div class="columns-1 m-10">
                    <h1 class="text-[16pt] font-[Poppins] bg-gradient-to-tr from-yellow-600 to-yellow-300 bg-clip-text text-transparent">Email</h1>
                    <input type="email" name="l_email" class=" border-b-2 border-yellow-400 h-9 w-[220px] sm:w-[420px] bg-transparent " placeholder=" Type your email ">
                </div>
                <div class="columns-1 m-10">
                    <h1 class="text-[16pt] font-[Poppins] bg-gradient-to-tr from-yellow-600 to-yellow-300 bg-clip-text text-transparent ">Password</h1>
                    <input type="password" name="l_password" class=" border-b-2 border-yellow-400 h-9 w-[220px] sm:w-[420px] bg-transparent " placeholder=" Type your password ">
                    <div class="forget text-right"><a href="#" class="text-xs hover:text-yellow-400 ">Forgot password?</a></div>
                </div>
                <div class="columns-1 m-10">
                    <input type="submit" name="submit" class=" mx-auto border-[3px]  border-yellow-300   bg-gradient-to-tr from-yellow-700 to-yellow-300 bg-clip-text text-transparent font-bold px-[85px] py-2 sm:px-[180px] sm:text-sm  lg:text-lg  hover:border-yellow-600   font-[Poppins] text-[12pt] rounded-md mb-1" value="Login">
                </div>
                <div class="font-[Poppins] text-sm text-center">New user? <a onclick="signup(this)" class="hover:text-yellow-400 cursor-pointer" >create account now</a></div>

            </form>

        </div>
    </section>

    <!-- Sign up Section-->
    <section class="signup hidden">
        <a name="signup"></a>
        <div class="container w-[300px] h-[700px] float sm:w-[500px] sm:h-[700px] text-white mx-auto my-[60px] rounded-3xl backdrop-blur-3xl transition-all duration-500 ease-out">
            <form method="post" action="inc/signup-gateway.php">
                <div class="columns-1 mx-auto">
                    <h1 class="text-[16pt] sm:text-[18pt] font-[Poppins] font-semibold text-center mt-8 bg-gradient-to-tr from-yellow-800 to-yellow-300 bg-clip-text text-transparent ">SIGNUP</h1>
                </div>
            <div class="overflow-y-auto h-[450px]">
                <div class="columns-1 m-10">
                    <h1 class="text-[16pt] font-[Poppins] bg-gradient-to-tr from-yellow-600 to-yellow-300 bg-clip-text text-transparent">Name</h1>
                    <input type="text" name="s_name" class=" border-b-2 border-yellow-400 h-9 w-[220px] sm:w-[420px] bg-transparent " placeholder=" Enter your name ">
                </div>
                <div class="columns-1 m-10">
                    <h1 class="text-[16pt] font-[Poppins] bg-gradient-to-tr from-yellow-600 to-yellow-300 bg-clip-text text-transparent">Email</h1>
                    <input type="email" name="s_email" class=" border-b-2 border-yellow-400 h-9 w-[220px] sm:w-[420px] bg-transparent " placeholder=" Enter your email ">
                </div>
                <div class="columns-1 m-10">
                    <h1 class="text-[16pt] font-[Poppins] bg-gradient-to-tr from-yellow-600 to-yellow-300 bg-clip-text text-transparent">Phone Number</h1>
                    <input type="text" name="s_phone" class=" border-b-2 border-yellow-400 h-9 w-[220px] sm:w-[420px] bg-transparent " placeholder=" Enter your phone number ">
                </div>
                <div class="columns-1 m-10">
                    <h1 class="text-[16pt] font-[Poppins] bg-gradient-to-tr from-yellow-600 to-yellow-300 bg-clip-text text-transparent ">Password</h1>
                    <input type="password" name="s_password" class=" border-b-2 border-yellow-400 h-9 w-[220px] sm:w-[420px] bg-transparent " placeholder=" Enter your password ">
                </div>
                <div class="columns-1 m-10">
                    <h1 class="text-[16pt] font-[Poppins] bg-gradient-to-tr from-yellow-600 to-yellow-300 bg-clip-text text-transparent ">Confirm Password</h1>
                    <input type="password" name="s_password2" class=" border-b-2 border-yellow-400 h-9 w-[220px] sm:w-[420px] bg-transparent " placeholder=" Re-enter your password ">
                </div>
            </div>
                <div class="columns-1 m-10">
                    <input type="submit" name="submit" class=" mx-auto border-[3px]  border-yellow-300   bg-gradient-to-tr from-yellow-700 to-yellow-300 bg-clip-text text-transparent font-bold px-[85px] py-2 sm:px-[180px] sm:text-sm  lg:text-lg  hover:border-yellow-600   font-[Poppins] text-[12pt] rounded-md mb-1" value="Register">
                </div>
                <div class="font-[Poppins] text-sm text-center">Already have an account? <a onclick="login(this)" class="hover:text-yellow-400 cursor-pointer">login now</a></div>

            </form>

        </div>
    </section>



    <!-- Footer start -->
    <footer class="font-[Arial]">
        <div class="p-10 bg-black text-gray-100">
            <div class="max-w-7xl mx-auto"></div>
            <div class="grid grid-cols-1 md:grid:-cols-2 lg:grid-cols-4 gap-2">
                <div class="mb-5">
                    <h4 class="pb-4 text-[20pt] text-amber-0"><span class="bg-gradient-to-br from-yellow-900 to-yellow-300 bg-clip-text text-transparent font-extrabold">BRO's CAFE</span></h4>
                    <p class="text-white">
                        Floor 2 <br>
                        Petronas Twin Towers, KLCC <br>
                        61400 Kuala Lumpur<br>
                        Malaysia <br><br>
                        <strong>Phone : </strong> +60 03-234 4673 <br>
                        <strong>Email : </strong> broscafe@gmail.com <br>
                    </p>
                </div>
                <div class="mb-5">
                    <h4 class="pb-4  text-amber-300">Working Hours</h4>
                    <p class="text-white">
                        <strong class="text-yellow-500">Operating hours </strong> : <br> 11:30am – 11:30pm <br>
                        <strong class="text-yellow-500">Lunch hours</strong> : <br> 11:30am – 2:30pm (1:30pm last order) <br>
                        <strong class="text-yellow-500">Dinner hours</strong> : <br> 6pm: 9pm last orde <br>
                        <strong class="text-yellow-500">Beverage</strong> : <br> 11pm last order Beverage <br>
                    </p>
                </div>
                <div class="mb-5">
                    <h4 class="pb-4  text-amber-300">Quick Links</h4>
                    <ul class="text-white">
                        <ul class="text-white">
                            <li class="pb-4"><i class="fa fa-chevron-right text-yellow-500"></i><a href="index.html#" class="hover:text-amber-300"> Home</a> </li>
                            <li class="pb-4"><i class="fa fa-chevron-right text-yellow-500"></i><a href="index.html#about" class="hover:text-amber-300"> About</a> </li>
                            <li class="pb-4"><i class="fa fa-chevron-right text-yellow-500"></i><a href="index.html#profile" class="hover:text-amber-300"> Special</a> </li>
                            <li class="pb-4"><i class="fa fa-chevron-right text-yellow-500"></i><a href="index.html#menu" class="hover:text-amber-300"> Menu </a> </li>
                            <li class="pb-4"><i class="fa fa-chevron-right text-yellow-500"></i><a href="login.html#signup" class="hover:text-amber-300"> Create Account</a></li>
                            <li class="pb-4"><i class="fa fa-chevron-right text-yellow-500"></i><a href="login.html" class="hover:text-amber-300"> Login</a> </li>
                        </ul >
                    </ul >
                </div>
                <div class="mb-5">
                    <h4 class="pb-4  text-amber-300">Keep in touch with Us ! </h4>
                    <p class="text-white pb-3">Follow up our new menus, our promotion with great deal and more </p>
                    <form action="" class="flex flex-row flex-wrap">
                        <input type="text" name="news" id="news" class="text-black w-2/3 p-2 focus:border-yellow-500" placeholder="email@exp.com">
                        <input type="submit" value="Subscribe" class="p-2 w-1/3 bg-yellow-500 text-white hover:bg-yellow-600">

                    </form>
                </div>
            </div>

        </div>
        <div class="w-full bg-zinc-900 text-white px-10">
            <div class="max-w-7xl flex flex-col sm:flex-row py-4  mx-auto justify-between items-center">
                <div class="text-center">
                    <div>
                        Copyright <strong><span> Bro Cafe</span></strong>. All Right Reserved
                    </div>
                    <div>
                        Designed by <a href="" class="text-yellow-500">Zikri Mzk</a>
                    </div>
                </div>
                <div class="text-center text-xl text-white mb-2">
                    <a href="" class="w-10 h-10 rounded-full bg-yellow-500 hover:bg-yellow-600 mx-1 inline-block pt-1"><i class="fa fa-twitter"></i></a>
                    <a href="" class="w-10 h-10 rounded-full bg-yellow-500 hover:bg-yellow-600 mx-1 inline-block pt-1"><i class="fa fa-instagram"></i></a>
                    <a href="" class="w-10 h-10 rounded-full bg-yellow-500 hover:bg-yellow-600 mx-1 inline-block pt-1"><i class="fa fa-facebook"></i></a>
                    <a href="" class="w-10 h-10 rounded-full bg-yellow-500 hover:bg-yellow-600 mx-1 inline-block pt-1"><i class="fa fa-linkedin"></i></a>
                </div>

            </div>

        </div>

    </footer>
    <!-- Footer End  -->
    
    
</body>
<script>
    function Menu(e){
        let list = document.querySelector('ul');
        e.name === 'menu'? (e.name="close" , list.classList.add('top-[70px]'), list.classList.add('opacity-100')) : (e.name="menu" ,list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'))

    }

    let s = document.querySelector('.signup')
    let l = document.querySelector('.login')


    function signup(e){
        l.classList.add('hidden')
        s.classList.remove('hidden')
    }

    function login(e){
        l.classList.remove('hidden')
        s.classList.add('hidden')
    }



</script>
</html>