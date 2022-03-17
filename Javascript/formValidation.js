const formListener = (formName) =>{
    form = document.getElementById(formName);
    form.addEventListener('submit', (event) => {
        event.preventDefault();
        validate();
    })
}
var form;
const name = document.getElementById('booking-name');
const email = document.getElementById('booking-email');
const phone = document.getElementById('booking-phone');
const date = document.getElementById('booking-date');


const isEmail = (insertedEmail) => {
    var atSymbol = insertedEmail.indexOf("@");
    if (atSymbol < 1) return false;
    var dot = insertedEmail.lastIndexOf(".");
    if (dot <= atSymbol + 2) return false;
    if (dot === insertedEmail.length - 1) return false;
    return true;
}

const setErrorMsg = (input, errormsgs) => {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = "form-control data-error";
    small.innerText = errormsgs;
}

const setSuccessMsg = (input) => {
    const formControl = input.parentElement;
    formControl.className = "form-control data-success";
}

const sendData = (sRate, count, insertedName) => {
    if (sRate === count) {
        const formData = new FormData(form);
        console.log(formData);
        fetch(`assets/${form.getAttribute("id")}.php`,{
            method:"POST",
            body:formData
        }).then(res=>{
            if(form.getAttribute("id")==="booking"){
                if(res.status==200){
                    swal("Confirmed!", "Your demo class has been booked " + insertedName + " !!!", "success");
                    
                }else{
                    swal( "Oops" , "Your demo class has not been booked " + insertedName + " !!!", "error");
    
                }
            }else{
                if(res.status==200){
                    swal("Confirmed!", "Your quotation request has been recieved " + insertedName + " !!!", "success");
                }else{
                    swal("Oops" , "Some issue at our end...please try again later " + insertedName + " !!!", "error");
                }
            }
        });
    }
}

const successMsg = (insertedName) => {
    let formcon = document.getElementsByClassName('form-control');
    var count = formcon.length -2;
    for (var i = 0; i < formcon.length; i++) {
        if (formcon[i].className === "form-control data-success") {
            var sRate = 0 + i;
            sendData(sRate, count, insertedName);
            console.log("success rate " + sRate);
        } 
        else {
            return false;
        }
    }
}



const validate = () => {
    const insertedName = name.value.trim();
    const insertedEmail = email.value.trim();
    const insertedPhone = phone.value.trim();
    try {
        const insertedDate = date.value.trim();
    } catch (error) {
        
    }

    //validating name
    if (insertedName === "") {
        setErrorMsg(name, 'Name can not be blank');
    } else if (insertedName.length <= 2) {
        setErrorMsg(name, 'Name can not be of less than 3 characters');
    } else {
        setSuccessMsg(name);
    }

    //validating email
    if (insertedEmail === "") {
        setErrorMsg(email, 'Email can not be blank');
    } else if (!isEmail(insertedEmail)) {
        setErrorMsg(email, 'Not a valid email');
    } else {
        setSuccessMsg(email);
    }

    //validating phone
    if (insertedPhone === "") {
        setErrorMsg(phone, 'Phone number can not be blank');
    } else if (insertedPhone.length != 10) {
        setErrorMsg(phone, 'Not a valid phone number');
    } else {
        setSuccessMsg(phone);
    }
    successMsg(insertedName);
}


// Date validation 
const dateValidation = () =>{
    var todayDate = new Date();
    var minDay = todayDate.getDate();
    var minMonth = todayDate.getMonth();
    var minYear = todayDate.getUTCFullYear();
    var maxDay;
    var maxMonth;
    var maxYear;
    
    if(minDay<10){
        minDay = "0" + minDay;
    }
    minMonth = minMonth+1;
    if(minMonth<10){
        minMonth = "0" +minMonth;
    }
    minDate = minYear+"-"+minMonth+"-"+minDay;
    
    date.setAttribute("min",minDate);
    console.log(minDate);
    
    //for maxdate setting within one week
    todayDate.setDate(todayDate.getDate()+14);
    maxDay = todayDate.getDate();
    maxMonth = todayDate.getMonth();
    maxYear = todayDate.getUTCFullYear();
    if(maxDay<10){
        maxDay = "0" + maxDay;
    }
    maxMonth = maxMonth+1;
    if(maxMonth<10){
        maxMonth = "0" + maxMonth;
    }
    var maxDate = maxYear+"-"+maxMonth+"-"+maxDay;
    date.setAttribute("max",maxDate);
    console.log(maxDate);
}


dateValidation();


