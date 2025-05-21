<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Form</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #00bfff, #ffffff); /* Background biru putih saat form dimuat */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      transition: background 0.5s ease;
      margin: 0;
    }

    .contact-form {
      background: #ffffff;
      padding: 5px 40px; /* Perkecil padding atas-bawah, perbesar kiri-kanan */
      border-radius: 12px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 450px; /* Lebar form lebih besar */
      box-sizing: border-box;
    }

    .contact-form h2 {
      margin-bottom: 20px;
      color: #333;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 8px;
      color: #555;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1rem;
    }

    .form-group textarea {
      resize: vertical;
      height: 120px;
    }

    .submit-btn {
      background: #007bff;
      color: white;
      border: none;
      padding: 12px 18px;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s;
      font-size: 1rem;
      width: 100%;
    }

    .submit-btn:hover {
      background: #0056b3;
    }

    .error {
      color: red;
      font-size: 0.9em;
      display: none;
    }

    .success-message {
      color: green;
      font-size: 1.1em;
      display: none;
      margin-top: 20px;
    }

  </style>
</head>
<body>

  <form class="contact-form" id="contactForm" onsubmit="return validateForm()">
    <h2>Need Help? Let’s Chat</h2>

    <div class="form-group">
      <label for="name">Nama</label>
      <input type="text" id="name" name="name" />
      <div class="error" id="nameError">Nama harus terdiri dari huruf saja.</div>
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" id="email" name="email" />
      <div class="error" id="emailError">Email tidak valid.</div>
    </div>

    <div class="form-group">
      <label for="phone">Nomor HP</label>
      <input type="text" id="phone" name="phone" />
      <div class="error" id="phoneError">Nomor HP tidak valid.</div>
    </div>

    <div class="form-group">
      <label for="message">Pesan</label>
      <textarea id="message" name="message"></textarea>
      <div class="error" id="messageError">Pesan tidak boleh kosong.</div>
    </div>

    <button type="submit" class="submit-btn">Kirim</button>

    <!-- Success message -->
    <div class="success-message" id="successMessage">Form berhasil dikirim!</div>
  </form>

  <script>
    function validateForm() {
      let isValid = true;

      const name = document.getElementById("name").value.trim();
      const email = document.getElementById("email").value.trim();
      const phone = document.getElementById("phone").value.trim();
      const message = document.getElementById("message").value.trim();

      // Reset error display
      document.getElementById("nameError").style.display = "none";
      document.getElementById("emailError").style.display = "none";
      document.getElementById("phoneError").style.display = "none";
      document.getElementById("messageError").style.display = "none";
      document.getElementById("successMessage").style.display = "none"; // Hide success message on form submission

      // Reset background to default if no error
      document.body.style.background = "#f4f4f4";

      // Validate Name (only letters and spaces)
      if (name === "") {
        document.getElementById("nameError").style.display = "block";
        isValid = false;
      } else if (!/^[a-zA-Z\s]+$/.test(name)) {
        document.getElementById("nameError").style.display = "block";
        isValid = false;
        // Change background to gradient if name contains numbers
        document.body.style.background = "linear-gradient(to right, #00bfff, #ffffff)";
      }

      // Validate Email (basic email format)
      if (!/^\S+@\S+\.\S+$/.test(email)) {
        document.getElementById("emailError").style.display = "block";
        isValid = false;
      }

      // Validate Phone (check if it's a valid number)
      if (phone === "") {
        document.getElementById("phoneError").style.display = "block";
        isValid = false;
      } else if (!/^\d{10,15}$/.test(phone)) { // Assuming valid phone number is between 10-15 digits
        document.getElementById("phoneError").style.display = "block";
        isValid = false;
      }

      // Validate Message
      if (message === "") {
        document.getElementById("messageError").style.display = "block";
        isValid = false;
      }

      if (isValid) {
        // If all validations passed, show success message and hide form
        document.getElementById("successMessage").style.display = "block";
        document.getElementById("contactForm").reset(); // Reset the form
        document.body.style.background = "linear-gradient(to right, #00ff00, #ffffff)"; // Change background to green
      }

      return false; // Prevent form from actually submitting
    }
  </script>

</body>
</html>
