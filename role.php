<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role page</title>
    <link rel="stylesheet" href="rom.css">
</head>
<body>
<!--<div class="vessel">
 <button class="button">Add New Role</button>
</div>-->
<h1 id="role-heading">Role</h1>

    <button id="add-role-btn">Add New Role</button>

    <div id="entry-info">
        <p>Number of entries: <span id="entry-count">0</span></p>
        <button id="search-btn">Search</button>
    </div>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Dynamic table entries will be added here -->
        </tbody>
    </table>

    <div class="form-container">
        <!-- Your form for adding new entries goes here -->
        <form id="entry-form">
            <label for="name">Name:</label>
            <input type="text" name="name" required>
            
            <label for="action">Action:</label>
            <input type="text" name="action" required>

            <button type="button" onclick="submitForm()">Submit</button>
        </form>
    </div>

    <script src="script.js"></script>










</body>
</html>