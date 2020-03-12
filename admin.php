<?php
include "view/docStart.php";
include "view/header.php";
?>

<h2>The table below shows all users:</h2>

<button id="create">Create a new user</button>
<br><br>

<input type="email" id="searchField" placeholder="User email">
<button id="search">Search</button>

<br><br>

<table id="table">
</table>


<div id="updateModal" class="modal">
    <div class="modal-content">
        <!--This is a nicer looking way of closing the modal-->
        <!--We need to add some stuff in the js to make this work though-->
        <!--<span class="close">&times;</span>-->
        <h2>Please enter the update to this user and click 'Confirm'.</h2>
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
        <button id="updateConfirm">Confirm</button>
        <button id="updateCancel">Cancel</button>
    </div>
</div>

<div id="createModal" class="modal">
    <div class="modal-content">
        <h2>Please enter the information of the new user and click 'Confirm'.</h2>
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
        <button id="createConfirm">Confirm</button>
        <button id="createCancel">Cancel</button>
    </div>
</div>

<div id="deleteModal" class="modal">
    <div class="modal-content">
        <!--This is a nicer looking way of closing the modal-->
        <!--We need to add some stuff in the js to make this work though-->
        <!--<span class="close">&times;</span>-->
        <h2>Are you sure you want to delete this user?</h2>
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
        <button id="deleteConfirm">Confirm</button>
        <button id="deleteCancel">Cancel</button>
    </div>
</div>


<?php
include "view/footer.php";
include "view/docEnd.php";
?>

<script type="text/javascript" src="js/admin.js"></script>

