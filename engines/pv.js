function phoneNumberValidation() {
    var telephone = document.forms['appointmentForm']['telephone'];
    var phone = new String(telephone.value);
    var input = /^\d{3}-\d{3}-\d{4}/;
    if(phone.length == 3 ) telephone.value = telephone.value + "-";
    if(phone.length == 7 ) telephone.value = telephone.value + "-";
    if(phone.length == 12 && phone.search(input) == -1) telephone.value = "Only numbers please.";
}
function emailValidation() {
    var email = document.forms['appointmentForm']['email'];
    var stringEmail = new String(email.value);
    var input = /^[a-zA-Z]+[a-zA-Z0-9_-]*@[a-zA-Z0-9_-]+\.[a-zA-Z0-9_-]{1,10}\b/;
    if(stringEmail.search(input) == -1) email.value = "Not an email value";
}
function dateValidation() {
    var date = document.forms['appointmentForm']['date'];
    var stringDate = new String(date.value);
    var input = /(^0[1-9]\/|1[0-2]\/)(0[1-9]\/|1[0-9]\/|2[0-9]\/|3[0-1]\/)(20[1-9][3-9])\b/;
    if(stringDate.search(input) == -1) date.value = "Not a date value";
}
function addSlashToDate() {
    var date = document.forms['appointmentForm']['date'];
    var stringDate = new String(date.value);
    if(stringDate.length == 2 ) date.value = date.value + "/";
    if(stringDate.length == 5 ) date.value = date.value + "/";
}
function signOnFormValidation()
{
	var name = document.forms['appointmentForm']['fname'].value;
        var lname = document.forms['appointmentForm']['lname'].value;
        var telephone = document.forms['appointmentForm']['telephone'].value;
	var email = document.forms['appointmentForm']['email'].value;
	var date = document.forms['appointmentForm']['date'].value;
        var message = document.forms['appointmentForm']['message'].value;
        if(!name || !email || !lname || !telephone 
                || !date || date.search(/(^0[1-9]\/|1[0-2]\/)(0[1-9]\/|1[0-9]\/|2[0-9]\/|3[0-1]\/)(19[1-9][0-9]|20[0-9][0-9])\b/) == -1)
		{
			document.getElementById("message").innerHTML = "**No empty fields please";
			return false;

		}
	else
	 return true;
}
function doctorSchedule(doctor) {
var mend = "\Dr. Mendoza's schedule \n\n\
MONDAYS         2:00pm to 6:00pm\n\
TUESDAY           8:00AM to 1:00pm\n\
WEDNESDAY       ------OFF----\n\
THURSDAY        1:00pm to 5:00pm\n\
FRIDAY                  ------OFF----\n\
SATURDAY        8:00am to 1:00pm";
var gunz = "Dr. Gunzburg\n\n\
SATURDAY 9:00am to 2:00pm\n\n\n\
Only patients ages 6 years old and up!";
    if(doctor === "mendoza") alert(mend);
    if(doctor === "gunzburg") alert(gunz);
   // alert(doctor);
}


