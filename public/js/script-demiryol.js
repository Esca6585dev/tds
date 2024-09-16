function openMenu(id){
    if(id == 1){
        var menu1 = document.getElementById('menu1');
        var arrow1 = document.getElementById('arrow1');

        var menu2 = document.getElementById('menu2');
    
        menu1.classList.toggle("hide");
        arrow1.classList.toggle("rotate");

        if(!menu2.classList.contains("hide")){
            menu2.classList.toggle("hide")
        }

    } else if(id == 2){
        var menu2 = document.getElementById('menu2');
        var arrow2 = document.getElementById('arrow2');

        var menu1 = document.getElementById('menu1');
    
        menu2.classList.toggle("hide");
        arrow2.classList.toggle("rotate");
    
        if(!menu1.classList.contains("hide")){
            menu1.classList.toggle("hide")
        }
    }
}

function addNumber(id){
    var computerScore = document.getElementById('number' + id);
    var number = computerScore.innerHTML;
    var minus = document.getElementById('minus' + id);
    var menu2name = document.getElementById('menu2name');
    var passenger = document.getElementById('passenger');

    var currentNumber = parseFloat(menu2name.innerHTML);

    minus.classList.remove("circle__btn__default");

    if(number < 9) {
        number++;
        currentNumber++;
    }
    
    menu2name.innerHTML = passenger.value = parseFloat(currentNumber);
    computerScore.innerHTML = number;
}

function removeNumber(id){
    var computerScore = document.getElementById('number' + id);
    var number = computerScore.innerHTML;
    var menu2name = document.getElementById('menu2name');
    var passenger = document.getElementById('passenger');

    var currentNumber = parseFloat(menu2name.innerHTML);
    
    if(number >= 1){
        number--;
        currentNumber--;
    } else {
        var minus = document.getElementById('minus' + id);
        minus.classList.add("circle__btn__default");
    }

    menu2name.innerHTML = passenger.value = parseFloat(currentNumber);
    computerScore.innerHTML = number;
}

function rotateButton(){
    var nameFrom = document.getElementById('nameFrom');
    var nameTo = document.getElementById('nameTo');

    var routeFrom = document.getElementById('routeFrom');
    var routeTo = document.getElementById('routeTo');

    var rotateButton = document.getElementById('rotateButton');

    rotateButton.classList.toggle("toggle-up");

    nirden = nameFrom.innerHTML;
    nira = nameTo.innerHTML;

    if(nirden != 'Nirden' || nira != 'Nirä'){
        var temp = nirden;
        nirden = nira;
        nira = temp;
    }

    nameFrom.innerHTML = routeFrom.value = nirden;
    nameTo.innerHTML = routeTo.value = nira;
}

function prevDay(day, id){
    var today = document.getElementById('today' + id);
    var date = document.getElementById('date' + id);
    var dateSelect = document.getElementById('dateSelect' + id);

    var number = today.innerHTML;

    if(number > day){
        number--

        today.innerHTML = number;
    }

    // Get the current date
    var today = new Date();

    // Get the month (adding 1 because months are zero-based)
    var mm = today.getMonth() + 1;

    // Get the year
    var yyyy = today.getFullYear();

    // Add leading zero if the month is less than 10
    if (mm < 10) {
        mm = '0' + mm;
    } 

    // Format the date as yyyy-mm and log it
    today = yyyy + '-' + mm + '-' + number;
    
    date.value = today;
    dateSelect.value = today;
}

function nextDay(day, id){
    var today = document.getElementById('today' + id);
    var date = document.getElementById('date' + id);
    var dateSelect = document.getElementById('dateSelect' + id);

    var number = today.innerHTML;

    if(number < day){
        number++

        today.innerHTML = number;
    }
    
    // Get the current date
    var today = new Date();

    // Get the month (adding 1 because months are zero-based)
    var mm = today.getMonth() + 1;

    // Get the year
    var yyyy = today.getFullYear();

    // Add leading zero if the month is less than 10
    if (mm < 10) {
        mm = '0' + mm;
    } 

    // Format the date as yyyy-mm and log it
    today = yyyy + '-' + mm + '-' + number;
    
    date.value = today;
    dateSelect.value = today;
}

