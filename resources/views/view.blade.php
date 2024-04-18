<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/8ef4a8399d.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
</head>
<body class="p-3">
    <div class=" container mx-auto" >
   <div class="flex justify-between items-center ">
    <div class=" flex-1 text-xl  flex items-center gap-3">
        <i class="fa-solid fa-magnifying-glass"></i>
        <i class="fa-regular fa-moon"></i>
    </div>
    <div class=" flex-1  text-red-600 text-lg font-bold "> ehsan</div>
    <div class=" flex-1 flex items-center justify-end gap-3">
        <a href="#" class=" font-bold text-gray-600">login</a>
    <a href="#" class=" bg-red-600 text-white rounded-full px-3 py-2">subscribe</a>
    </div>
   </div>

<div class=" border-y flex justify-center items-center gap-3 font-medium m-2">
<a href="#" class="nav-link hover:text-red-500">home</a>
<a href="#" class="nav-link hover:text-red-500" >about me</a>
<a href="#" class="nav-link hover:text-red-500">paywandi</a>
<a href="#" class="nav-link hover:text-red-500">mnish</a>
<a href="#" class="nav-link hover:text-red-500">custme</a>
<i class="fa-solid fa-ellipsis text-[18px] cursor-pointer"></i>
</div>
<div class="grid grid-cols-1 md:grid-cols-5 gap-3">
    <div class=" flex flex-col items-start justify-center col-span-2 ">
     <div class=" flex flex-col  gap-5">
        <div class="flex items-center gap-3">
            <div class="border-2 px-3 py-1.5 rounded-md  text-gray-500 font-bold cursor-pointer hover:border-red-600 hover:text-red-500 hover:scale-110  transition-all ">
                midnest
            </div>
            <div class="px-3 py-1.5 rounded-md transition-all text-black font-bold cursor-pointer bg-yellow-400 hover:scale-110   ">
                members
            </div>
            <i class="fa-regular fa-star text-yellow-300 text-[18px] rounded-lg hover:scale-125 transition-all hover:bg-black hover:text-white p-1 "></i>
        </div>
        <div>
            <p class=" text-5xl font-bold hover:text-red-600">Working from home can make people more productive</p>
        </div>
        <div class="flex gap-3 items-center">
            <img src="../assets/img/lion.jpg" class=" rounded-full w-[50px] h-[50px] object-cover border-2 border-yellow-500 hover:rotate-[360deg] hover:scale-125 transition-all duration-500 " alt="">
            <div class="flex flex-col ">
                <p class=" font-medium">Harvey Specter </p>
                <p class=" text-stone-600"> Mar 29, 2020</p>
            </div>
        </div>
     </div>
    </div>
    <div class=" col-span-3">
        <img src="/assets/img/chair.jpg" class=" rounded-xl object-cover w-[700px] h-[600px] hover:scale-[0.65] ml-auto hover:-rotate-45 duration-500 transition-all ">
    </div>
