<!DOCTYPE html>
<html>

<?php session_start()?>

<style>

  /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */

/* Document
   ========================================================================== */

/**
 * 1. Correct the line height in all browsers.
 * 2. Prevent adjustments of font size after orientation changes in iOS.
 */

html {
  line-height: 1.15; /* 1 */
  -webkit-text-size-adjust: 100%; /* 2 */
}

/* Sections
   ========================================================================== */

/**
 * Remove the margin in all browsers.
 */

body {
  margin: 0;
}

/**
 * Render the `main` element consistently in IE.
 */

main {
  display: block;
}

/**
 * Correct the font size and margin on `h1` elements within `section` and
 * `article` contexts in Chrome, Firefox, and Safari.
 */

h1 {
  font-size: 2em;
  margin: 0.67em 0;
}

/* Grouping content
   ========================================================================== */

/**
 * 1. Add the correct box sizing in Firefox.
 * 2. Show the overflow in Edge and IE.
 */

hr {
  box-sizing: content-box; /* 1 */
  height: 0; /* 1 */
  overflow: visible; /* 2 */
}

/**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */

pre {
  font-family: monospace, monospace; /* 1 */
  font-size: 1em; /* 2 */
}

/* Text-level semantics
   ========================================================================== */

/**
 * Remove the gray background on active links in IE 10.
 */

a {
  background-color: transparent;
}

/**
 * 1. Remove the bottom border in Chrome 57-
 * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
 */

abbr[title] {
  border-bottom: none; /* 1 */
  text-decoration: underline; /* 2 */
  text-decoration: underline dotted; /* 2 */
}

/**
 * Add the correct font weight in Chrome, Edge, and Safari.
 */

b,
strong {
  font-weight: bolder;
}

/**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */

code,
kbd,
samp {
  font-family: monospace, monospace; /* 1 */
  font-size: 1em; /* 2 */
}

/**
 * Add the correct font size in all browsers.
 */

small {
  font-size: 80%;
}

/**
 * Prevent `sub` and `sup` elements from affecting the line height in
 * all browsers.
 */

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/* Embedded content
   ========================================================================== */

/**
 * Remove the border on images inside links in IE 10.
 */

img {
  border-style: none;
}

/* Forms
   ========================================================================== */

/**
 * 1. Change the font styles in all browsers.
 * 2. Remove the margin in Firefox and Safari.
 */

button,
input,
optgroup,
select,
textarea {
  font-family: inherit; /* 1 */
  font-size: 100%; /* 1 */
  line-height: 1.15; /* 1 */
  margin: 0; /* 2 */
}

/**
 * Show the overflow in IE.
 * 1. Show the overflow in Edge.
 */

button,
input { /* 1 */
  overflow: visible;
}

/**
 * Remove the inheritance of text transform in Edge, Firefox, and IE.
 * 1. Remove the inheritance of text transform in Firefox.
 */

button,
select { /* 1 */
  text-transform: none;
}

/**
 * Correct the inability to style clickable types in iOS and Safari.
 */

button,
[type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
}

/**
 * Remove the inner border and padding in Firefox.
 */

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  border-style: none;
  padding: 0;
}

/**
 * Restore the focus styles unset by the previous rule.
 */

button:-moz-focusring,
[type="button"]:-moz-focusring,
[type="reset"]:-moz-focusring,
[type="submit"]:-moz-focusring {
  outline: 1px dotted ButtonText;
}

/**
 * Correct the padding in Firefox.
 */

fieldset {
  padding: 0.35em 0.75em 0.625em;
}

/**
 * 1. Correct the text wrapping in Edge and IE.
 * 2. Correct the color inheritance from `fieldset` elements in IE.
 * 3. Remove the padding so developers are not caught out when they zero out
 *    `fieldset` elements in all browsers.
 */

legend {
  box-sizing: border-box; /* 1 */
  color: inherit; /* 2 */
  display: table; /* 1 */
  max-width: 100%; /* 1 */
  padding: 0; /* 3 */
  white-space: normal; /* 1 */
}

/**
 * Add the correct vertical alignment in Chrome, Firefox, and Opera.
 */

progress {
  vertical-align: baseline;
}

/**
 * Remove the default vertical scrollbar in IE 10+.
 */

textarea {
  overflow: auto;
}

/**
 * 1. Add the correct box sizing in IE 10.
 * 2. Remove the padding in IE 10.
 */

[type="checkbox"],
[type="radio"] {
  box-sizing: border-box; /* 1 */
  padding: 0; /* 2 */
}

/**
 * Correct the cursor style of increment and decrement buttons in Chrome.
 */

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

/**
 * 1. Correct the odd appearance in Chrome and Safari.
 * 2. Correct the outline style in Safari.
 */

