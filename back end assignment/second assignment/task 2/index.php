<!-- login -->

<?php
$message = '';
$errors = [];
$date = date('d-m-y', strtotime($_POST['birt-date']));
$event = date("d-m-y \ TH:i:s", strtotime($_POST['event-date']));

if (!empty($_POST['submit']) && empty($_POST['name'])) {
    $errors[] = 'PLZ enter you name';
}
if (!empty($_POST['submit']) && empty($_POST['email'])) {
    $errors[] = 'PLZ enter you email';
}
if (!empty($_POST['submit']) && empty($_POST['password'])) {
    $errors[] = 'PLZ enter you password';
}
if (!empty($_POST['submit']) && empty($_POST['phone'])) {
    $errors[] = 'PLZ enter you phone';
}
if (!empty($_POST['submit']) && empty($date)) {
    $errors[] = 'PLZ enter you birth date';
}
if (!empty($_POST['submit']) && empty($_POST['social-media-account'])) {
    $errors[] = 'PLZ enter you social media account url';
}
/////////////////////////////////////////////////////////////////
//event date
if (!empty($_POST['submit']) && empty($_POST['event-date'])) {
    $errors[] = 'PLZ enter your event time';
}
//week
if (!empty($_POST['submit']) && empty($_POST['reminder-week'])) {
    $errors[] = 'PLZ enter the reminder week';
}
//number invited
if (!empty($_POST['submit']) && empty($_POST['invited-number'])) {
    $errors[] = 'PLZ enter the invuted number';
}
//buffet-time
if (!empty($_POST['submit']) && empty($_POST['buffet-time'])) {
    $errors[] = 'PLZ enter the buffet time';
}
//color
if (!empty($_POST['submit']) && empty($_POST['color-theme'])) {
    $errors[] = 'PLZ enter the color theme';
}
//checbox
if (!empty($_POST['submit']) && empty($_POST['flowers'])) {
    $errors[] = 'PLZ enter the flower theme';
}
if (!empty($_POST['flowers'])) {
    foreach ($_POST['flowers'] as $selected) {
        echo $selected . "</br>";
    }
}
//range
if (!empty($_POST['submit']) && empty($_POST['max-range'])) {
    $errors[] = 'PLZ enter the range';
}
//month
if (!empty($_POST['submit']) && empty($_POST['possible-event'])) {
    $errors[] = 'PLZ enter the month of possible event';
}
//radio
if (!empty($_POST['submit']) && empty($_POST['confirm'])) {
    $errors[] = 'PLZ select the confirmation way ';
}
//search
if (!empty($_POST['submit']) && empty($_POST['search'])) {
    $errors[] = 'PLZ select what you want to search ';
}
//reset
if (!empty($_POST['reset'])) {
    $message = 'resest clicked';
    echo ($message);
}