</div>
<div class="grid grid-cols-8 gap-5 mt-5">
    <div class="  col-span-6 ">

        <div class="grid grid-cols-2   gap-5 p-3 ">
            <div class="  ">
                <img src="../assets/img/1.jpg" class=" w-full h-[300px] rounded-md object-cover hover:scale-105 transition-all   ">
           <div class="flex gap-3">
            <div class=" pc-3 py-1.5 rounded-md border-2 m-2 mt-3 p-2   font-bold text-black hover:text-red-600 hover:border-red-600   cursor-pointer hover:scale-105 transition-all">mindest</div>
         </div>
         <p class=" font-bold text-4xl mt-3 ">Looking way ahead allows you to imagine anything</p>
        <div class=" flex  gap-3 mt-3 ">
            <img src="../assets/img/lion.jpg" class="w-[60px] h-[60px] rounded-full object-cover border-2 border-yellow-300 hover:rotate-[360deg] hover:scale-125 transition-all duration-500">
            <div class=" flex flex-col ">
                <p>ehsan umar </p>
                <p class=" text-sm text-stone-500">12/26/2022</p>
            </div>
        </div>
        </div>
        <div class=" pl-2 ">
            <img src="../assets/img/2.jpg" class=" w-full h-[300px] rounded-md object-cover hover:scale-105 transition-all  ">
       <div class="flex gap-3">
        <div class=" pc-3 py-1.5 rounded-md border-2 m-2 mt-3 p-2   font-bold text-black hover:text-red-600 hover:border-red-600   cursor-pointer hover:scale-105 transition-all">mindest</div>
     </div>
     <p class=" font-bold text-4xl mt-3 ">Even the greats can be improved upon</p>
    <div class=" flex  gap-3 mt-3 ">
        <img src="../assets/img/author-donna-1.jpg" class="w-[60px] h-[60px] rounded-full object-cover border-2 border-yellow-300 hover:rotate-[360deg] hover:scale-125 transition-all duration-500">
        <div class=" flex flex-col ">
            <p>Mike Ross
                 </p>
            <p class=" text-sm text-stone-500">2/8/2022</p>
        </div>
    </div>
    </div>
    <div class=" pt-2 ">
        <img src="../assets/img/3.jpg" class=" w-full h-[300px] rounded-md object-cover hover:scale-105 transition-all  ">
   <div class="flex gap-3">
    <div class=" pc-3 py-1.5 rounded-md border-2 m-2 mt-3 p-2   font-bold text-black hover:text-red-600 hover:border-red-600   cursor-pointer hover:scale-105 transition-all">mindest</div>
 </div>
 <p class=" font-bold text-4xl mt-3 ">5 ways an electric bike will change your life</p>
<div class=" flex  gap-3 mt-3 ">
    <img src="../assets/img/author-harvey-1.jpg" class="w-[60px] h-[60px] rounded-full object-cover border-2 border-yellow-300  hover:rotate-[360deg] hover:scale-125 transition-all duration-500">
    <div class=" flex flex-col ">
        <p>Harvey anter </p>
        <p class=" text-sm text-stone-500">4/16/2022</p>
    </div>
</div>
</div>
<div class=" pt-2 pl-2">
    <img src="../assets/img/4.jpg" class=" w-full h-[300px] rounded-md object-cover hover:scale-105 transition-all ">
<div class="flex gap-3">
<div class=" pc-3 py-1.5 rounded-md border-2 m-2 mt-3 p-2   font-bold text-black hover:text-red-600 hover:border-red-600   cursor-pointer hover:scale-105 transition-all">mindest</div>
</div>
<p class=" font-bold text-4xl mt-3 ">Always have another set of eyeballs look over your work</p>
<div class=" flex  gap-3 mt-3  ">
<img src="../assets/img/author-rachel-1.jpg" class="w-[60px] h-[60px] rounded-full object-cover border-2 border-yellow-300 hover:rotate-[360deg] hover:scale-125 transition-all duration-500 ">
<div class=" flex flex-col ">
    <p>rechal rosn </p>
    <p class=" text-sm text-stone-500">7/4/2022</p>
