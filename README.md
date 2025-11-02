# Simple PHP Registration Form

This is a simple web application for a university lab assignment, demonstrating a functional online registration form. The form collects user information, performs client-side validation using jQuery, and then submits the data to a PHP script for server-side processing. The submitted information is then displayed back to the user on a success page.

## Live Demo

You can view a live demo of the project hosted on InfinityFree:
[**https://anukriti-sharma.infinityfree.me/registration_form.html**](https://anukriti-sharma.infinityfree.me/registration_form.html)

## Features

* **Modern UI:** Clean and responsive registration form styled with Tailwind CSS.
* **Client-Side Validation:** Uses jQuery to ensure all required fields are filled before allowing the form to be submitted.
* **Server-Side Processing:** Uses a simple PHP script (`process.php`) to receive the form data via the `POST` method.
* **Data Display:** Sanitizes and displays the submitted data (Name, Email, Phone, Course) back to the user on a success page.
* **Secure Input Handling:** Uses `htmlspecialchars()` to prevent basic XSS (Cross-Site Scripting) vulnerabilities.

## Technologies Used

* **Frontend:**
  * HTML5
  * [Tailwind CSS](https://tailwindcss.com/) (for styling)
  * [jQuery](https://jquery.com/) (for client-side validation)
* **Backend:**
  * [PHP](https://www.php.net/) (for server-side processing)
* **Hosting:**
  * [XAMPP](https://www.apachefriends.org/) (for local development)
  * [InfinityFree](https://www.infinityfree.com/) (for cloud hosting)

## How to Run Locally

To run this project on your local machine, you will need a local server environment that supports PHP, such as XAMPP.

1. **Prerequisites:**
   * Install [XAMPP](https://www.apachefriends.org/index.html).

2. **Setup:**
   * Download or clone this repository.
   * Move the project files (`registration_form.html` and `process.php`) into a new folder inside your XAMPP `htdocs` directory.
     * Example path: `C:\xampp\htdocs\my-project\`

3. **Run the Server:**
   * Open the XAMPP Control Panel.
   * Start the **Apache** module.

4. **Access the Application:**
   * Open your web browser and navigate to:
     `http://localhost/my-project/registration_form.html`
   * (Replace `my-project` with the name of the folder you created in `htdocs`).
