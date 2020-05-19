$(document).ready(function () {
    $('#membership_header').load("navbar.html");
    $('#membership_footer').load("footer.html");
});

// Navbar functions
function goBaseUrl() {
    var pathArray = window.location.pathname.split('/');
    console.log("pathArray[1]", pathArray[1]);
    var baseUrl = location.origin + '/' + pathArray[1].trim('/') + '/';
    console.log("baseUrl:", baseUrl);
    return baseUrl;
}

function goRegistration() {
    var registrationUrl = goBaseUrl() + 'templates/mymate/html/Registration_signin.html';
    console.log("registrationrUrl:", registrationUrl);
    location.replace(registrationUrl);
}

function goMembers() {
    var memberUrl = goBaseUrl() + 'templates/mymate/html/Members.html';
    console.log("memberUrl:", memberUrl);
    location.replace(memberUrl);
}

function goInformation() {
    var infoUrl = goBaseUrl() + 'templates/mymate/html/Surgery-Information.html';
    console.log("infoUrl:", infoUrl);
    location.replace(infoUrl);
}

function goHome() {
    var myurl = goBaseUrl() + 'index.php';
    console.log("myurl:", myurl);
    location.replace(myurl);
}

function goAppendectomy() {
    var appendectomyUrl = goBaseUrl() + 'templates/mymate/html/appendectomy_home.html';
    console.log("appendectomyUrl:", appendectomyUrl);
    location.replace(appendectomyUrl);
}
