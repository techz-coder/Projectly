
// theme starting
document.addEventListener('DOMContentLoaded', () => {

    var dark = document.getElementById('dark-btn');
    var light = document.getElementById('light-btn');
    var theme_light_text = document.getElementById('theme_light_text');
    var theme_light_text2 = document.getElementById('theme_light_text2');
    var theme_light_text3 = document.getElementById('theme_light_text3');
    var body = document.getElementsByTagName("body")[0];
    var text_light_theme = document.getElementsByClassName('text_light_theme')[0];

    dark.addEventListener('click', (e) => {
        e.preventDefault();
        body.style.backgroundColor = "#212529";
        light.style.display = "block";
        dark.style.display = "none";
        text_light_theme.style.color = "#fff";
        theme_light_text.style.color = "#fff";
        theme_light_text2.style.color = "#fff";
        theme_light_text3.style.color = "#fff";
    });
    
    light.addEventListener('click', (e) => {
        e.preventDefault();
        body.style.backgroundColor = "#fff";
        light.style.display = "none";
        dark.style.display = "block";
        text_light_theme.style.color = "#000";
        theme_light_text.style.color = "#000";
        theme_light_text2.style.color = "#000";
        theme_light_text3.style.color = "#000";
    });

});

// theme ending

// card fade animation starting

document.addEventListener('DOMContenLoaded', () => {
    const animatedDiv = document.querySelectorAll('.animated-div');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                animatedDiv.classList.add('.animate')
                observer.unobserve(animatedDiv);
            }
        });
    },{
        threshold:0.5
    });
    observer.observe(animatedDiv);
});

// card fade animation ending

// second slider starting
let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

const nextSlide = () => {
    slides[currentSlide].classList.remove('active');
    currentSlide = (currentSlide + 1) % totalSlides;
    updateSliderPosition();
}

const prevSlide = () => {
    slides[currentSlide].classList.remove('active');
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    updateSliderPosition();
}

const updateSliderPosition = () => {
    const slider = document.querySelector('.slider');
    slider.style.transform = `translateX(-${currentSlide * 100}%)`;
    slides[currentSlide].classList.add('active');
}

document.getElementById('next').addEventListener('click', nextSlide);
document.getElementById('prev').addEventListener('click', prevSlide);

setInterval(nextSlide, 3000);

updateSliderPosition();


// $(document).ready(function () {
//     $('#register_form').click(function (e) {
//       e.preventDefault();
//       var formData = $(this).serialize();

//       $.ajax({
//         url: "insertQuery.php",
//         type: "POST",
//         data: formData,
//         success: function (response) {
//           alert(response);
//         },error:function(){
//           alert("An error occured");
//         }
//       });
//     });
//   });

// currently page is not available

function pagenot(){
    alert("Currently this page is not available try some time later!!!");
    return false;
}
pagenot();