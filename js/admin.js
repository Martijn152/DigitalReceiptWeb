(function () {

    const updateModal = document.getElementById("updateModal");
    const createModal = document.getElementById("createModal");
    const deleteModal = document.getElementById("deleteModal");
    const createButton = document.getElementById("create");
    const table = document.getElementById('table');
    table.innerHTML = '';
    //probably add a search here
    const searchButton = document.getElementById("search");
    const searchField = document.getElementById("searchField");

    var url = 'api.php?table=u';

    searchButton.onclick = function () {
        table.innerHTML = '';
        if (searchField.value !== "") {
            url = 'api.php?table=u';
            read(url + '&userid=' + searchField.value);
        } else {
            var row = table.insertRow();
            var cell = row.insertCell();
            cell.append(document.createTextNode("Please enter a user email"));
        }
    };

    createButton.onclick = function () {
        createModal.style.display = "block";
        var createConfirm = document.getElementById("createConfirm");
        const createCancel = document.getElementById("createCancel");
        createCancel.onclick = function () {
            createModal.style.display = "none";
        };
        createConfirm.onclick = function () {
            console.log("Clicked create button.");
            create(idField.value, firstnameField.value, lastnameField.value, dateofbirthField.value, passwordField.value);
        };
        var idField = document.getElementById("createId");
        var firstnameField = document.getElementById("createFirstname");
        var lastnameField = document.getElementById("createLastname");
        var dateofbirthField = document.getElementById("createDateofbirth");
        var passwordField = document.getElementById("createPassword");
    };

    read(url);

}());

function read(url) {
    fetch(url)
        .then((data) => data.json())
        .then(function (data) {

            //Prepping the data for use
            data = JSON.stringify(data);
            data = JSON.parse(data);

            console.log(data);
            if (data.length !== 0) {
                //Creating the column names
                var keys = ["First Name","Last Name", "Date of Birth","E-mail Address"];
                keys.push("");
                keys.push("");
                var thead = table.createTHead();
                var headRow = thead.insertRow();
                keys.forEach(function (key) {
                    var th = document.createElement("th");
                    var text = document.createTextNode(key);
                    th.appendChild(text);
                    headRow.appendChild(th);
                });

                //Logging length of the data set
                console.log("Columns in table: " + data.length);

                //Add new row for each school
                data.forEach(function (element) {
                    var row = table.insertRow();

                    //Get keys to be able to iterate through the elements for the row
                    var elementKeys = Object.keys(element);

                    //Add new cell for each element in the row
                    elementKeys.forEach(function (elementCell) {
                        var cell = row.insertCell();
                        cell.append(document.createTextNode(element[elementCell]));
                    });

                    var updateButton = document.createElement('button');
                    updateButton.id = 'update' + element.email;
                    updateButton.appendChild(document.createTextNode("Update"));
                    updateButton.setAttribute("class","w3-button w3-blue");

                    updateButton.onclick = function () {
                        updateModal.style.display = "block";
                        var updateConfirm = document.getElementById("updateConfirm");
                        const updateCancel = document.getElementById("updateCancel");
                        updateCancel.onclick = function () {
                            updateModal.style.display = "none";
                        };
                        updateConfirm.onclick = function () {
                            update(element.id, idField.value, firstnameField.value, lastnameField.value, dateofbirthField.value);
                        };
                        var idField = document.getElementById("updateId");
                        var firstnameField = document.getElementById("updateFirstname");
                        var lastnameField = document.getElementById("updateLastname");
                        var dateofbirthField = document.getElementById("updateDateofbirth");
                        var passwordField = document.getElementById("updateDateofbirth");
                        idField.value = element['id'];
                        firstnameField.value = element['firstname'];
                        lastnameField.value = element['lastname'];
                        dateofbirthField.value = element['dateofbirth'];
                        passwordField.value = element['dateofbirth'];

                    };
                    var cell = row.insertCell();
                    cell.append(updateButton);

                    var deleteButton = document.createElement('button');
                    deleteButton.id = 'delete' + element.email;
                    deleteButton.appendChild(document.createTextNode("Delete"));
                    deleteButton.setAttribute("class","w3-button w3-red");

                    //.........................................................................................
                    deleteButton.onclick = function () {
                        deleteModal.style.display = "block";
                        var deleteConfirm = document.getElementById("deleteConfirm");
                        const deleteCancel = document.getElementById("deleteCancel");
                        deleteCancel.onclick = function () {
                            deleteModal.style.display = "none";
                        };
                        deleteConfirm.onclick = function () {
                            deleteUser(element['id']);
                        };
                        var idField = document.getElementById("deleteId");
                        var firstnameField = document.getElementById("deleteFirstname");
                        var lastnameField = document.getElementById("deleteLastname");
                        var dateofbirthField = document.getElementById("deleteDateofbirth");
                        idField.innerHTML = element['id'];
                        firstnameField.innerHTML = element['firstname'];
                        lastnameField.innerHTML = element['lastname'];
                        dateofbirthField.innerHTML = element['dateofbirth'];

                    };
                    var cell2 = row.insertCell();
                    cell2.append(deleteButton);

                });
            } else {
                var row = table.insertRow();
                var cell = row.insertCell();
                cell.append(document.createTextNode("No users were found."));
            }


        })
        .catch(function (error) {
            console.log(error);
        });
}

function update(oldid, id, firstname, lastname, dateofbirth, password) {
    var request = new XMLHttpRequest();
    var url = "api.php?action=u&id=" + id + "&firstname=" + firstname + "&lastname=" + lastname + "&dateofbirth=" + dateofbirth + "&password=" + password;
    //http://localhost/api.php?action=c&id=freddie@mercury.com&firstname=Freddie&lastname=Mercury&dateofbirth=1940&password=freddiemercury
    request.open("GET", url);
    request.send();

    request.onreadystatechange = (e) => {
        console.log(request.responseText);
        window.location.reload();
    };

    console.log("Sent http request.");
}

function create(id, firstname, lastname, dateofbirth, password) {
    var request = new XMLHttpRequest();
    var url = "api.php?action=c&id=" + id + "&firstname=" + firstname + "&lastname=" + lastname + "&dateofbirth=" + dateofbirth + "&password=" + password;
    //http://localhost/api.php?action=c&id=freddie@mercury.com&firstname=Freddie&lastname=Mercury&dateofbirth=1940&password=freddiemercury
    request.open("GET", url);
    request.send();

    request.onreadystatechange = (e) => {
        console.log(request.responseText);
        window.location.reload();

    };

    console.log("Sent http request.");
}

function deleteUser(id) {
    //update the db here
    var request = new XMLHttpRequest();
    var url = "api.php?action=d&id=" + id;
    request.open("GET", url);
    request.send();

    request.onreadystatechange = (e) => {
        console.log(request.responseText);
        window.location.reload();
    };

    console.log("Sent http request.");
}


