<!DOCTYPE html>
<html lang="en" >
  
    <head> 
        <title>Dashboard</title>   
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script> 
    @vite(['resources/css/dashboard.css','resources/js/dashboard.js'])
     <!--FONT AWESOME-->
     <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css”>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body dir="rtl">
   <div class="main">
    <div class="home">
        <!-------------header------------------>
        <div class="header">
          
             <div class="logo"><img  class="logo" src="{{ asset('img/logo.png') }}" width="130px"  height="50px" alt="Image Description">
                    
            </div>
            
        </div>
        <!------------------------------------->
      
        

        <div class="py-4">
            @yield('content')
        </div >
     


</div>
    
   
    <nav class="active">
        <div class="logo" >            
            <a href="#">
                <i class="fas fa-cogs menu-icon"></i>
                لوحة التحكم 
                  
            </a>
        </div>
        <ul>
            
            <li><a href="home"> <i class="fas fa-home menu-icon"></i>    الصفحة الرئيسية </a></li>
            <li><a href="admin/users"> <i class="fas fa-users menu-icon"></i>  قائمة المبدعين </a></li>
            <li><a href="#" >   <i class="fas fa-building menu-icon"></i>
                قائمة الشركات </a></li>
            <li><a href="admin/projects" >  <i class="fas fa-project-diagram menu-icon"></i>
                قائمة المشاريع</a></li>
            <li><a href="#">  <i class="fas fa-exclamation-triangle menu-icon"></i>
                التحديات</a></li>
            <li><a href="{{ route('training-sessions.index')}}">  <i class="fas fa-chalkboard-teacher menu-icon"></i>
                الورشات التدريبية </a></li>
            
            <li><a href="#"><i class="fas fa-question-circle menu-icon"></i>
                  الأسئلة   </a></li>
          
            <li><a href="idea">  <i class="fas fa-lightbulb menu-icon"></i>
                إضافة فكرة  </a></li>
        <li><a href="challeng">   <i class="fas fa-trophy menu-icon"></i>
            إضافة تحدي </a></li>
   
            <li><a href="#"> تسجيل خروج </a></li>
        </ul>
    </nav>

</div>
    <script src="/admin.js"></script>
       
</body>

</html>