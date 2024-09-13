<?php

/**
 * Recursively builds an HTML navigation list from directories containing an index file.
 *
 * @param string $dir The current directory being processed.
 * @param string $relativePath The relative path for links, builds up as recursion happens.
 * @return string The HTML list structure for the current directory.
 */
function build_navigation($dir, $relativePath = '') {
    $output = '';          // Initialize the output variable to store HTML for the current directory
    $hasIndex = false;     // Flag to determine if the current directory contains an index file
    $items = scandir($dir);  // Retrieve the list of files and directories within the current directory
    $nestedList = '';      // This will store the HTML for nested directories (subdirectories)
    $subDirs = [];         // Array to collect subdirectories for further processing

    // Loop through each item in the current directory
    foreach ($items as $item) {
        // Skip '.' and '..' as they represent the current and parent directories
        if ($item == '.' || $item == '..') continue;

        $currentPath = $dir . '/' . $item;  // Build the full path of the item
        $relativeItemPath = $relativePath . '/' . $item;  // Build the relative path for linking

        // Check if the current item is a file and if it's either 'index.html' or 'index.php'
        if (is_file($currentPath) && ($item == 'index.html' || $item == 'index.php')) {
            $hasIndex = true;   // Set the flag indicating that this directory has an index file
            $indexFile = $item; // Store the name of the index file
            continue;           // Skip the rest of the loop as we don't need to process index files as directories
        }

        // If the current item is a directory, add it to the $subDirs array for further processing
        if (is_dir($currentPath)) {
            $subDirs[] = $item;
        }
    }

    // Process subdirectories only if there are any
    foreach ($subDirs as $subDir) {
        $subDirPath = $dir . '/' . $subDir;  // Build the full path to the subdirectory
        $nestedList .= build_navigation($subDirPath, $relativePath . '/' . $subDir);  // Recursively build navigation and append to $nestedList
    }

    // If there are subdirectories with content or an index file was found, wrap the nested items in a <ul>
    if ($hasIndex || $nestedList) {
        $dirName = basename($dir);  // Get the name of the current directory
        // Generate <li> element only if there's content to include
        $output = '<li data-blep="' . ($hasIndex ? 'blap' : 'bloop') . '"><a href="' . ($hasIndex ? $relativePath . '/' . $indexFile : '#') . '">' . $dirName . '</a>';
        // Add nested <ul> if there are subdirectories
        if ($nestedList) {
            $output .= '<ul>' . $nestedList . '</ul>';
        }
        $output .= '</li>';  // Close the <li> tag
    }

    return $output;  // Return the HTML for this directory and its subdirectories
}

// Define the base directory for the navigation, change this to the path where your 'work' folder resides
$baseDir = '/mnt/c/Users/ptsal/projects/petersalvatodotcom/work';

// Generate the navigation HTML for the 'work' directory
$workNav = build_navigation($baseDir, 'work');

// Output the complete HTML for the navigation
echo '<ul id="primaryNav">';  // Start the top-level unordered list
echo '<li data-blep="blup"><a href="#home">Home</a></li>';  // Static 'Home' link
echo '<li data-blep="blup"><a href="#about">About</a></li>';  // Static 'Home' link

// Output the navigation generated for the 'work' directory only if it contains content
if (trim($workNav) !== '') {
    echo $workNav;
} else {
    // Debugging message if no items were found for the 'work' directory
    echo '<!-- Debug: No navigation items generated for work directory -->';
}

echo '<li data-blep="blup"><a href="#blog">Blog</a></li>';  // Static 'Home' link
echo '<li data-blep="blup"><a href="#contact">Contact</a></li>';  // Static 'Home' link


echo '</ul>';  // Close the top-level unordered list


// Loop through each item in the current directory
foreach ($items as $item) {
    // Skip '.' and '..' as they represent the current and parent directories
    if ($item == '.' || $item == '..') continue;

    $currentPath = $dir . '/' . $item;  // Build the full path of the item
    $relativeItemPath = $relativePath . '/' . $item;  // Build the relative path for linking

    // Debug statement: output each item being processed
    echo "<!-- Debug: Processing item: $currentPath -->\n";

    // Check if the current item is a file and if it's either 'index.html' or 'index.php'
    if (is_file($currentPath) && ($item == 'index.html' || $item == 'index.php')) {
        $hasIndex = true;   // Set the flag indicating that this directory has an index file
        $indexFile = $item; // Store the name of the index file
        continue;           // Skip the rest of the loop as we don't need to process index files as directories
    }

    // If the current item is a directory, add it to the $subDirs array for further processing
    if (is_dir($currentPath)) {
        $subDirs[] = $item;
    }
}
// Check if the current item is a file and if it's either 'index.html' or 'index.php'
if (is_file($currentPath)) {
    if ($item == 'index.html' || $item == 'index.php') {
        echo "<!-- Debug: Found index file: $currentPath -->\n";
        $hasIndex = true;
        $indexFile = $item;
    } else {
        echo "<!-- Debug: File found but not index: $currentPath -->\n";
    }
}


?>
