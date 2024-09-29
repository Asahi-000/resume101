<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Resume Builder</title>
    <link rel="stylesheet" href="\online-resume-builder\form.css">
</head>
<body>

    <div class="nav">
        <h1>Online Resume Builder</h1>
            
        <div class="nav1">
            <a href="index.php" class="btn">Home</a>
            <a href="contact.php" class="btn">Contact</a>
        </div>
    </div>

    <form action="generate_resume.php" method="POST" enctype="multipart/form-data">
        <label for="name">Full Name</label>
        <input type="text" name="name" id="name" placeholder="Enter your complete name" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email address" required>

        <label for="phone">Phone Number</label>
        <input type="number" name="phone" id="phone" placeholder="Enter your phone number" required>

        <label for="address">Address</label>
        <input type="text" name="address" id="address" placeholder="Enter your address" required>

        <label for="summary">Profile Summary</label>
        <textarea type="text" name="summary" id="summary" placeholder="Write a short summary about yourself" required></textarea>

        <label for="education">Education</label>
        <textarea type="text" name="education" id="education" placeholder="List your educational attainemts" required></textarea>

        <label for="experience">Work Experience</label>
        <textarea type="text" name="experience" id="experience" placeholder="Describe your work experience" required></textarea>

        <label for="skills">Skills</label>
        <textarea type="text" name="skills" id="skills" placeholder="List your skills" required></textarea>

        <div class="pic">
        <label for="pfp">Upload Profile Picture</label>
        <input type="file" name="pfp" id="pfp" required>
        </div>

        <div class="but">
           <button type="submit">GENERATE RESUME</button>
        </div>

    </form>
    
</body>
</html>