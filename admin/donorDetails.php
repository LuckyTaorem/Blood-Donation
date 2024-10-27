<?php
include 'header.php'; // Include your header file
require '../app/db.conn.php'; // Database connection

try {
    // Check connection
    if ($conn->errorInfo()[0] != '00000') {
        throw new Exception("Failed to connect to MySQL: " . implode(", ", $conn->errorInfo()));
    }

    // Fetch the data from the database
    $stmt = $conn->prepare("SELECT * FROM donordetails ORDER BY name ASC");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    echo $e->getMessage();
    exit;
}
?>
<style>
    #pagination li{
        color: white;
    }
</style>
<?php if (isset($_REQUEST['info'])) { ?>
    <?php if ($_REQUEST['info'] == "updated") { ?>
        <div class="w3-panel w3-green w3-round w3-padding">
            <span class="w3-large"><b>Success!</b>
            Donor details have been updated successfully.</span>
        </div>
    <?php } ?>
    <?php if ($_REQUEST['info'] == "deleted") { ?>
        <div class="w3-panel w3-red w3-round w3-padding">
            <span class="w3-large"><b>Success!</b>
            Donor details have been Deleted successfully.</span>
        </div>
    <?php } ?>
<?php } ?>

<p class="w3-center w3-xxlarge" style="color:white;">Donor Details</p>

<table class="w3-table w3-bordered w3-striped w3-margin-top" style="background-color:#ffffff90">
    <thead>
        <tr>
            <th class="sortable" data-sort="id">S.no <span class="sort-icon"></span></th>
            <th class="sortable" data-sort="email">Email <span class="sort-icon"></span></th>
            <th class="sortable" data-sort="name">Name <span class="sort-icon"></span></th>
            <th class="sortable" data-sort="phn">Phone <span class="sort-icon"></span></th>
            <th class="sortable" data-sort="bg">Blood <span class="sort-icon"></span></th>
            <th class="sortable" data-sort="city">City <span class="sort-icon"></span></th>
            <th class="sortable" data-sort="pin">Pincode <span class="sort-icon"></span></th>
            <th>Location</th>
            <th class="sortable" data-sort="address">Address <span class="sort-icon"></span></th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody id="donor-table-body">
        <?php if (count($result) > 0): 
            // Initialize counter for S.no display
            $counter = 1; 
            foreach ($result as $row): ?>
                <tr>
                    <td><?= $counter++ ?></td> <!-- Display row number -->
                    <td><?= htmlspecialchars(string: $row['email']) ?></td>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['phn']) ?></td>
                    <td><?= htmlspecialchars($row['bg']) ?></td>
                    <td><?= htmlspecialchars($row['city']) ?></td>
                    <td><?= htmlspecialchars($row['pin']) ?></td>
                    <td><a href="https://www.google.com/maps?q=<?php echo $row['lat'] . ',' . $row['lon']; ?>" target="_blank" type='button' class='w3-button w3-blue'>View</a></td>
                    <td><?= htmlspecialchars($row['address']) ?></td>
                    <td><a href='editDonor.php?id=<?= $row['email'] ?>' type='button' class='w3-button w3-yellow'>Edit</a></td>
                    <td><a href='deleteDonor.php?id=<?= $row['email'] ?>' type='button' class='w3-button w3-red'>Delete</a></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>

<ul id="pagination" class="w3-pagination w3-center"></ul>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    const rows = $("#donor-table-body tr");
    let currentPage = 1;
    let rowsPerPage = 10;
    let sortBy = "id";
    let sortOrder = "asc";

    function displayTable() {
        $("#donor-table-body").html('<tr><td colspan="11" class="w3-center"><div class="w3-spin w3-text-teal w3-large">Loading...</div></td></tr>');
        setTimeout(() => {
            const sortedRows = Array.from(rows).sort((a, b) => {
                let aText, bText;
                if (sortBy === "id") {
                    // Sort by S.no (row numbers)
                    aText = Number($(a).find(`td:eq(0)`).text());
                    bText = Number($(b).find(`td:eq(0)`).text());
                } else {
                    // For other sortable columns
                    aText = $(a).find(`td:eq(${getColumnIndex(sortBy)})`).text();
                    bText = $(b).find(`td:eq(${getColumnIndex(sortBy)})`).text();
                }
                return sortOrder === "asc" ? aText - bText : bText - aText;
            });

            const start = (currentPage - 1) * rowsPerPage;
            const paginatedRows = sortedRows.slice(start, start + rowsPerPage);
            $("#donor-table-body").html(paginatedRows);
            paginate();
        }, 300);
    }

    function getColumnIndex(sortKey) {
        return $(".sortable").index($(`[data-sort="${sortKey}"]`));
    }

    function paginate() {
        const totalPages = Math.ceil(rows.length / rowsPerPage);
        $("#pagination").html("");

        const prevDisabled = currentPage === 1 ? "w3-disabled" : "";
        $("#pagination").append(`<li class="w3-button ${prevDisabled}" id="prev-page">Previous</li>`);

        for (let i = 1; i <= totalPages; i++) {
            const activeClass = i === currentPage ? 'w3-teal' : '';
            $("#pagination").append(`<li class="w3-button ${activeClass}">${i}</li>`);
        }

        const nextDisabled = currentPage === totalPages ? "w3-disabled" : "";
        $("#pagination").append(`<li class="w3-button ${nextDisabled}" id="next-page">Next</li>`);
    }

    $("#pagination").on("click", ".w3-button", function (e) {
        e.preventDefault();
        const selectedPage = $(this).text();

        if (selectedPage === "Previous" && currentPage > 1) {
            currentPage--;
        } else if (selectedPage === "Next" && currentPage < Math.ceil(rows.length / rowsPerPage)) {
            currentPage++;
        } else if (!isNaN(selectedPage)) {
            currentPage = +selectedPage;
        }

        displayTable();
    });

    $(".sortable").click(function () {
        const clickedSortBy = $(this).data("sort");

        if (sortBy === clickedSortBy) {
            sortOrder = sortOrder === "asc" ? "desc" : "asc";
        } else {
            sortBy = clickedSortBy;
            sortOrder = "asc";
        }

        $(".sortable .sort-icon").html("");
        $(this).find(".sort-icon").html(sortOrder === "asc" ? "▲" : "▼");

        displayTable();
    });

    displayTable();
});
</script>


<?php
// Close the PDO connection
$conn = null;
?>
