<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lawyer Registration</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h2 class="mb-4 text-center">Lawyer Registration Form</h2>
    <form action="submit-lawyer.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label>Full Name</label>
        <input type="text" name="full_name" class="form-control" required>
      </div>

      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>

      <div class="form-group">
        <label>Law Certification</label>
        <input type="text" name="certification" class="form-control" placeholder="e.g., LLB, JD" required>
      </div>

      <div class="form-group">
        <label>Issuing Institution</label>
        <input type="text" name="institution" class="form-control" required>
      </div>

      <div class="form-group">
        <label>Years of Experience</label>
        <input type="number" name="experience" class="form-control" required>
      </div>

      <div class="form-group">
        <label>License Number</label>
        <input type="text" name="license_number" class="form-control" required>
      </div>

      <div class="form-group">
        <label>Specialization</label>
        <select name="specialization" class="form-control" required>
          <option value="">Select One</option>
          <option>Criminal Law</option>
          <option>Corporate Law</option>
          <option>Family Law</option>
          <option>Intellectual Property</option>
          <option>Immigration</option>
          <option>Other</option>
        </select>
      </div>

      <div class="form-group">
        <label>Short Bio</label>
        <textarea name="bio" class="form-control" rows="3" placeholder="Write a brief professional background" required></textarea>
      </div>

      <div class="form-group">
        <label>Upload Certification Document (PDF/JPG)</label>
        <input type="file" name="certificate_file" class="form-control-file" accept=".pdf,.jpg,.jpeg,.png" required>
      </div>

      <button type="submit" class="btn btn-primary btn-block">Submit Application</button>
    </form>
  </div>
</body>
</html>
