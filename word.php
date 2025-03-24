<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>word search</title>
</head>
<body>
    <?php 
    $paragraph="Technology has become an integral part of modern life, influencing various aspects of daily activities and industries. Its rapid advancement has transformed communication, education, and healthcare, among others, enabling greater efficiency and connectivity. As innovations continue to emerge, the impact of technology on society will likely expand, presenting both opportunities and challenges that require careful consideration.";

    echo"<p>".$paragraph."<p>" ;
    //geting input from user
    echo"<form method='post'>";
    echo "<label for='wordsearch'> Enter a word to search:</label>";
    echo"<input type='text' name='wordsearch' id='wordsearch'>";
    echo"<input type='submit' value='search'>";
    echo"</form>";
    
    if(isset($_POST['wordsearch'])) {
    $wordsearch=$_POST['wordsearch'];
    //using srtripos to find the postion of the word
    $position=stripos($paragraph, $wordsearch);
    
    if($position !== false){
        
        echo "<p>The word '" . htmlspecialchars($wordsearch) . "' was found at position " . $position . ".</p>";        
    }else{
        echo "<p> the word ".htmlspecialchars($wordsearch)."'was not found.</p>";

       
    } }
    ?>
    
</body>
</html>