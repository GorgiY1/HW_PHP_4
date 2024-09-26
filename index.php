<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: linear-gradient(135deg, #000428, #004e92); /* Gradient background */
            color: #fff; /* White text */
            font-family: 'Roboto', sans-serif; /* Modern font */
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full height */
            overflow: hidden; /* Hide overflow */
        }
        .container {
            background-color: rgba(0, 0, 0, 0.8); /* Semi-transparent background */
            padding: 30px; /* Larger padding */
            border: 2px solid lightblue;
            box-shadow: 0 0 75px rgba(0, 255, 255, 0.5);
            border-radius: 30px; /* More rounded corners */
            
            
            text-align: center; /* Center text */
            color:#fff;
        }
table {
    
    margin: 40px;
    background-color: rgba(255, 255, 255, 0.1); /* Semi-transparent white background */
    border-radius: 25px; /* Rounded corners */
    overflow: hidden; /* Hide overflow */
    box-shadow: 0 0 60px darkblue; /* White shadow */
}

thead {
    background-color: darkslateblue; /* Semi-transparent white background for header */
}

th, td {
    padding: 12px;
    text-align: left;
    color: #fff; /* White text */
}

th {
    font-weight: bold;
}

tr:nth-child(even) {
    background-color: rgba(255, 255, 255, 0.1); /* Semi-transparent white background for even rows */
}

tr:hover {
    background-color: rgba(255, 255, 255, 0.2); /* Lighter hover color */
}
    </style>
</head>
<body>
    <div class="container">
        <table>
            <thead>
                <th>Name, LastName</th>
                <th>Position</th>
                <th>Age</th>
                <th>Hiring date</th>
                <th>Termination date</th>
                <th>Achievements</th>
            </thead>
            <tbody>
            <?php 
                    $empls = [
                        [
                            "hiring_date" => new DateTime('2022-06-01'),
                            "termination_date" => new DateTime('2023-06-01'),
                            "achievements" => "Exceeded sales targets by 20%",
                            "first_name" => "John",
                            "last_name" => "Doe",
                            "position" => "Sales Manager",
                            "age" => 35
                        ],
                        [
                            "hiring_date" => new DateTime('2021-05-10'),
                            "termination_date" => new DateTime('2023-04-15'),
                            "achievements" => "Developed a successful marketing campaign",
                            "first_name" => "Jane",
                            "last_name" => "Smith",
                            "position" => "Marketing Specialist",
                            "age" => 28
                        ],
                        [
                            "hiring_date" => new DateTime('2020-11-01'),
                            "termination_date" => new DateTime('2024-01-30'),
                            "achievements" => "Implemented a new accounting system",
                            "first_name" => "Michael",
                            "last_name" => "Johnson",
                            "position" => "Accountant",
                            "age" => 42
                        ],
                        [
                            "hiring_date" => new DateTime('2019-03-15'),
                            "termination_date" => new DateTime('2022-12-01'),
                            "achievements" => "Led the IT department through digital transformation",
                            "first_name" => "Emily",
                            "last_name" => "Davis",
                            "position" => "IT Director",
                            "age" => 39
                        ],
                        [
                            "hiring_date" => new DateTime('2018-07-25'),
                            "termination_date" => new DateTime('2021-09-20'),
                            "achievements" => "Improved customer satisfaction by 15%",
                            "first_name" => "William",
                            "last_name" => "Brown",
                            "position" => "Customer Service Manager",
                            "age" => 45
                        ],
                        // Additional employees added
                        [
                            "hiring_date" => new DateTime('2023-02-10'),
                            "termination_date" => new DateTime('2025-01-15'),
                            "achievements" => "Launched a new product line",
                            "first_name" => "Sarah",
                            "last_name" => "Wilson",
                            "position" => "Product Manager",
                            "age" => 33
                        ],
                        [
                            "hiring_date" => new DateTime('2022-08-20'),
                            "termination_date" => new DateTime('2024-07-01'),
                            "achievements" => "Expanded international market presence",
                            "first_name" => "Thomas",
                            "last_name" => "Robinson",
                            "position" => "Global Sales Director",
                            "age" => 48
                        ],
                        [
                            "hiring_date" => new DateTime('2021-12-05'),
                            "termination_date" => new DateTime('2023-11-30'),
                            "achievements" => "Developed new software solution",
                            "first_name" => "Olivia",
                            "last_name" => "Martinez",
                            "position" => "Software Engineer",
                            "age" => 31
                        ],
                        [
                            "hiring_date" => new DateTime('2020-09-15'),
                            "termination_date" => new DateTime('2023-08-31'),
                            "achievements" => "Optimized supply chain operations",
                            "first_name" => "Daniel",
                            "last_name" => "Garcia",
                            "position" => "Supply Chain Manager",
                            "age" => 37
                        ],
                        [
                            "hiring_date" => new DateTime('2019-11-20'),
                            "termination_date" => new DateTime('2022-10-15'),
                            "achievements" => "Implemented cost-saving initiatives",
                            "first_name" => "Sophia",
                            "last_name" => "Lopez",
                            "position" => "Financial Analyst",
                            "age" => 29
                        ]
                    ];
                    
                    
                    foreach ($empls as $employee) {
                        echo "<tr>";
                        echo "<td>{$employee['first_name']} {$employee['last_name']}</td>";
                        echo "<td>{$employee['position']}</td>";
                        echo "<td>{$employee['age']}</td>";
                        echo "<td>" . $employee['hiring_date']->format('Y-m-d') . "</td>";
                        echo "<td>" . $employee['termination_date']->format('Y-m-d') . "</td>";
                        echo "<td>{$employee['achievements']}</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>