</div>
</div>
</div>
        </div>
        <div class=" flex justify-center mt-4 ">
                <div class=" border-2 px-5 py-3 cursor-pointer rounded-md border-red-500 text-red-500 hover:text-red-700 hover:border-red-700 transition-all hover:scale-105 font-bold ">lode more post</div>
        </div>
    </div>
    <div class="  col-span-2 flex flex-col gap-5">
        <div class=" border bg-zinc-50 p-3 rounded-md text-center relative">
            <p class=" font-bold text-xl text-stone-700">Auden</p>
            <img src="../assets/img/wave.png" class=" 2-[80px] h-[10px] mx-auto mt-2 mb-3 hover:rotate-180 transition-all duration-300">
            <p class=" text-slate-600 mt-3">Auden is a modern magazine style Ghost theme with dark and light theme and membership support
            </p>
            <div class=" flex mt-3 justify-center gap-4 text-xl ">
                <i class="fa-brands fa-facebook hover:scale-125 transition-all"></i>
                <i class="fa-brands fa-linkedin hover:scale-125 transition-all"></i>
                <i class="fa-brands fa-square-twitter hover:scale-125 transition-all"></i>
                <i class="fa-brands fa-instagram hover:scale-125 transition-all"></i>
            </div>
        </div>
        <div class=" border bg-zinc-50 p-3 rounded-md text-center">
            <p class=" font-bold text-xl text-stone-700">Explore topics</p>
            <img src="../assets/img/wave.png" class=" w-[160px] h-[10px] mx-auto mt-2 mb-3 hover:rotate-180 transition-all duration-300">
           <div class=" flex flex-col gap-3 divide-y ">
               <div class=" flex justify-between   font-bold text-stone-500 hover:text-red-600 pt-2 cursor-pointer hover:scale-105 transition-all">
               <p>space</p>
                <p>12</p>
            </div>
            <div class=" flex justify-between   font-bold text-stone-500 hover:text-red-600 pt-2  cursor-pointer hover:scale-105 transition-all">
                <p>space</p>
                <p>12</p>
            </div>
            <div class=" flex justify-between   font-bold text-stone-500 hover:text-red-600 pt-2  cursor-pointer hover:scale-105 transition-all">
                <p>space</p>
                <p>12</p>
            </div>
            <div class=" flex justify-between   font-bold text-stone-500 hover:text-red-600 pt-2  cursor-pointer hover:scale-105 transition-all">
                <p>space</p>
                <p>12</p>
            </div>
            <div class=" flex justify-between   font-bold text-stone-500 hover:text-red-600 pt-2  cursor-pointer hover:scale-105 transition-all">
                <p>space</p>
                <p>12</p>
            </div>
        </div>
    </div>
    </div>
</div>
<div class="m-5">
    <p class=" font-bold text-xl">Explore topics</p>
    <img src="../assets/img/wave.png" class="w-[140px] h-[10px] hover:rotate-180 transition-all duration-300">
<div class=" grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-3 ">
    <div class=" relative w-full  ">
        <img src="../assets/img/fo1.jpg" class="mt-3 rounded-md w-[300px] h-[220px] object-cover">
        <div class="mt-3 absolute top-0 w-full h-[220px] rounded-md backdrop-brightness-75 hover:backdrop-brightness-50 flex flex-col justify-center items-center transition-all">
            <div class=" text-center cursor-pointer ">
                <p class=" text-white text-4xl font-bold hover:text-yellow-400">10+</p>
                <p class=" text-white text-4xl font-bold hover:text-yellow-400">Mindset</p>
            </div>
        </div>
    </div>
    <div class=" relative w-full  ">
        <img src="../assets/img/fo2.jpg" class="mt-3 rounded-md w-[300px] h-[220px] object-cover">
        <div class="mt-3 absolute top-0 w-full h-[220px] rounded-md backdrop-brightness-75 hover:backdrop-brightness-50 flex flex-col justify-center items-center transition-all">
            <div class=" text-center cursor-pointer">
                <p class=" text-white text-4xl font-bold hover:text-yellow-400">10+</p>
                <p class=" text-white text-4xl font-bold hover:text-yellow-400">Mindset</p>
            </div>
        </div>
    </div>
    <div class=" relative w-full  ">
        <img src="../assets/img/fo3.jpg" class="mt-3 rounded-md w-[300px] h-[220px] object-cover">
        <div class="mt-3 absolute top-0 w-full h-[220px] rounded-md backdrop-brightness-75 hover:backdrop-brightness-50 flex flex-col justify-center items-center transition-all">
            <div class=" text-center cursor-pointer">
                <p class=" text-white text-4xl font-bold hover:text-yellow-400">10+</p>
                <p class=" text-white text-4xl font-bold hover:text-yellow-400">Mindset</p>
            </div>
        </div>
    </div>
    <div class=" relative w-full ">
        <img src="../assets/img/fo4.jpg" class="mt-3 rounded-md w-[300px] h-[220px] object-cover">
        <div class="mt-3 absolute top-0 w-full h-[220px] rounded-md backdrop-brightness-75 hover:backdrop-brightness-50 flex flex-col justify-center items-center transition-all">
            <div class=" text-center cursor-pointer">
                <p class=" text-white text-4xl font-bold hover:text-yellow-400 ">10+</p>
                <p class=" text-white text-4xl font-bold hover:text-yellow-400">Mindset</p>
            </div>
        </div>
    </div>

