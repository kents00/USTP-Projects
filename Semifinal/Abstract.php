<?php

// Abstract class for tuition calculation
abstract class TuitionCalculator
{
    protected $yearLevel;
    protected $units;
    protected $withLab;

    public function __construct($yearLevel, $units, $withLab)
    {
        $this->yearLevel = $yearLevel;
        $this->units = $units;
        $this->withLab = $withLab;
    }

    // Abstract method to calculate tuition fee
    abstract public function calculateTotalFee();
}

// Concrete class implementing tuition calculation
class UniversityTuitionCalculator extends TuitionCalculator
{
    public function calculateTotalFee()
    {
        $pricing = [
            1 => ['pricePerUnit' => 550, 'labFee' => 3359],
            2 => ['pricePerUnit' => 630, 'labFee' => 4000],
            3 => ['pricePerUnit' => 470, 'labFee' => 2890],
            4 => ['pricePerUnit' => 501, 'labFee' => 3555]
        ];

        if (!isset($pricing[$this->yearLevel])) {
            throw new Exception("Invalid year level.");
        }

        $pricePerUnit = $pricing[$this->yearLevel]['pricePerUnit'];
        $labFee = $pricing[$this->yearLevel]['labFee'];

        // Calculate total cost
        $tuitionFee = $pricePerUnit * $this->units;
        if ($this->withLab) {
            $tuitionFee += $labFee;
        }

        return $tuitionFee;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $yearLevel = (int) $_POST['year_level'];
    $units = (int) $_POST['units'];
    $withLab = $_POST['lab'] === 'yes';

    try {
        // Create instance of the concrete class
        $calculator = new UniversityTuitionCalculator($yearLevel, $units, $withLab);
        $totalFee = $calculator->calculateTotalFee();

        // Display result
        echo "<div class='container mt-5'>";
        echo "<div class='card'>";
        echo "<div class='card-header bg-primary text-white'>Tuition Fee Summary</div>";
        echo "<div class='card-body'>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Year Level:</strong> $yearLevel</p>";
        echo "<p><strong>Number of Units:</strong> $units</p>";
        echo "<p><strong>Lab Included:</strong> " . ($withLab ? 'Yes' : 'No') . "</p>";
        echo "<p><strong>Total Amount to Pay:</strong> &#8369;$totalFee</p>";
        echo "<a href='?' class='btn btn-secondary'>Back</a>";
        echo "</div></div></div>";
    } catch (Exception $e) {
        echo "<div class='container mt-5'><div class='alert alert-danger'>Error: " . $e->getMessage() . "</div>";
        echo "<a href='?' class='btn btn-secondary'>Back</a></div>";
    }
} else {
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h2>Tuition Fee Calculator</h2>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="year_level" class="form-label">Year Level:</label>
                        <select id="year_level" name="year_level" class="form-select" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="units" class="form-label">Number of Units (Max: 23):</label>
                        <input type="number" id="units" name="units" class="form-control" min="1" max="23" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Include Lab:</label><br>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="lab_yes" name="lab" value="yes" class="form-check-input" required>
                            <label for="lab_yes" class="form-check-label">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="lab_no" name="lab" value="no" class="form-check-input" required>
                            <label for="lab_no" class="form-check-label">No</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Calculate</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
}
?>