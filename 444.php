<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name1 = $_POST['name1'] ?? '';
    $name2 = $_POST['name2'] ?? '';

    $r1  = $_POST['r1'] ?? '';
    $r2  = $_POST['r2'] ?? '';

    $a1 = $_POST['a1'] ?? '';
    $a2 = $_POST['a2'] ?? '';

    $c1 = $_POST['c1'] ?? '';
    $c2 = $_POST['c2'] ?? '';

    $x1 = $_POST['x1'] ?? '';
    $x2 = $_POST['x2'] ?? '';

    $p1 = $_POST['p1'] ?? '';
    $p2 = $_POST['p2'] ?? '';

    $b1 = $_POST['b1'] ?? '';
    $b2 = $_POST['b2'] ?? '';

    $senderBirthday = $_POST['senderBirthday'] ?? '';
    $u2 = $_POST['u2'] ?? '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Letter Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #eaeaea;
        }

        .envelope {
            background-color: #fff;
            width: 1630px; /* Adjusted width for better fit */
            height: 650px; /* Adjusted height for better fit */
            border: 2px solid #007BFF; /* Blue border for envelope */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden; /* Prevents overflow of child elements */
            text-align: center;
            padding: 20px; /* Padding inside the envelope */
        }

        h1 {
            color: #007BFF; /* Title text color */
            margin: 20px 0; /* Margin around the title */
        }

        .sender-info, .receiver-info {
            width: calc(50% - 40px); /* Width of each section */
            background-color: #f9f9f9; /* Light background for contrast */
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 5px; /* Padding inside the sections */
            position: absolute; /* Use absolute positioning */
        }

        .sender-info {
            top: 20px; /* Distance from the top */
            left: 20px; /* Distance from the left */
        }

        .receiver-info {
            bottom: 1px; /* Distance from the bottom */
            right: 120px; /* Distance from the right */
        }

        table {
            width: 100%; /* Make the table full width */
            border-collapse: collapse; /* Collapse borders */
            margin-top: 10px; /* Margin between title and table */
        }

        th, td {
            border: 1px solid #dddddd; /* Border for cells */
            text-align: left; /* Left align text */
            padding: 10px; /* Cell padding */
            word-wrap: break-word; /* Break words in cells if necessary */
        }

        th {
            background-color: #007BFF; /* Header background color */
            color: white; /* Header text color */
        }
    </style>
</head>
<body>

    <div class="envelope">
        <div class="sender-info">
            <h1>ข้อมูลผู้ส่ง</h1>
            <table>
                <tr>
                    <th>ชื่อผู้ส่ง</th>
                    <th>จังหวัด</th>
                    <th>อำเภอ</th>
                    <th>ตำบล</th>
                    <th>บ้านเลขที่</th>
                    <th>รหัสไปรษณีย์</th>
                    <th>เบอร์โทร</th>
                    <th>วันที่</th>
                </tr>
                <tr>
                    <td><?php echo htmlspecialchars($name1); ?></td>
                    <td><?php echo htmlspecialchars($r1); ?></td>
                    <td><?php echo htmlspecialchars($a1); ?></td>
                    <td><?php echo htmlspecialchars($c1); ?></td>
                    <td><?php echo htmlspecialchars($x1); ?></td>
                    <td><?php echo htmlspecialchars($p1); ?></td>
                    <td><?php echo htmlspecialchars($b1); ?></td>
                    <td><?php echo htmlspecialchars($senderBirthday); ?></td>
                </tr>
            </table>
        </div>

        <div class="receiver-info">
            <h1>ข้อมูลผู้รับ</h1>
            <table>
                <tr>
                    <th>ชื่อผู้รับ</th>
                    <th>จังหวัด</th>
                    <th>อำเภอ</th>
                    <th>ตำบล</th>
                    <th>บ้านเลขที่</th>
                    <th>รหัสไปรษณีย์</th>
                    <th>เบอร์โทร</th>
                    <th>วันที่</th>
                </tr>
                <tr>
                    <td><?php echo htmlspecialchars($name2); ?></td>
                    <td><?php echo htmlspecialchars($r2); ?></td>
                    <td><?php echo htmlspecialchars($a2); ?></td>
                    <td><?php echo htmlspecialchars($c2); ?></td>
                    <td><?php echo htmlspecialchars($x2); ?></td>
                    <td><?php echo htmlspecialchars($p2); ?></td>
                    <td><?php echo htmlspecialchars($b2); ?></td>
                    <td><?php echo htmlspecialchars($u2); ?></td>
                </tr>
            </table>
        </div>
    </div>

</body>
</html>
