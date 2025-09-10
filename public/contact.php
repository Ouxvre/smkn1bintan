<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Contact Form</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap");

    body {
      font-family: 'Outfit', sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 0;
    }

    ::-webkit-scrollbar {
      display: none;
    }

    .contact-wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: calc(100vh - 120px);
    }

    .contact-section {
      width: 90%;
      max-width: 900;
    }

    .contact-section h1 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 40px;
      font-weight: 700;
    }

    .contact-container {
      display: flex;
      background: white;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      gap: 20px;
      min-height: 350px;
    }

    .form-container {
      flex: 2;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .form-row {
      display: flex;
      gap: 20px;
      margin-bottom: 20px;
    }

    .form-row input {
      flex: 1;
      border: none;
      border-bottom: 1px solid #aaa;
      padding: 8px;
      font-size: 14px;
      outline: none;
    }

    .form-row input:focus,
    textarea:focus {
      border-bottom: 2px solid #1a56db;
    }

    textarea {
      border: none;
      border-bottom: 1px solid #aaa;
      padding: 10px;
      font-size: 14px;
      outline: none;
      resize: none;
      min-height: 150px;
      margin-bottom: 20px;
    }

    .submit-btn {
      background-color: #1a56db;
      color: white;
      border: none;
      padding: 10px 20px;
      font-weight: bold;
      border-radius: 6px;
      cursor: pointer;
      align-self: flex-end;
    }

    .submit-btn:hover {
      background-color: #1748b0;
    }

    .image-container {
      flex: 1;
      background-color: #ddd;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 5px;
      font-size: 14px;
      color: #444;
      min-height: 250px;
    }
  </style>
</head>

<body>
  <?php include 'include/navbar.php' ?>
  <div class="contact-wrapper">
    <div class="contact-section">
      <h1>How Can We Help?</h1>
      <div class="contact-container">
        <div class="form-container">
          <form action="#" method="POST">
            <div class="form-row">
              <input type="text" placeholder="Name" name="name" required>
              <input type="email" placeholder="E-mail" name="email" required>
            </div>
            <textarea placeholder="Message" name="message" required></textarea>
            <button type="submit" class="submit-btn">Submit</button>
          </form>
        </div>
        <div class="image-container">
          foto smk
        </div>
      </div>
    </div>
  </div>
  <?php include 'include/footer.php' ?>
</body>

</html>