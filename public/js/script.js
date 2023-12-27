window.onload = function () {
    $('#loading').delay(2000).fadeOut(1000);
};

function alertFade(){
    $(".alert").delay(2000).fadeOut(1000);
}

function scrollTop(){
    window.scroll({
        top: 0,
        left: 0,
        behavior: 'smooth'
    });
}

alertFade();

var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: "true",
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    fade: "true",
    grabCursor: "true",
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
});

$(document).on('click', '.user-page-link', function (event) {
    event.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    var pagination = $("#datatable_length").val();
    var search = $("#datatable_search").val();

    if(search != '') {
        getSearchData(search, pagination, page);
    }
    else {
        getMoreData(page, pagination);
    }

    scrollTop();
});

function getMoreData(page, pagination) {
    var data = 'page=' + page + '&pagination=' + pagination;

    $.ajax({
        type: "GET",
        url: window.location.href,
        data: data,
        success: function (data) {
            $('#datatable').html(data);
        }
    });
}

$("#datatable_length").on('change',function(){
    var pagination = $("#datatable_length").val();

    getPaginationData(pagination);
});

function getPaginationData(pagination) {
    var data = 'pagination=' + pagination

    $.ajax({
        type: "GET",
        url: window.location.href,
        data: data,
        success: function (data) {
            $('#datatable').html(data);
        }
    });
}

$("#datatable_search").on('keyup',function(){
    var search = $("#datatable_search").val();
    var pagination = $("#datatable_length").val();

    getSearchData(search, pagination);
});

function getSearchData(search, pagination){
    var data = 'search=' + search + '&pagination=' + pagination;

    $.ajax({
        type: "GET",
        url: window.location.href,
        data: data,
        success: function (data) {
            $('#datatable').html(data);
        }
    });
}

$(document).on('click', '#search_clear', function () {
    searchClear();
    location.reload();
});

searchClear();

showClear();

function searchClear(){
    $("#datatable_search").val('');
}

function showClear(){
    $("#datatable_length").val(10);

    var path = window.location.pathname;

    if(path.split('/')[3] == 'standards'){
        $("#datatable_length").val(25);
    } else {
        $("#datatable_length").val(5);
    }
}

function redirect(href) {
    var path = window.location.origin;

    window.location.href = path + href;
}

function addToCartApplication(id, AuthCheck){
    if(!AuthCheck){
        $('.warning').css('display','block');
        alertFade();
        setTimeout(redirect("/tm/login"), 2000);
    } else {
        var path = window.location.origin;
        var count = $("#session__count").html();
        var token = '_token=' + $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: path + '/tm/add-to-cart-application/' + id,
            type: 'POST',
            data: token,
            success: function (data) {
                console.log(data);
                if(data == 'tds was added to cart'){
                    count++;
                    $("#session__count").html(count);
                    $('.alert').css('display','none');
                    $('.success').css('display','block');
                    $('#active__' + id).removeClass("fa-plus");
                    $('#active__' + id).addClass("fa-close");
                    $('#active__' + id).addClass("color-gold");
                    console.log($('active__' + id));
                    alertFade();
                } else if(data = 'tds was removed to cart') {
                    count--;
                    $("#session__count").html(count);
                    $('.alert').css('display','none');
                    $('.danger').css('display','block');
                    $('#active__' + id).removeClass("fa-close");
                    $('#active__' + id).addClass("fa-plus");
                    $('#active__' + id).removeClass("color-gold");
                    alertFade();
                }
            },
            error: function(err) {
                console.log(err);
            }
        });
    }
}

function removeFromCartApplication(id){
    var path = window.location.origin;
    var tds__id = '#tds__id__' + id;
    var token = '_token=' + $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        url: path + '/tm/add-to-cart-application/' + id,
        type: 'POST',
        data: token,
        success: function (data) {
            console.log(data);
            if(data = 'tds was removed to cart') {
                $(tds__id).remove();
                $('.danger').css('display','block');
                alertFade();
                console.log(tds__id);
            }
        },
        error: function(err) {
            console.log(err);
        }
    });
}

var close = document.getElementsByClassName("closebtn");

for (var i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}

function checkSendButton(AuthCheck){
    if(!AuthCheck){
        $('.warning').css('display','block');
        alertFade();
    }
}

var dropdown = document.getElementsByClassName("dropdown-btn");

