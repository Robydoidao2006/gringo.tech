
        window.fbAsyncInit = function() {
            // FB JavaScript SDK configuration and setup
            FB.init({
              appId      : '634270343613744', // FB App ID
              cookie     : true,  // enable cookies to allow the server to access the session
              xfbml      : true,  // parse social plugins on this page
              version    : 'v3.0' // use graph api version 2.8
            });
            
            // Check whether the user already logged in
            FB.getLoginStatus(function(response) {
                if (response.status === 'connected') {
                    //display user data
                    getFbUserData();
                }
            });
        };
        
        // Load the JavaScript SDK asynchronously
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        
        // Facebook login with JavaScript SDK
        function fbLogin() {
            FB.login(function (response) {
                if (response.authResponse) {
                    // Get and display the user profile data
                    getFbUserData();
                } else {
                    document.getElementById('status').innerHTML = 'User not authorized.';
                }
            }, {scope: 'email'});
        }
        
        // Fetch the user profile data from facebook
        function getFbUserData(){
            FB.api('/me', {locale: 'en_US', fields: 'first_name, last_name, picture'},
            function (response) {
                document.getElementById('fbLink').setAttribute("onclick", "fbLogout()");
                document.getElementById('fbLink').innerHTML = 'Facebook Logout';
                document.getElementById('fbUserName').innerHTML = ''+response.first_name+' '+response.last_name+'';
                document.getElementById('fbUserPhoto').innerHTML = '<img src="'+response.picture.data.url+'"/>';

                //save data
                saveUserData(response);
            });
        }

        // Save user data to the database
        function saveUserData(userData){
            $.post('../db/conection.php', {oauth_provider: 'facebook', userData: JSON.stringify(userData)}, function(data){ return true; });
            //$.post('../db/userData.php', {oauth_provider: 'facebook', userData: JSON.stringify(userData)}, function(data){ return true; });
            //second one original
        }

        // Logout from facebook
        function fbLogout() {
            FB.logout(function() {
                document.getElementById('fbLink').setAttribute("onclick","fbLogin()");
                document.getElementById('fbLink').innerHTML = "Facebook Login";
                document.getElementById('fbUserName').innerHTML = 'Meu Profile';
                document.getElementById('fbUserPhoto').innerHTML = '<img src="../../images/logo/profile.png"/>';
                // document.getElementById('fbUserPhoto').innerHTML = '';
            });
        }
