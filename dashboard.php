<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Dynamic View</title>
    <!-- Bootstrap for Styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: #ffffff;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a.logout-button {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        a.logout-button:hover {
            background-color: #0056b3;
        }

        .pagination a {
            margin: 0 5px;
            text-decoration: none;
            padding: 8px 12px;
            background-color: #007BFF;
            color: white;
            border-radius: 5px;
        }

        .pagination a:hover {
            background-color: #0056b3;
        }

        .form-check {
            margin-bottom: 10px;
        }

        .modal-body {
            max-height: 400px;
            overflow-y: auto;
        }

        .btn-custom {
            background-color: #007BFF;
            color: white;
            border-radius: 8px;
            padding: 10px 20px;
            font-weight: bold;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        h2 {
            color: #333;
            font-weight: bold;
        }

        .form-section {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .form-section h4 {
            font-size: 1.25rem;
            margin-bottom: 15px;
        }

        .btn-custom {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            font-weight: bold;
            border-radius: 5px;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        .modal-body {
            max-height: 400px;
            overflow-y: auto;
        }

        .form-check-label {
            margin-left: 10px;
        }

        .btn-primary {
            background-color: #007BFF;
            border-color: #007BFF;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <!-- Logo or Brand -->
            <a class="navbar-brand" href="#">Registration Dashboard</a>

            <!-- Toggler for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links in the navbar -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- Add additional navbar links if needed -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>

                <!-- Logout button aligned to the right -->
                <a href="?logout=true" class="btn btn-outline-light logout-button">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Your main content here -->
    <div class="container mt-5">
        <h2>Registration Details</h2>
        <!-- Your table and content goes here -->
    </div>

    <div class="container">
        <h2 class="mt-4 text-center">Customize Table Fields and Search</h2>

        <div class="form-section mt-4">
            <!-- Form to handle both modal input and search -->
            <form method="GET" id="fieldForm" class="row g-3">
                <!-- Button to Select Fields (Modal Trigger) -->
                <div class="col-md-12">
                    <h4>Select Fields to Display:</h4>
                    <button type="button" class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#fieldSelectionModal">
                        Choose Fields
                    </button>
                </div>

                <!-- Search Field -->
                <div class="col-md-12 mt-4">
                    <h4>Search:</h4>
                    <input type="text" class="form-control" name="search" id="search" placeholder="Enter name or email"
                        value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
                </div>

                <!-- Submit Button -->
                <div class="col-md-12 mt-4">
                    <button type="submit" class="btn btn-primary w-100">Update View</button>
                </div>

                <!-- Modal for Field Selection -->
                <div class="modal fade" id="fieldSelectionModal" tabindex="-1" aria-labelledby="fieldSelectionModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="fieldSelectionModalLabel">Select Fields to Display</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input type="checkbox" name="fields[]" value="contact_number" id="contact_number" class="form-check-input"
                                                <?= isset($_GET['fields']) && in_array('contact_number', $_GET['fields']) ? 'checked' : '' ?>>
                                            <label for="contact_number" class="form-check-label">Contact Number</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="fields[]" value="paper_id" id="paper_id" class="form-check-input"
                                                <?= isset($_GET['fields']) && in_array('paper_id', $_GET['fields']) ? 'checked' : '' ?>>
                                            <label for="paper_id" class="form-check-label">Paper ID</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="fields[]" value="title" id="title" class="form-check-input"
                                                <?= isset($_GET['fields']) && in_array('title', $_GET['fields']) ? 'checked' : '' ?>>
                                            <label for="title" class="form-check-label">Title</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="fields[]" value="designation" id="designation" class="form-check-input"
                                                <?= isset($_GET['fields']) && in_array('designation', $_GET['fields']) ? 'checked' : '' ?>>
                                            <label for="designation" class="form-check-label">Designation</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="fields[]" value="gender" id="gender" class="form-check-input"
                                                <?= isset($_GET['fields']) && in_array('gender', $_GET['fields']) ? 'checked' : '' ?>>
                                            <label for="gender" class="form-check-label">Gender</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="fields[]" value="address" id="address" class="form-check-input"
                                                <?= isset($_GET['fields']) && in_array('address', $_GET['fields']) ? 'checked' : '' ?>>
                                            <label for="address" class="form-check-label">Address</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input type="checkbox" name="fields[]" value="city" id="city" class="form-check-input"
                                                <?= isset($_GET['fields']) && in_array('city', $_GET['fields']) ? 'checked' : '' ?>>
                                            <label for="city" class="form-check-label">City</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="fields[]" value="country" id="country" class="form-check-input"
                                                <?= isset($_GET['fields']) && in_array('country', $_GET['fields']) ? 'checked' : '' ?>>
                                            <label for="country" class="form-check-label">Country</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="fields[]" value="institution" id="institution" class="form-check-input"
                                                <?= isset($_GET['fields']) && in_array('institution', $_GET['fields']) ? 'checked' : '' ?>>
                                            <label for="institution" class="form-check-label">Institution</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="fields[]" value="department" id="department" class="form-check-input"
                                                <?= isset($_GET['fields']) && in_array('department', $_GET['fields']) ? 'checked' : '' ?>>
                                            <label for="department" class="form-check-label">Department</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" name="fields[]" value="role" id="role" class="form-check-input"
                                                <?= isset($_GET['fields']) && in_array('role', $_GET['fields']) ? 'checked' : '' ?>>
                                            <label for="role" class="form-check-label">Role</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Apply Selection</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Table to display the results -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Is Student</th>
                <!-- Dynamic Field Headers -->
                <?php
                if (isset($_GET['fields'])) {
                    foreach ($_GET['fields'] as $field) {
                        echo "<th>" . ucfirst(str_replace("_", " ", $field)) . "</th>";
                    }
                }
                ?>
                <th>Image File</th>
            </tr>
        </thead>
        <tbody>
            <!-- Dynamic Data Rows -->
            <?php
            include './includes/dbh.inc.php'; // Database connection

            // Base query with required fields
            $query = "SELECT id, full_name, email, receipt_file, student_id_file";

            // Append selected fields to query
            if (isset($_GET['fields'])) {
                foreach ($_GET['fields'] as $field) {
                    $query .= ", " . $field;
                }
            }

            // Add search filter if applicable
            $search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';
            if (!empty($search)) {
                $query .= " FROM registrations WHERE full_name LIKE '%$search%' OR email LIKE '%$search%'";
            } else {
                $query .= " FROM registrations";
            }

            // Pagination logic
            $results_per_page = 10;
            $page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
            $start_from = ($page - 1) * $results_per_page;

            // Add limit and offset for pagination
            $query .= " LIMIT $start_from, $results_per_page";
            $result = $conn->query($query);

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['full_name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                if (!empty($row['student_id_file'])) {
                    $image_url = 'uploads/' . htmlspecialchars($row['student_id_file']);
                    echo "<td><a href='$image_url' target='_blank'><img src='$image_url' alt='Receipt' style='width:100px;height:auto;'></a></td>";
                } else {
                    echo "<td>Not a student</td>";
                }

                // Display the selected fields
                if (isset($_GET['fields'])) {
                    foreach ($_GET['fields'] as $field) {
                        echo "<td>" . htmlspecialchars($row[$field]) . "</td>";
                    }
                }

                // Check if the receipt_file is available and create a link around the image
                if (!empty($row['receipt_file'])) {
                    $image_url = 'uploads/' . htmlspecialchars($row['receipt_file']);
                    echo "<td><a href='$image_url' target='_blank'><img src='$image_url' alt='Receipt' style='width:100px;height:auto;'></a></td>";
                } else {
                    echo "<td>No receipt uploaded</td>";
                }


                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Pagination Links -->
    <div class="pagination">
        <?php
        // Find the total number of records for pagination
        $count_query = "SELECT COUNT(*) as total FROM registrations";
        if (!empty($search)) {
            $count_query .= " WHERE full_name LIKE '%$search%' OR email LIKE '%$search%'";
        }
        $count_result = $conn->query($count_query);
        $total_records = $count_result->fetch_assoc()['total'];
        $total_pages = ceil($total_records / $results_per_page);

        // Generate query parameters for pagination links
        $query_params = $_GET;
        unset($query_params['page']); // Remove page parameter

        // Display pagination controls
        if ($page > 1) {
            echo "<a href='?" . http_build_query(array_merge($query_params, ['page' => $page - 1])) . "'>Previous</a>";
        }

        for ($i = 1; $i <= $total_pages; $i++) {
            if ($i == $page) {
                echo "<a href='?" . http_build_query(array_merge($query_params, ['page' => $i])) . "' style='font-weight: bold;'>$i</a>";
            } else {
                echo "<a href='?" . http_build_query(array_merge($query_params, ['page' => $i])) . "'>$i</a>";
            }
        }

        if ($page < $total_pages) {
            echo "<a href='?" . http_build_query(array_merge($query_params, ['page' => $page + 1])) . "'>Next</a>";
        }
        ?>
    </div>

    <!-- Bootstrap JS for Modal functionality -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>