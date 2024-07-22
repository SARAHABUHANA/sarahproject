const nav = document.querySelector('nav');
const btn = document.querySelector('button');

btn.addEventListener('click', () => {
    nav.classList.toggle('active');
    btn.classList.toggle('active');
})

 
 $(document).ready(function(){
     $('.counter-value').each(function(){
         $(this).prop('Counter',0).animate({
             Counter: $(this).text()
         },{
             duration: 3500,
             easing: 'swing',
             step: function (now){
                 $(this).text(Math.ceil(now));
             }
         });
     });
 });


 