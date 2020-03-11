(function () {

    firebase.auth().onAuthStateChanged(function (user) {
        if (user) {

            var storage = firebase.storage();

            const table = document.getElementById('table');
            table.innerHTML = '';
            const url = 'api.php?table=r&userid=' + user.email;

            fetch(url)
                .then((data) => data.json())
                .then(function (data) {

                    //Prepping the data for use
                    data = JSON.stringify(data);
                    data = JSON.parse(data);

                    //Creating the column names
                    var keys = ["Receipt","Download link"];
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


                        var gsReference = storage.refFromURL(element['url']);

                        var receiptName = element['url'];
                        receiptName = receiptName.split('/');
                        receiptName = receiptName[4].split('.');

                        var cell1 = row.insertCell();
                        cell1.append(document.createTextNode(receiptName[0]));


                        var downloadButton = document.createElement('a');


                        gsReference.getDownloadURL().then(function(url) {
                            downloadButton.id = 'download' + element.email;
                            downloadButton.href = url;
                            downloadButton.appendChild(document.createTextNode("Dowload"));
                        }).catch(function(error) {
                            console.log(error);
                        });



                        var cell = row.insertCell();
                        cell.append(downloadButton);
                    });


                })
                .catch(function (error) {
                    console.log(error);
                });

        } else {
            window.location.replace("login.php");
        }
    });


}());


