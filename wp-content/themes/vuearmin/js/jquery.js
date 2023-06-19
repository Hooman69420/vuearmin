$(document).ready(function () {


// 404 mousemove

    document.querySelector("body").addEventListener("mousemove", eyeball);

    function eyeball(event) {
        const eyes = document.querySelectorAll(".eyes");
        eyes.forEach(function (eye) {
            let x = eye.getBoundingClientRect().left + eye.offsetWidth / 2;
            let y = eye.getBoundingClientRect().top + eye.offsetHeight / 2;
            let radian = Math.atan2(event.pageX - x, event.pageY - y);
            let rotate = radian * (180 / Math.PI) * -1 + 270;
            eye.style.transform = "rotate(" + rotate + "deg)";
        });
    }

// Form Modal

    var formModal = $(".formModal");
    var formModal404 = $(".formModal1");
    var closeModBtn = $(".close-modal");

    formModal.click(function () {
        $('body').addClass('active');
        $('.modalbg').addClass('modalbg-active');
        $('.modalbg').show();
        $('.form-container1').show();
    });
    
    closeModBtn.click(function () {
        $('.modalbg').hide();
        $('.form-container1').hide();
        $('body').removeClass('active');
    });

    // 404
    formModal404.mouseover(function () {
        $('.modalbg').show();
    });
    

// Back to Top

    var mybutton = document.getElementById("myBtn");

    $('#myBtn').click(function () { // back to top
        $("html, body").animate({
            scrollTop: 0
        }, 900);
        return false;
    });

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

// 404 JS Script

  
});



