<div class="container container-block table-data-container">
    <div class="col-md-8 main-information-table-wrapper">
        <table border="1" class="main-table-info" id="main-table-info">
            <?php
            // TODO: this is for some reason null even though it is included -> var_dump($event_manager);
            if(isset($GLOBALS['event_manager']) && !empty($GLOBALS['event_manager'])) {
                $GLOBALS['event_manager']->renderSessionListAndOptions();
            }
            ?>
        </table>
    </div>
    <hr class="col-md-8">
    <div class="col-md-8 data-controls">
        <button onclick="replaceData('../templates/forms/sessionForms/addSessionForm.php', 'dynamic-form')">Add Session</button>
        <button onclick="replaceData('../templates/forms/sessionForms/editSessionForm.php', 'dynamic-form')">Edit Session</button>
        <button onclick="replaceData('../templates/forms/sessionForms/deleteSessionForm.php', 'dynamic-form')">Delete Session</button>
    </div>
    <div class="col-md-8 dynamic-form">
        <form action="" method="post">
            <label class="label-inline">Session Name: </label><input type="text" name="addSessionName" required><br />
            <label class="label-inline">Max Capacity: </label><input type="text" name="addSessionCapacity" pattern="^(\(?\+?[0-9]*\)?)?[0-9_\- \(\)]*$" required><br />
            <label class="label-inline">Associated Event: </label><input type="text" name="addAssocEvent" pattern="^(\(?\+?[0-9]*\)?)?[0-9_\- \(\)]*$" required><br />
            <label class="label-inline">Start Date: </label><input type="text" name="addSessionStartDate" placeholder="1999-01-01 21:30:00" pattern="^\d\d\d\d-(0?[1-9]|1[0-2])-(0?[1-9]|[12][0-9]|3[01]) (00|[0-9]|1[0-9]|2[0-3]):([0-9]|[0-5][0-9]):([0-9]|[0-5][0-9])$" required><br />
            <label class="label-inline">End Date: </label><input type="text" name="addSessionEndDate" placeholder="1999-01-01 21:30:00" pattern="^\d\d\d\d-(0?[1-9]|1[0-2])-(0?[1-9]|[12][0-9]|3[01]) (00|[0-9]|1[0-9]|2[0-3]):([0-9]|[0-5][0-9]):([0-9]|[0-5][0-9])$" required><br />
            <input type="submit" name="addSession" value="Add">
        </form>
    </div>
</div>
<div class="col-md-12 info-display-controls">
    <button onclick="replaceData('../templates/tables/eventTable.php', 'table-data-container')">View Events</button>
    <button onclick="replaceData('../templates/tables/sessionTable.php', 'table-data-container')">View Sessions</button>
    <button onclick="replaceData('../templates/tables/attendeeTable.php', 'table-data-container')">View Attendees</button>
</div>