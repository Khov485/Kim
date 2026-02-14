<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Profile</title>

<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: linear-gradient(to right, #1e3c72, #2a5298);
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

.profile-wrapper {
    background: white;
    width: 350px;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    text-align: center;
}

.cover {
    height: 120px;
    background: url("images.jpg") center/cover;
}

.profile-img {
    width: 105px;
    height: 125px;
    border-radius: 50%;
    border: 5px solid white;
    margin-top: -55px;
}

.info {
    padding: 20px;
}

.skills {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 8px;
}

.skill {
    background: #eaf4ff;
    padding: 6px 10px;
    border-radius: 15px;
    font-size: 12px;
}

.contact a {
    color: #1877f2;
    text-decoration: none;
    font-weight: bold;
}

.footer {
    font-size: 12px;
    color: gray;
    margin: 15px 0;
}
</style>
</head>
<body>

<?php
$name = "Khov Kimheang";
$role = "Web Developer";
$country = "Cambodia";
$skills = ["PHP", "HTML", "CSS", "JavaScript", "MySQL"];
$email = "phuyp444@email.com";
$phone = "+855 97 499 0808";
$facebook = "https://www.facebook.com/share/183hy24Zg1/?mibextid=wwXIfr";
$profileImage = "01.jpg";
?>

<div class="profile-wrapper">

<div class="cover"></div>

<img src="<?php echo $profileImage; ?>" class="profile-img" alt="Profile">

<div class="info">
<h2><?php echo $name; ?></h2>
<p><b><?php echo $role; ?></b> — <?php echo $country; ?></p>

<h3>About Me</h3>
<p>
I am a passionate learner in web development who enjoys creating
clean, modern, and user-friendly websites.
</p>

<h3>Skills</h3>
<div class="skills">
<?php
foreach ($skills as $skill) {
    echo "<span class='skill'>$skill</span>";
}
?>
</div>

<h3>Contact</h3>
<div class="contact">
<p>Email: <?php echo $email; ?></p>
<p>Phone: <?php echo $phone; ?></p>
<p>
<a href="<?php echo $facebook; ?>" target="_blank">Facebook Profile</a>
</p>
</div>

<div class="footer">
© <?php echo date("Y"); ?> <?php echo $name; ?>
</div>

</div>
</div>

</body>
</html>