</div>
<hr class="my-4">
<div class="grid grid-cols-2 md:grid-cols-2 xl:grid-cols-4 gap-4">
    <div class="flex flex-col gap-2 justify-center">
        <p class=" font-bold text-2xl">Navigation</p>
        <a href="#" class="hover:text-red-600 text-gray-500">Home Page</a>
        <a href="#" class="hover:text-red-600 text-gray-500">Custom Posts</a>
        <a href="#" class="hover:text-red-600 text-gray-500">Style Guide</a>
        <a href="#" class="hover:text-red-600 text-gray-500">Customization</a>
        <a href="#" class="hover:text-red-600 text-gray-500">Tags</a>
        <a href="#" class="hover:text-red-600 text-gray-500">Contact</a>
    </div>
    <div class="flex flex-col gap-2 justify-center">
        <p class=" font-bold text-2xl">Useful Link</p>
        <a href="#" class="hover:text-red-600 text-gray-500">MemberShip</a>
        <a href="#" class="hover:text-red-600 text-gray-500">Sign IN</a>
        <a href="#" class="hover:text-red-600 text-gray-500">Sign UP</a>
        <a href="#" class="hover:text-red-600 text-gray-500">Accoint</a>
    </div>
    <div class="flex flex-col gap-2 justify-center hover:text-red-600">
        <p class=" font-bold text-2xl">Cocial Media</p>
        <a href="#" class=" text-gray-500 hover:text-red-600"><i class="fa-brands fa-facebook text-xl pr-1 hover:scale-125 transition-all"></i>FaceBook</a>
        <a href="#" class=" text-gray-500  hover:text-red-600" hover:text-red-600> <i class="fa-brands fa-square-twitter text-xl pr-1 hover:scale-125 transition-all"></i> Twitter</a>
        <a href="#" class=" text-gray-500 hover:text-red-600"><i class="fa-brands fa-instagram text-xl pr-1 hover:scale-125 transition-all"></i> Instagram</a>
        <a href="#" class=" text-gray-500 hover:text-red-600"><i class="fa-brands fa-linkedin  text-xl pr-1  hover:scale-125 transition-all"></i>Linkedin</a>

    </div>
    <div class="flex flex-col gap-2 justify-center">
        <p class=" font-bold text-2xl">auden</p>
        <p class=" text-stone-500">Auden is a modern magazine style Ghost theme with dark and light theme and membership support</p>
<div class=" relative">
        <input type="email" placeholder="enter email please" required class=" border p-3 rounded-full w-full hover:border-red-600 ">
        <div class=" w-[50px] h-[50px] bg-red-600 text-white rounded-full absolute top-0  right-0 flex flex-col items-center justify-center">
            <i class="fa-solid fa-arrow-right text-2xl hover:scale-125 transition-all"></i>
    </div>
    </div>
    </div>
</div>
<p class=" text-center text-stone-500 hover:text-red-500 cursor-pointer">© 2022 Auden.Published with Ghost  & Auden.</p>

</div>
</div>
</body>
</html>
