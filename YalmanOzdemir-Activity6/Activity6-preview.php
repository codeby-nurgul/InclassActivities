<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Preview</title>
</head>
<body>
    <h2>Preview</h2>

    <?php
    $name = isset($_POST['name']) && !empty($_POST['name']) ? htmlspecialchars($_POST['name']) : "Not provided";
    $uname = isset($_POST['uname']) && !empty($_POST['uname']) ? htmlspecialchars($_POST['uname']) : "Not provided";
    $pass = isset($_POST['pass']) && !empty($_POST['pass']) ?  htmlspecialchars($_POST['pass']) : "Not provided";
    $address = isset($_POST['address']) && !empty($_POST['address']) ? htmlspecialchars($_POST['address']) : "Not provided";
    $country = isset($_POST['country']) && !empty($_POST['country']) ? htmlspecialchars($_POST['country']) : "Not provided";
    $zipcode = isset($_POST['zipcode']) && !empty($_POST['zipcode']) ? htmlspecialchars($_POST['zipcode']) : "Not provided";
    $email = isset($_POST['email']) && !empty($_POST['email']) ? htmlspecialchars($_POST['email']) : "Not provided";

    $sex = "Not provided";
    if (isset($_POST['male'])) {
        $sex = "Male";
    } elseif (isset($_POST['female'])) {
        $sex = "Female";
    }

    $languages = [];
    if (isset($_POST['english'])) $languages[] = "English";
    if (isset($_POST['french'])) $languages[] = "French";
    if (isset($_POST['germany'])) $languages[] = "Germany";
    $language = !empty($languages) ? implode(", ", $languages) : "Not provided";

    $about = isset($_POST['about']) && !empty($_POST['about']) ? htmlspecialchars($_POST['about']) : "Not provided";

    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Username:</strong> $uname</p>";
    echo "<p><strong>Password:</strong> $pass</p>";
    echo "<p><strong>Address:</strong> $address</p>";
    echo "<p><strong>Country:</strong> $country</p>";
    echo "<p><strong>ZIP Code:</strong> $zipcode</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Sex:</strong> $sex</p>";
    echo "<p><strong>Language(s):</strong> $language</p>";
    echo "<p><strong>About:</strong> $about</p>";
    ?>

</body>
</html>