[type="search"] {
  -webkit-appearance: textfield; /* 1 */
  outline-offset: -2px; /* 2 */
}

/**
 * Remove the inner padding in Chrome and Safari on macOS.
 */

[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

/**
 * 1. Correct the inability to style clickable types in iOS and Safari.
 * 2. Change font properties to `inherit` in Safari.
 */

::-webkit-file-upload-button {
  -webkit-appearance: button; /* 1 */
  font: inherit; /* 2 */
}

/* Interactive
   ========================================================================== */

/*
 * Add the correct display in Edge, IE 10+, and Firefox.
 */

details {
  display: block;
}

/*
 * Add the correct display in all browsers.
 */

summary {
  display: list-item;
}

/* Misc
   ========================================================================== */

/**
 * Add the correct display in IE 10+.
 */

template {
  display: none;
}

/**
 * Add the correct display in IE 10.
 */

[hidden] {
  display: none;
}
    
* {
  text-align: center;
  color: #000000;
}

header{
  background-image: url('your-image.jpg');
    background-size: cover;
    background-position: center;
    height: 200px;
}
  body {
    margin: 0;
    padding: 0;
    font-size: 1rem;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background: radial-gradient( #D58A8A 0%, #2E2525 100%);
    /* background: linear-gradient(0deg, rgb(107, 101, 208) 0%, rgb(44, 235, 191) 35%, rgb(57, 207, 236) 100%);  */
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; 
  }

  input[type='submit'] {

    border-radius:46%;
    color: black; 
    padding: 5px 9px; 
    text-align: center; 
    text-decoration: none; 
    display: inline-block;
    font-size: 12px;
    background-color: #E98D8D;
    transition-duration: 0.4s;
    transition: all 0.7s ease 0s;
    cursor: pointer;

    
}

  input[type=submit]:hover {
    transform: translateY(-7px);
    background-color: #45a049;
}

/* #border{
  border-style: dotted;
  margin: 20%; 
}*/

.border1{
  border-style: solid;
  background: linear-gradient(90deg, #fff 100%, #000 100%);
  box-shadow: 10px 20px 25px;

  margin: 20%;
}
.border1 {
  transition: transform 1.5s;
}
.border1:hover{
  transform: scale(1.1);
  transition: transform 1.5s;
}

</style>
<img src="bookface.png" width="500" height="300"></img>
<?php

error_reporting(E_ERROR | E_PARSE);
//Create Connection
$servername = "localhost";
$username = "chen";
$password = "wenxuan5538";
$dbname = "chen_";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "<br>Login successfully!";

$curuserid = $_SESSION['userid'];
//echo $curuserid;

// Creating posts
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST['form_type'])){
  $postTitle = $_POST["title"];
  $postBody = $_POST["postBody"];
  $sql = "INSERT INTO postTable(postLike,postTitle,postBody,userid_FK)
  VALUES (0,?,?,?)";
  
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssi", $postTitle, $postBody, $curuserid);

  if($stmt->execute()){
    echo "Post created successfully";
  }else{
    echo "Error". $stmt->error;
  }
}
// this will be for posts
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['form_type'] == 'like_post') {
  $postId = $_POST['postID_FK'];
  // Incrementing likes for posts
  $sql = "UPDATE postTable SET postLike = postLike + 1 WHERE postID = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $postId);

  if ($stmt->execute()) {
    echo "<br>Post has been liked.";
  } else {
    echo "Error: " . $sql . "<br>" . $stmt->error;
  }
}

// For Likes under comments
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['form_type'] == 'like_comment') {
  $commentId = $_POST['commentID'];
  echo $commentId;
  // Incrementing likes for comment, this is not working currently
  $sql = "UPDATE commentTable SET commentLike = commentLike + 1 WHERE commentid = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $commentId);
  echo $sql;
  if ($stmt->execute()) {
    echo " Comment has been liked.";
  } else {
    echo "Error: " . $sql . "<br>" . $stmt->error;
  }
}