function openCountrySelect(id){
    if(id == 'To'){
        var countrySelectTo = document.getElementById('countrySelectTo');
        var countrySelectFrom = document.getElementById('countrySelectFrom');
    
        countrySelectTo.classList.toggle("hide");

        if(!countrySelectFrom.classList.contains("hide")){
            countrySelectFrom.classList.toggle("hide")
        }

    } else if(id == 'From'){
        var countrySelectFrom = document.getElementById('countrySelectFrom');
        var countrySelectTo = document.getElementById('countrySelectTo');
    
        countrySelectFrom.classList.toggle("hide");

        if(!countrySelectTo.classList.contains("hide")){
            countrySelectTo.classList.toggle("hide")
        }
    }
}

function selectTravel(name){
    var menu1 = document.getElementById('menu1');
    var menu1name = document.getElementById('menu1name');
    var travel = document.getElementById('travel');
    var calendarBT = document.getElementById('calendarBT');
    var calendarGG = document.getElementById('calendarGG');

    menu1name.innerHTML = name;
    travel.value = name;

    menu1.classList.toggle("hide");

    calendarBT.classList.toggle("hide");
    calendarGG.classList.toggle("hide");
}

function selectRoute(id){
    var routeName = document.getElementById('name' + id);
    var selectFrom = document.getElementById('select' + id);
    var countrySelectFrom = document.getElementById('countrySelect' + id);
    var routeInput = document.getElementById('route' + id);
    var searchBtn = document.getElementById('searchBtn');
    
    routeName.innerHTML = selectFrom.value;
    routeInput.value = selectFrom.value;

    countrySelectFrom.classList.toggle("hide");
    
    if(id == 'To'){
        searchBtn.classList.add("active");
        searchBtn.classList.remove("disable");
    }
}

function saveData() {
    var menu2 = document.getElementById('menu2');
    
    menu2.classList.toggle("hide");
}

function openCalendar(id) {
    var dateSelectFrom = document.getElementById('dateSelectFrom' + id);

    dateSelectFrom.classList.toggle("hide");
}

function selectDate(id){
    var date = document.getElementById('date' + id);
    var dateSelect = document.getElementById('dateSelect' + id);
    var dateSelectFrom = document.getElementById('dateSelectFrom' + id);
    var today = document.getElementById('today' + id);

    date.value = dateSelect.value;
    dateSelectFrom.classList.toggle("hide");

    var member = date.value;

    var last2 = member.slice(-2);

    today.innerHTML = last2;
}

function openDetail(id){
    var tripJourney = document.getElementById('tripJourney' + id);
    var faChevronDownIcon = document.getElementById('faChevronDownIcon' + id);

    tripJourney.classList.toggle("hide");
    faChevronDownIcon.classList.toggle("fa-chevron-up");
    faChevronDownIcon.classList.toggle("fa-chevron-down");
}

function openDetailPrice(id){
    var tripJourney = document.getElementById('tripJourney' + id);
    var faChevronRightIcon = document.getElementById('faChevronRightIcon' + id);

    tripJourney.classList.toggle("hide");
    faChevronRightIcon.classList.toggle("fa-chevron-right");
    faChevronRightIcon.classList.toggle("fa-chevron-down");
}

function selectSeat(id){
    for (let i = 1; i <= 48; i++) {
        var seatNo = document.getElementById('seatNo' + i);
        seatNo.classList.remove("wagon__seat__active");
    }

    var seatNo = document.getElementById('seatNo' + id);
    var seatNumber = document.getElementById('seatNumber');
    
    seatNo.classList.toggle("wagon__seat__active");

    seatNumber.value = id;
}

function submitFrom(){
    var seatNumber = document.getElementById('seatNumber');

    if(seatNumber.value){
        document.getElementById("form").submit();
    } else {
        alert('Ýer Saýlaň!');
    }   
}

function enableCamera(){
    let video = document.querySelector("#videoElement");

    if(navigator.mediaDevices.getUserMedia) {
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(function (stream) {
                video.srcObject = stream;
            })
            .catch(function (error) {
                console.log("Something went wrong!");
            })
    } else {
        console.log("getUserMedia not supported!");
    }
}
