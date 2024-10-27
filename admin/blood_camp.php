<?php
include 'header.php'; // Include your header file
require '../app/db.conn.php'; // Database connection

try {
    // Check connection
    if ($conn->errorInfo()[0] != '00000') {
        throw new Exception("Failed to connect to MySQL: " . implode(", ", $conn->errorInfo()));
    }

    // Fetch the data from the database
    $stmt = $conn->prepare("SELECT * FROM blood_camps ORDER BY id ASC");
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
    <?php if ($_REQUEST['info'] == "added") { ?>
        <div class="w3-panel w3-green w3-round w3-padding">
            <span class="w3-large"><b>Success!</b> Blood Camp Details have been added successfully.</span>
        </div>
    <?php } ?>
    <?php if ($_REQUEST['info'] == "delete") { ?>
        <div class="w3-panel w3-red w3-round w3-padding">
            <span class="w3-large"><b>Success!</b> Blood Camp Details with Serial No: <?php echo $_GET['id']; ?> have been Deleted successfully.</span>
        </div>
    <?php } ?>
<?php } ?>

<p class="w3-center w3-xxlarge" style="color:white;">Blood Donation Camp Schedule</p>
<div><a href="add_blood_camps.php" class="w3-button w3-green w3-margin-left">Add blood camps</a></div>

<table class="w3-table w3-bordered w3-striped w3-margin-top" style="background-color:#ffffff90">
    <thead>
        <tr>
            <th class="sortable" data-sort="id">S.no <span class="sort-icon"></span></th>
            <th class="sortable" data-sort="sno">ID <span class="sort-icon"></span></th>
            <th class="sortable" data-sort="sdate">Date <span class="sort-icon"></span></th>
            <th class="sortable" data-sort="stime">Time <span class="sort-icon"></span></th>
            <th class="sortable" data-sort="cname">Camp Name <span class="sort-icon"></span></th>
            <th class="sortable" data-sort="cadd">Address <span class="sort-icon"></span></th>
            <th class="sortable" data-sort="state">State <span class="sort-icon"></span></th>
            <th class="sortable" data-sort="district">District <span class="sort-icon"></span></th>
            <th class="sortable" data-sort="contact">Contact <span class="sort-icon"></span></th>
            <th class="sortable" data-sort="conducted">Conducted By <span class="sort-icon"></span></th>
            <th class="sortable" data-sort="organized">Organized By <span class="sort-icon"></span></th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody id="camp-table-body">
        <?php if (count($result) > 0): 
            // Initialize counter for S.no display
            $counter = 1; 
            foreach ($result as $row): ?>
                <tr>
                    <td><?= $counter++ ?></td> <!-- Display row number -->
                    <td><?= htmlspecialchars(string: $row['id']) ?></td>
                    <td><?= date('d/m/y', strtotime($row['sdate'])) . " - " . date('d/m/y', strtotime($row['edate'])) ?></td>
                    <td><?= date('h:i a', strtotime($row['stime'])) . " - " . date('h:i a', strtotime($row['etime'])) ?></td>
                    <td><?= htmlspecialchars($row['cname']) ?></td>
                    <td><?= htmlspecialchars($row['cadd']) ?></td>
                    <td><?= htmlspecialchars($row['state']) ?></td>
                    <td><?= htmlspecialchars($row['district']) ?></td>
                    <td><?= htmlspecialchars($row['contact']) ?></td>
                    <td><?= htmlspecialchars($row['conducted']) ?></td>
                    <td><?= htmlspecialchars($row['organized']) ?></td>
                    <td><a href='logic.php?del_blood_camp=<?= $row['id'] ?>' type='button' class='w3-button w3-red'>Delete</a></td>
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
    const rows = $("#camp-table-body tr");
    let currentPage = 1;
    let rowsPerPage = 10;
    let sortBy = "id";
    let sortOrder = "asc";

    function displayTable() {
        $("#camp-table-body").html('<tr><td colspan="11" class="w3-center"><div class="w3-spin w3-text-teal w3-large">Loading...</div></td></tr>');
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
            $("#camp-table-body").html(paginatedRows);
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
            $("#pagination").append(`<li class="w3-button ${activeClass}" id="page">${i}</li>`);
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