// this will be for comment form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['form_type'] == 'comment'){
  $commentBody = $_POST['comment'];
  $date = date('Y-m-d');
  $postID = $_POST['postID_FK'];
  
  $sql = "INSERT INTO commentTable(commentBody, userid_FK, commentLike, commentDate, postID_FK)
          VALUES (?, ?, 0, ?, ?)";
  
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sisi", $commentBody, $curuserid, $date, $postID);
  
  if ($stmt->execute()) {
    echo "Comment has been added.";
  } else {
    echo "Error: " . $sql . "<br>" . $stmt->error;
  }
  
  $stmt->close();
}
$sql_post = "SELECT postID, postTitle, postBody, postDate, postLike FROM postTable";
$result = $conn->query($sql_post);
// start from here alex
if($result->num_rows > 0)
{
  while($row = $result->fetch_assoc()){
    echo "<div class='border1'>";
    echo "<h2>".$row["postTitle"]."</h2>";
    echo "<p id=postb>".$row["postBody"]."</p>";
    echo "<p>Likes: ".$row["postLike"]."</p>"; 
    echo "<p>Date: ".$row["postDate"]."</p>";
    echo "

    
      <form method='post'>
      
        <input type='hidden' name='form_type' value='like_post'>
        <input type='hidden' name='postID_FK' value='".$row["postID"]."'>
        <input type='submit' id='submit' value='Like_Post'>
      
      </form>";
      
    

    $postId = $row["postID"]; 
    $sql_comments = "SELECT commentBody, commentDate, commentLike FROM commentTable WHERE postID_FK = ?";
    $stmt = $conn->prepare($sql_comments);
    $stmt->bind_param("i", $postId);
    $stmt->execute();
    $result_comments = $stmt->get_result();

    if($result_comments->num_rows > 0){
      while($row_comment = $result_comments->fetch_assoc()){
        echo "<p id='commentb'>".$row_comment["commentBody"]."</p>";
        echo "<p>Likes: ".$row_comment["commentLike"]."</p>";
        echo "<p>Date: ".$row_comment["commentDate"]."</p>";
        echo "
          <form method='post'>
            <input type='hidden' name='form_type' value='like_comment'>
            <input type='hidden' name='commentID' value='".$row_comment["commentid"]."'>
            <input type='submit' value='Like_Comment'>
          </form>";
        
      }
    }

                     // This is for adding a comment to a previous post!
    echo '<h2>Add a comment to this Post:</h2>
    <form id = "border" method = "post">
      <input type="hidden" name="form_type" value="comment">
      <label for="comment">Comment:</label>
      <textarea id="comment" name="comment" required></textarea>
      <br>
      <input type="hidden" id="postID" name="postID_FK" value="'.$row["postID"].'"> 
      <input type="submit" name="submit" value="Submit">
    </form>';
    echo "</div>";
  }
}
	

 if($result->num_rows > 0)
 {
   echo "<div class='border1'><table>";
   while($row = $result->fetch_assoc()){
     echo "<tr>";
     echo "<td>".$row["postTitle"]."</td>";
    echo "<td>".$row["postBody"]."</td>";
     echo "<td>".$row["postLike"]."</td>"; // Display likes count
     echo "<td>".$row["postDate"]."</td>";
     echo "</tr>";

     $postId = $row["postID"]; // Fetch the postId

//     // retrive and show comments associated with this post
     $sql_comments = "SELECT commentid, commentBody, commentDate, commentLike FROM commentTable WHERE postID_FK = ?";
     $stmt = $conn->prepare($sql_comments);
     $stmt->bind_param("i", $postId);
     $stmt->execute();
     $result_comments = $stmt->get_result();

     if($result_comments->num_rows > 0){
       echo "<tr><th>Comments:</th></tr>";
       while($row_comment = $result_comments->fetch_assoc()){
         echo "<tr>";
         echo "<td>".$row_comment["commentBody"]."</td>";
         echo "<td>".$row_comment["commentDate"]."</td>";
         echo "<td>".$row_comment["commentLike"]."</td>"; // Display likes count
         echo "</tr>";

        $commentId = $row_comment["commentid"]; // Fetch the commentid

        // // Display the like button for each comment
         echo '
         <form method="post">
            <input type="hidden" name="form_type" value="like_comment">
           <input type="hidden" name="commentID" value="'.$commentId.'">
           <input type="submit" value="Like Comment">
         </form>';



                   // this will show the comment form for each post thats posted
     echo '<h3>Add a Comment</h3>
     <form method="post">
       <input type="hidden" name="form_type" value="comment">
       <label for="comment">Comment:</label>
       <textarea id="comment" name="comment" required></textarea>
       <br>
       <input type="hidden" id="postID" name="postID_FK" value="'.$postId.'"> 
       <input type="submit" name="submit" value="Submit">
     </form>';

                    // this will show the like button for each post
    echo '
     <form method="post">
      <input type="hidden" name="form_type" value="like_post">
      <input type="hidden" name="postID_FK" value="'.$postId.'">
     </form>';

  echo "</table> </div>";
       }}}}

?>

  <h1>Start A Post Here</h1>
   <form method="post">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required><br>
    <label for="postBody">Post Body:</label>
    <input type="text" id="postBody" name="postBody" required><br>
    <input type="submit" value="Submit">
   </form>

<h4>  </h4>
<form action="FinalProject226.php">
<input type="submit" value="LOG OUT">
</form>

</html>
