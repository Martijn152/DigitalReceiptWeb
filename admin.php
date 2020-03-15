<?php
include "view/docStart.php";
include "view/header.php";
?>
<div style="margin: auto; width: 800px;">
    <h2>The table below shows all users:</h2>

    <button id="create" class="w3-button w3-green">Create a new user</button>
    <br><br>

    <input type="email" id="searchField" placeholder="User E-mail">
    <button id="search" class="w3-button w3-light-grey">Search</button>

    <br><br>

    <table id="table" class="w3-table-all" style="width: fit-content"></table>
</div>

<div id="updateModal" class="modal">
    <div class="modal-content">
        <!--This is a nicer looking way of closing the modal-->
        <!--We need to add some stuff in the js to make this work though-->
        <!--<span class="close">&times;</span>-->
        <h2>Update a user</h2>
        <table>
            <tr>
                <td>
                    User email:
                </td>
                <td>
                    <input type="text" id="updateId">
                </td>
            </tr>
            <tr>
                <td>
                    First name:
                </td>
                <td>
                    <input type="text" id="updateFirstname">
                </td>
            </tr>
            <tr>
                <td>
                    Last name:
                </td>
                <td>
                    <input type="text" id="updateLastname">
                </td>
            </tr>
            <tr>
                <td>
                    Date of birth:
                </td>
                <td>
                    <input type="text" id="updateDateofbirth">
                </td>
            </tr>
            <tr>
                <td>
                    Password:
                </td>
                <td>
                    <input type="text" id="updatePassword">
                </td>
            </tr>
        </table>
        <br>
        <button id="updateConfirm" class="w3-button w3-blue">Confirm</button>
        <button id="updateCancel" class="w3-button w3-grey">Cancel</button>
    </div>
</div>

<div id="createModal" class="modal">
    <div class="modal-content">
        <h2>Create a new user</h2>
        <table>
            <tr>
                <td>
                    User email:
                </td>
                <td>
                    <input type="text" id="createId">
                </td>
            </tr>
            <tr>
                <td>
                    First name:
                </td>
                <td>
                    <input type="text" id="createFirstname">
                </td>
            </tr>
            <tr>
                <td>
                    Last name:
                </td>
                <td>
                    <input type="text" id="createLastname">
                </td>
            </tr>
            <tr>
                <td>
                    Date of birth:
                </td>
                <td>
                    <input type="text" id="createDateofbirth">
                </td>
            </tr>
            <tr>
                <td>
                    Date of birth:
                </td>
                <td>
                    <input type="text" id="createPassword">
                </td>
            </tr>
        </table>
        <br>
        <button id="createConfirm" class="w3-button w3-green">Confirm</button>
        <button id="createCancel" class="w3-button w3-grey">Cancel</button>
    </div>
</div>

<div id="deleteModal" class="modal">
    <div class="modal-content">
        <!--This is a nicer looking way of closing the modal-->
        <!--We need to add some stuff in the js to make this work though-->
        <!--<span class="close">&times;</span>-->
        <h2>Delete this user</h2>
        <table>
            <tr>
                <td>
                    User email:
                </td>
                <td>
                    <p id="deleteId"></p>
                </td>
            </tr>
            <tr>
                <td>
                    First name:
                </td>
                <td>
                    <p id="deleteFirstname"></p>
                </td>
            </tr>
            <tr>
                <td>
                    Last name:
                </td>
                <td>
                    <p id="deleteLastname"></p>
                </td>
            </tr>
            <tr>
                <td>
                    Date of birth:
                </td>
                <td>
                    <p id="deleteDateofbirth"></p>
                </td>
            </tr>
        </table>
        <br>
        <button id="deleteConfirm" class="w3-button w3-red">Confirm</button>
        <button id="deleteCancel" class="w3-button w3-grey">Cancel</button>
    </div>
</div>


<?php
include "view/footer.php";
include "view/docEnd.php";
?>

<script type="text/javascript" src="js/admin.js"></script>

