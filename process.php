<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
    <!-- We can use Tailwind here too to style the success page! -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                },
            },
        }
    </script>
</head>
<body class="bg-gray-50 font-sans flex items-center justify-center min-h-screen p-4">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-lg border border-gray-200">

        <?php
        // Check if the form was submitted using the "POST" method
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            // 1. Get the data from the form and sanitize it
            // htmlspecialchars() prevents basic XSS (Cross-Site Scripting) attacks
            $name = htmlspecialchars($_POST["name"]);
            $email = htmlspecialchars($_POST["email"]);
            $phone = htmlspecialchars($_POST["phone"]);
            $course = htmlspecialchars($_POST["course"]);

            // 2. Display the information back to the user
            echo "<h2 class='text-3xl font-bold mb-6 text-center text-green-600'>Registration Successful!</h2>";
            echo "<p class='text-lg text-gray-700 mb-6'>Thank you for registering, <strong class='font-semibold'>" . $name . "</strong>. We have received your information:</p>";
            
            echo "<div class='space-y-3 bg-gray-50 p-6 rounded-lg border border-gray-200'>";
            echo "<p class='text-base'><strong class='text-gray-900 w-24 inline-block'>Full Name:</strong> " . $name . "</p>";
            echo "<p class='text-base'><strong class='text-gray-900 w-24 inline-block'>Email:</strong> " . $email . "</p>";
            echo "<p class='text-base'><strong class='text-gray-900 w-24 inline-block'>Phone:</strong> " . $phone . "</p>";
            echo "<p class='text-base'><strong class='text-gray-900 w-24 inline-block'>Course:</strong> " . $course . "</p>";
            echo "</div>";

            echo "<a href='registration_form.html' class='inline-block w-full text-center bg-blue-600 text-white py-3 px-4 rounded-lg font-semibold shadow-md hover:bg-blue-700 transition-all duration-300 mt-8'>Go Back</a>";
            
        } else {
            // If someone tries to access this page directly without submitting the form
            echo "<h2 class='text-3xl font-bold mb-6 text-center text-red-600'>Error</h2>";
            echo "<p class='text-lg text-gray-700 mb-6'>Invalid request. Please submit the form properly.</p>";
            echo "<a href='registration_form.html' class='inline-block w-full text-center bg-gray-500 text-white py-3 px-4 rounded-lg font-semibold shadow-md hover:bg-gray-600 transition-all duration-300 mt-8'>Return to Form</a>";
        }
        ?>

    </div>

</body>
</html>

