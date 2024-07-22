@extends('layouts.app')

@section('content')
    
 <div class="content"> 

  <div class="main-app">
    <div class="sidebar">
      <nav class="main-nav">
        <ul class="main-menu">
          <li class="menu-item active">
            <a href="#" class="menu-a" target="_blank">
              <div class="menu-txt-hld">
                <i class="fas fa-igloo menu-icon"></i>
                <span class="menu-txt">Home</span>
              </div>
            </a>
          </li>
        
          <li class="menu-item">
            <a href="profile" class="menu-a" target="_blank">
              <div class="menu-txt-hld">
                <i class="fas fa-user-circle menu-icon"></i>
                <span class="menu-txt">الملف الشخصي </span>
              </div>
            </a>
          </li>
          <li class="menu-item">
            @if(session('last_created_company_id'))
            <a href="{{ route('companies.show', ['company' => session('last_created_company_id')]) }}" class="menu-a" target="_blank"> 
@else
<a href="{{ route('login') }}" class="menu-a" target="_blank"></a>
@endif
           
 
              <div class="menu-txt-hld">
                <i class="fas fa-landmark menu-icon"></i>
                <span class="menu-txt">شركة أو مؤسسة  </span>
              </div>
            </a>
          </li>
          
        </ul>
      </nav>
    </div>
  </div>

<div class="tow">
  <section class="hero" id="hero">
    <div class="bg">
      <div class="opacity">
      <div class="imag">
  <style>
   
.imag  .img{
    
    background-image: url('/img/creative-thinking-animate (1).svg');
  
  width:600px;
    
    background-size: cover;
    height: 100vh;
   
  
  }
  </style>
    <div class="img">
          
        </div>
      </div>
      <div class="text">
      <div class="text1">
       <h1>إِبدَاع ، تَحدّي ، ابتِكَار ، تَميُّز</h1>
      </div>
      <div class="text2">
        <h5>في عالم الإبداع، نحن نعمل على تحويل الأفكار إلى واقع ملموس يلهم العالم ويغيره، فنحن نؤمن بقوة الإبداع في تحقيق التغيير وإحداث الفارق الإيجابي في حياة الناس وفي مجتمعاتنا</h5>
       </div>
       <div class="buttons">
       <div class="wrap ">
        <button class="button">سجل الدخول </button>
      </div>
      <div class="wrap">
        <button class="button1">اكتشف الإبداعات</button>
      </div>
    </div>
      </div>
    </div>
    </div>
  </section>
  <section class="sec_qute">
  <div class="quote">
    <div class="icon">
     
    </div>
    <div class="text">
      <h2> الإبداع هو لغة تتحدث بها أعمالك ، فكن صوتاً ملهماً
        يصل إالى قلوب الأخرين ويحفزهم عل التفكير والتأمل . 
      ابتكر بلا حدود واستمتع بعملك الإبداعي ، فهو مفتاح تحقيق أحلاممك وتأثير العالم بإيجابية  </h2>
    </div>
    
  
</div> 
</section>
<section>
<div class="container">
<br><br><br>
<div class="two">
  <h1>  أحدث المشاريع الإبداعية 
    <span>المشاريع التي إضافتها مؤخراً  </span>
  </h1>
</div>
<section class="cards">

  @foreach ($projects as $project)
  <article class="card card--1">  
    <div class="card__info-hover">
      <svg class="card__like"  viewBox="0 0 24 24">
      <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
  </svg>
        <div class="card__clock-info">
          <svg class="card__clock"  viewBox="0 0 24 24"><path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
          </svg><span class="card__time">{{ $project->created_at }}</span>
        </div>
      
    </div>
    <div class="card__img" style="background-image: url('{{ asset('images/'.$project->image) }} ');"></div>
    <a href="{{ url('/singleproj/' . $project->id) }}" class="card_link">
       <div class="card__img--hover" style="background-image: url('{{ asset('images/'.$project->image) }} ');"></div>
     </a>
    <div class="card__info">
      <span class="card__category"> {{ $project->Specialty_name }}</span>
      <h3 class="card__title">{{ $project->title }}</h3>
      <span class="card__by"> <a href="{{ route('users.show', $project->user->id) }}" class="card__author" title="الناشر">   {{ $project->user->name }}    </a> </span>
    </div>
  </article>
  @endforeach
    
  
    
    
    </section>
</div>
</section>


<section class="project" id="project">
  <!-- Control buttons -->
  
  
  <div class="container2">
    <div class="filterDiv design"><section class="cards">

      @foreach ($projects as $project)
      <article class="card card--1">  
        <div class="card__info-hover">
          <svg class="card__like"  viewBox="0 0 24 24">
          <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
      </svg>
            <div class="card__clock-info">
              <svg class="card__clock"  viewBox="0 0 24 24"><path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
              </svg><span class="card__time">{{ $project->created_at }}</span>
            </div>
          
        </div>
        <div class="card__img" style="background-image: url('{{ asset('images/'.$project->image) }} ');"></div>
        <a href="{{ url('/singleproj/' . $project->id) }}" class="card_link">
           <div class="card__img--hover" style="background-image: url('{{ asset('images/'.$project->image) }} ');"></div>
         </a>
        <div class="card__info">
          <span class="card__category"> {{ $project->Specialty_name }}</span>
          <h3 class="card__title">{{ $project->title }}</h3>
          <span class="card__by"> <a href="{{ route('users.show', $project->user->id) }}" class="card__author" title="الناشر">   {{ $project->user->name }}    </a> </span>
        </div>
      </article>
      @endforeach
        
      
        
        
        </section></div>
  
    
  
</section>  
</div>
</div>
@endsection








<!--------- كود جافا سيكربيت ------------------------>
<script>

const menuBtn = document.getElementById("menu-btn");
const navLinks = document.getElementById("nav-links");
const menuBtnIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", (e) => {
  navLinks.classList.toggle("open");

  const isOpen = navLinks.classList.contains("open");
  menuBtnIcon.setAttribute("class", isOpen ? "ri-close-line" : "ri-menu-line");
});

navLinks.addEventListener("click", (e) => {
  navLinks.classList.remove("open");
  menuBtnIcon.setAttribute("class", "ri-menu-line");
});

const headerImage = document.querySelector(".header__image");
headerImage.addEventListener(
  "animationend",
  (e) => {
    setTimeout(() => {
      headerImage.classList.add("reveal");
    });
  },
  { once: true }
);

const scrollRevealOption = {
  distance: "50px",
  origin: "bottom",
  duration: 1000,
};

ScrollReveal().reveal(".header__content h1", {
  ...scrollRevealOption,
  delay: 1500,
});
ScrollReveal().reveal(".header__content h2", {
  ...scrollRevealOption,
  delay: 2000,
});
ScrollReveal().reveal(".header__content p", {
  ...scrollRevealOption,
  delay: 2500,
});
ScrollReveal().reveal(".header__content div", {
  ...scrollRevealOption,
  delay: 3000,
});

ScrollReveal().reveal(".header .nav__links", {
  delay: 3500,
});

</script>









<script>


  filterSelection("all")
  function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
      w3RemoveClass(x[i], "show");
      if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
  }
  
  function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
    }
  }
  
  function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      while (arr1.indexOf(arr2[i]) > -1) {
        arr1.splice(arr1.indexOf(arr2[i]), 1);     
      }
    }
    element.className = arr1.join(" ");
  }
  
  // Add active class to the current button (highlight it)
  var btnContainer = document.getElementById("myBtnContainer");
  var btns = btnContainer.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function(){
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }
  </script>
<!--------- كود جافا سيكربيت ------------------------>