if (!empty($_POST['submit']) && count($errors) === 0) {

    $message = 'Welcome, ' . $_POST['name']
        . ' your email is : ' . $_POST['email']
        . ' your phone is :' . $_POST['phone']
        . ' your birth date is :' . $date
        //
        . '  your event is in :' . $event
        . '  your remainder is in :' . $_POST['reminder-week']
        . ' people invited number is :' . $_POST['invited-number']
        . ' buffet-time is ' . $_POST['buffet-time']
        . ' color-theme is ' . $_POST['color-theme']
        . ' badage range is ' . $_POST['max-range']
        . ' month of possible event ' . $_POST['possible-event']
        . ' confirmation way  is ' . $_POST['confirm']
        . ' you want to search about ' . $_POST['search'];
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task 2</title>
</head>

<body>

    <?php
    if (count($errors)) :
    ?>
        <ul>
            <?php for ($i = 0; $i < count($errors); $i++) : ?>
                <li> <?= $errors[$i] ?> </li>
            <?php endfor; ?>
        </ul>
    <?php
    endif;
    ?>

    <form method="post">

        <!-- text -->
        <div>
            <label>your name </label>
            <input type="text" name="name" placeholder="enter your name" value="<?= !empty($_POST['name']) ? $_POST['name'] : '' ?>">
        </div>
        <br>

        <!-- email -->
        <div>
            <label>your email</label>
            <input type="email" name="email" placeholder="xyz@gmail.com" value="<?= !empty($_POST['email']) ? $_POST['email'] : '' ?>">
        </div>
        <br>

        <!-- password -->
        <div>
            <label>Password </label>
            <input type="password" name="password">
        </div>
        <br>

        <!-- tel -->
        <div>
            <label>your phone</label>
            <input type="tel" name="phone" placeholder="011-4567-8901" value="<?= !empty($_POST['phone']) ? $_POST['phone'] : '' ?>">
        </div>
        <br>

        <!-- date -->
        <div>
            <label>your birth date</label>
            <input type="date" name="birt-date" value="<?= !empty($_POST['birt-date']) ? $_POST['birt-date'] : '' ?>">
        </div>
        <br>

        <!-- url -->
        <div>
            <label>social media account</label>
            <input type="url" name="social-media-account" size="25" placeholder="http://www.facebook.com/xyz" value="<?= !empty($_POST['social-media-account']) ? $_POST['social-media-account'] : '' ?>">
        </div>
        <br>
        ////////////////////
        <!-- datetime-local -->
        <div>
            <label>the date and time for your event</label>
            <input type="datetime-local" name="event-date" value="<?= !empty($_POST['event-date']) ? $_POST['event-date'] : '' ?>">
        </div>
        <br>

        <!-- week -->
        <div>
            <label for="week">What week would you like to recive a reminder </label>
            <input id="week" type="week" name="reminder-week" value="<?= !empty($_POST['reminder-week']) ? $_POST['reminder-week'] : '' ?>">
        </div>
        <br>

        <!-- number -->
        <div>
            <label>number of invited people</label>
            <input type="number" name="invited-number" value="<?= !empty($_POST['invited-number']) ? $_POST['invited-number'] : '' ?>">
        </div>
        <br>

        <!-- time -->
        <div>
            <label>buffet time: </label>
            <input type="time" name="buffet-time" value="<?= !empty($_POST['buffet-time']) ? $_POST['buffet-time'] : '' ?>">
        </div>
        <br>

        <!-- color -->
        <div>
            <label>event color theme</label>
            <input type="color" name="color-theme" value="<?= !empty($_POST['max-range']) ? $_POST['max-range'] : '' ?>">
        </div>
        <br>

        <!-- checkbox -->
        <div>
            <p>Choose favorit Flowers:</p>
            <input type="checkbox" name="flowers[]" value="roses">
            <label>roses </label>
        </div>

        <div>
            <input type="checkbox" name="flowers[]" value="tulip">
            <label>tulip</label>
        </div>

        <div>
            <input type="checkbox" name="flowers[]" value="sunflower">
            <label>sunflower</label>
        </div>

        <div>
            <input type="checkbox" name="flowers[]" value="violet">
            <label>violet</label>
        </div>
        <br>

        <!-- range -->
        <div>
            <label> maximum Badget </label>
            <br>
            <input type="range" name="max-range" min="1000" max="5000" step="1000" value="<?= !empty($_POST['color-theme']) ? $_POST['color-theme'] : '' ?>">
        </div>
        <br>

        <!-- month -->
        <div>
            <label>What month are you expecting another event?</label>
            <input type="month" name="possible-event">
        </div>
        <br>

        <!-- radio -->
        <div>
            <p>send confirmation message via </p>
            <input type="radio" name="confirm" value="email">
            <label>Email</label>

            <input type="radio" name="confirm" value="phone">
            <label>Phone</label>

            <input type="radio" name="confirm" value="facebook">
            <label>facebook</label>
        </div>
        <br>

        <!-- search -->
        <div>
            <input type="search" name="search" value="<?= !empty($_POST['search']) ? $_POST['search'] : '' ?>">
        </div>
        <br>

        <!-- submit -->
        <div>
            <input type="submit" name="submit" value="login">
        </div>
        <br>

        <h1>
            <?= htmlentities($message) ?>
        </h1>

    </form>

</body>

</html>