
<?php
function limit_title_words($title, $word_limit) {
    // Count the number of words in the title
    $word_count = str_word_count($title);

    // If the word count exceeds the limit, truncate the title
    if ($word_count > $word_limit) {
        // Split the title into an array of words
        $words = explode(' ', $title);
        
        // Limit the array to the desired number of words
        $words = array_slice($words, 0, $word_limit);
        
        // Join the words back into a string
        $title = implode(' ', $words) . '...';  // Append '...' to indicate truncation
    }

    return $title;
} ?>