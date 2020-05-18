( function(){

    // Navbar functions
    function goBaseUrl() {
        var pathArray = window.location.pathname.split('/');
        console.log("pathArray[1]", pathArray[1]);
        var baseUrl = location.origin + '/' + pathArray[1].trim('/') + '/';
        console.log("baseUrl:", baseUrl);
        return baseUrl;
    }

    function goRegistration() {
        var pathArray = window.location.pathname.split('/');
        console.log("pathArray[1]", pathArray[1]);
        var registrationUrl = goBaseUrl() + 'templates/mymate/html/Registration_signin.html';
        console.log("registrationrUrl:", registrationUrl);
        location.replace(registrationUrl);
    }

    function goMemebers() {
        var pathArray = window.location.pathname.split('/');
        console.log("pathArray[1]", pathArray[1]);
        var memeberUrl = goBaseUrl() + 'templates/mymate/html/Members.html';
        console.log("memeberUrl:", memeberUrl);
        location.replace(memeberUrl);
    }

    function goInformation() {
        var pathArray = window.location.pathname.split('/');
        console.log("pathArray[1]", pathArray[1]);
        var infoUrl = goBaseUrl() + 'templates/mymate/html/Surgery-Information.html';
        console.log("infoUrl:", infoUrl);
        location.replace(infoUrl);
    }

    function goHome() {
        var pathArray = window.location.pathname.split('/');
        console.log("pathArray[0]", pathArray[1]);
        var myurl = goBaseUrl() + 'index.php';
        console.log("myurl:", myurl);
        location.replace(myurl);
    }

    $('#membership_header').load("navbar.html");
    $('#membership_footer').load("footer.html");
})()