for(var i = 0; i < dropdown.length; i++){
    dropdown[i].addEventListener("click", function() {
        var dropdownContent = this.nextElementSibling;

        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}

function toogleMenu(){
    $('.menu__left').toggleClass('hide');
    $('body').toggleClass('overflow-hidden');
    $('.dropdown-container').css('display', 'none');
}

function inputEnable(){
    $(".input").each(function() {
        $(this).prop('disabled', false);
    });
    $("#role").each(function() {
        $(this).prop('disabled', false);
    });
    $("#div__buttons").removeClass('hide');
}

function inputDisable(){
    $(".input").each(function() {
        if($(this).val()){
            $(this).prop('disabled', true);
        }
    });
    $("#role").each(function() {
        if($(this).val()){
            $(this).prop('disabled', true);
        }
    });
    $("#div__buttons").addClass('hide');
}

function saveData(){
    var path = window.location.origin;
    var token = '_token=' + $('meta[name="csrf-token"]').attr('content');
    var formData = '';

    $(".input").each(function() {
        formData += ( '&' + $(this).attr("name") + '=' + $(this).val() );
    });

    $("#role").each(function() {
        formData += ( '&' + $(this).attr("name") + '=' + $(this).val() );
    });

    formData = token + formData;

    $.ajax({
        url: path + '/tm/profile/edit',
        type: 'POST',
        data: formData,
        success: function(success) {
            console.log(success);
            window.location.reload();
        },
        error: function(error) {
            console.error(error);
        }
    });

    inputDisable();
}

function redirectTo(slug) {
    let location = window.location.pathname;
    let lang = location.slice(0, 3);
    lang += '/';

    window.location.href = window.location.origin + lang + slug;
}

function logout(){
    document.querySelector("#logout__form").submit();
}

function showToast(){
    $('#showToast').css('display', 'block');
}

function closeToast(){
    $('#showToast').css('display', 'none');
}

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function dropDown(id) {
    document.getElementById("myDropdown_" + id).classList.toggle("show");
    document.getElementById("fa_dropdown_" + id).classList.toggle("fa-caret-up");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var icons = document.getElementsByClassName("fa-caret-down");

        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            var upIcon = icons[i];

            if (openDropdown.classList.contains('show') && upIcon.classList.contains('fa-caret-up')) {
                openDropdown.classList.remove('show');
                upIcon.classList.remove("fa-caret-up");
            }

        }
    }
}

// Get the button
let upButton = document.getElementById("upBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    upButton.style.display = "block";
  } else {
    upButton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

function changeBolum(event) {
    var htmlElement = document.getElementsByTagName("html")[0];

    var lang = htmlElement.getAttribute("lang");

    var parent_id = event.target.value;
    var api = '/api/sections';
    var username = 'user@gmail.com';
    var password = 'password';

    $.ajax({  
        url: window.location.origin + api,
        username : username,
        password : password,
        data: { parent_id: parent_id },
        type: 'POST',
        contentType: 'application/x-www-form-urlencoded',
        dataType: "text",
        xhrFields: 
        {
            withCredentials: true
        },
        beforeSend: function (xhr) { 
            xhr.setRequestHeader('Authorization', 'Basic ' + btoa(username + ":" + password));             
        },
        success: function (data) {
            const obj = JSON.parse(data);

            var bolum = $('#bolum');
            $(bolum).empty();
            
            for (var i = 0; i < obj.sections.length; i++) {
                if(lang == 'tm'){
                    $(bolum).append('<option id=' + obj.sections[i].id + ' value=' + obj.sections[i].id + '>' + obj.sections[i].name_tm + '</option>');
                } else if(lang == 'en'){
                    $(bolum).append('<option id=' + obj.sections[i].id + ' value=' + obj.sections[i].id + '>' + obj.sections[i].name_en + '</option>');
                } else if(lang == 'ru'){
                    $(bolum).append('<option id=' + obj.sections[i].id + ' value=' + obj.sections[i].id + '>' + obj.sections[i].name_ru + '</option>');
                }
            }
        }
    });
}

function changeDescription(event) {
    var htmlElement = document.getElementsByTagName("html")[0];

    var lang = htmlElement.getAttribute("lang");

    var id = event.target.value;
    var api = '/api/sections/description';
    var username = 'user@gmail.com';
    var password = 'password';

    $.ajax({  
        url: window.location.origin + api,
        username : username,
        password : password,
        data: { id: id },
        type: 'POST',
        contentType: 'application/x-www-form-urlencoded',
        dataType: "text",
        xhrFields: 
        {
            withCredentials: true
        },
        beforeSend: function (xhr) { 
            xhr.setRequestHeader('Authorization', 'Basic ' + btoa(username + ":" + password));             
        },
        success: function (data) {
            const obj = JSON.parse(data);

            var description = $('#section_description');

            $(description).empty();
            $(description).removeClass("color__red");

            console.log(description);
            
            if(lang == 'tm'){
                $(description).append(obj.sections[0]);
            } else if(lang == 'en'){
                $(description).append(obj.sections[1]);
            } else if(lang == 'ru'){
                $(description).append(obj.sections[2]);
            }
        }
    });
}

function showModal() {
    var modal = document.getElementById("descModal");
    modal.classList.toggle("hide");
}

function copyText() {
    const skypeId = 'live:.cid.f982393315b0bbec';
    // Copy the text inside the text field
    navigator.clipboard.writeText(skypeId);

    // Alert the copied text
    alert("Copied the text: " + skypeId);
}
