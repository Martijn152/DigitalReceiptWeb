var firebase;

(function () {
// Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyAyQTk-KLeCKxL2CdYjMzEF1mcejNKJAGg",
        authDomain: "digital-receipt-a6570.firebaseapp.com",
        databaseURL: "https://digital-receipt-a6570.firebaseio.com",
        projectId: "digital-receipt-a6570",
        storageBucket: "digital-receipt-a6570.appspot.com",
        messagingSenderId: "189154652567",
        appId: "1:189154652567:web:554200dcad1b8885e454d2"
    };


// Initializing Firebase
    firebase.initializeApp(firebaseConfig);


//Method that checks if a user is logged in and changes the nav bar if that is the case
//Also redirects the user if they are on a page that is not for them
    firebase.auth().onAuthStateChanged(function (user) {
        if (user) {
            var linksToAdd = ["Receipts"];

            //ADMIN CHECK
            if(user.email === "user@user.com") {
                //this user is an admin
                //hardcoded might not be the best idea lol
                //add another link
                linksToAdd.push("API");
                linksToAdd.push("Admin");
            }else{
                //this user is not an admin
                //get them off pages that are not for them
                if (window.location.pathname === "/api.php" || window.location.pathname === "/admin.php") {
                    window.location.replace("");
                }
            }

            linksToAdd.forEach(function (text) {
                var link = document.createElement("a");
                link.setAttribute("href", text + ".php");
                link.setAttribute("class", "w3-button");
                var linkText = document.createTextNode(text);
                link.appendChild(linkText);

                var nav = document.getElementById("nav");
                nav.appendChild(link);
            });


        } else if (window.location.pathname === "/receipts.php") {
            window.location.replace("login.php");
        }
    });


    var logoutButton = document.getElementById("logout");
    logoutButton.addEventListener('click', function () {
        firebase.auth().signOut().then(function () {
            window.location.replace("login.php");
        }).catch(function (error) {
            console.log(error);
        });
    })
}());