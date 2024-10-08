<?php

/**
 * Recursively builds an HTML navigation list from directories containing an index file.
 *
 * @param string $dir The current directory being processed.
 * @param string $relativePath The relative path for links, builds up as recursion happens.
 * @param string $baseURL The base URL path that will be prepended to the relative path.
 * @return string The HTML list structure for the current directory.
 */
function build_navigation($dir, $relativePath = '', $baseURL = '') {
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
        $nestedList .= build_navigation($subDirPath, $relativePath . '/' . $subDir, $baseURL);  // Recursively build navigation and append to $nestedList
    }

    // If there are subdirectories with content or an index file was found, wrap the nested items in a <ul>
    if ($hasIndex || $nestedList) {
        $dirName = basename($dir);  // Get the name of the current directory
        // Generate the correct href for the directory, including the base URL
        $href = $hasIndex ? $baseURL . $relativePath . '/' . $indexFile : '#';
        $output = '<li data-blep="' . ($hasIndex ? 'blap' : 'bloop') . '"><a href="' . $href . '">' . $dirName . '</a>';
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
// Define the base URL, including 'petersalvatodotcom' to ensure it is in the URLs
$baseURL = '/petersalvatodotcom/work';

// Generate the navigation HTML for the 'work' directory
$workNav = build_navigation($baseDir, '', $baseURL);

// Output the complete HTML for the navigation
echo '<ul id="primaryNav">';  // Start the top-level unordered list
echo '<li data-blep="blup"><a href="/petersalvatodotcom/">Home</a></li>';  // Static 'Home' link
echo '<li data-blep="blup"><a href="/petersalvatodotcom/about">About</a></li>';  // Static 'About' link

// Output the navigation generated for the 'work' directory only if it contains content
if (trim($workNav) !== '') {
    echo $workNav;
} else {
    // Debugging message if no items were found for the 'work' directory
    echo '<!-- Debug: No navigation items generated for work directory -->';
}

echo '<li data-blep="blup"><a href="/petersalvatodotcom/blog">Blog</a></li>';  // Static 'Blog' link
echo '<li data-blep="blup"><a href="/petersalvatodotcom/contact">Contact</a></li>';  // Static 'Contact' link

echo '</ul>';  // Close the top-level unordered list

?>
