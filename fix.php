<?php
// fix.php - Scans EVERY file type, updates ALL references

function getAllFiles($dir) {
    $files = [];
    foreach (scandir($dir) as $item) {
        if ($item === '.' || $item === '..' || $item === 'fix.php') continue;
        $path = $dir . '/' . $item;
        if (is_dir($path)) {
            if (!in_array($item, ['vendor', 'node_modules', 'cache', 'backup', 'logs'])) {
                $files = array_merge($files, getAllFiles($path));
            }
        } else {
            // Scan ALL file types
            $ext = pathinfo($path, PATHINFO_EXTENSION);
            if (in_array($ext, ['php', 'html', 'htm', 'js', 'css', 'txt', 'inc', 'tpl', 'phtml'])) {
                $files[] = $path;
            }
        }
    }
    return $files;
}

echo "Scanning entire project...\n";
$allFiles = getAllFiles(__DIR__);

// Find files that contain 'his_admin_' in their content
$filesWithReferences = [];
$filesToRename = [];

foreach ($allFiles as $file) {
    $content = file_get_contents($file);
    
    // Check if file contains any 'his_admin_' reference
    if (strpos($content, 'his_admin_') !== false) {
        $filesWithReferences[] = $file;
    }
    
    // Check if filename starts with 'his_admin_'
    $name = basename($file);
    if (strpos($name, 'his_admin_') === 0) {
        $newName = str_replace('his_admin_', '', $name);
        $newName = str_replace('_', '-', $newName);
        $filesToRename[$file] = [
            'old_name' => $name,
            'new_name' => $newName,
            'old_ref' => str_replace('.php', '', $name),
            'new_ref' => str_replace('.php', '', $newName)
        ];
    }
}

echo "Found " . count($filesToRename) . " files to rename\n";
echo "Found " . count($filesWithReferences) . " files with 'his_admin_' references\n\n";

// First: Update ALL references in ALL files
echo "Updating references in all files...\n";
foreach ($filesWithReferences as $file) {
    $content = file_get_contents($file);
    $originalContent = $content;
    
    // Replace ALL variations of his_admin_ references
    // Find all his_admin_* patterns in the content
    preg_match_all('/his_admin_[a-zA-Z0-9_\-]+/', $content, $matches);
    
    foreach ($matches[0] as $match) {
        // If it's a filename with .php
        if (strpos($match, '.php') !== false) {
            $newMatch = str_replace('his_admin_', '', $match);
            $newMatch = str_replace('_', '-', $newMatch);
            $content = str_replace($match, $newMatch, $content);
        } 
        // If it's just a reference without .php
        else {
            $newMatch = str_replace('his_admin_', '', $match);
            $newMatch = str_replace('_', '-', $newMatch);
            $content = str_replace($match, $newMatch, $content);
        }
    }
    
    // Also do specific replacements for known patterns
    foreach ($filesToRename as $data) {
        // Replace with .php
        $content = str_replace($data['old_name'], $data['new_name'], $content);
        $content = str_replace("'" . $data['old_name'] . "'", "'" . $data['new_name'] . "'", $content);
        $content = str_replace('"' . $data['old_name'] . '"', '"' . $data['new_name'] . '"', $content);
        
        // Replace without .php
        $content = str_replace($data['old_ref'], $data['new_ref'], $content);
        $content = str_replace("'" . $data['old_ref'] . "'", "'" . $data['new_ref'] . "'", $content);
        $content = str_replace('"' . $data['old_ref'] . '"', '"' . $data['new_ref'] . '"', $content);
        
        // Replace in href and src attributes
        $content = str_replace('href="' . $data['old_name'] . '"', 'href="' . $data['new_name'] . '"', $content);
        $content = str_replace("href='" . $data['old_name'] . "'", "href='" . $data['new_name'] . "'", $content);
        $content = str_replace('src="' . $data['old_name'] . '"', 'src="' . $data['new_name'] . '"', $content);
        $content = str_replace("src='" . $data['old_name'] . "'", "src='" . $data['new_name'] . "'", $content);
        
        // Replace in include/require
        $content = str_replace("include '" . $data['old_name'] . "'", "include '" . $data['new_name'] . "'", $content);
        $content = str_replace('include "' . $data['old_name'] . '"', 'include "' . $data['new_name'] . '"', $content);
        $content = str_replace("require '" . $data['old_name'] . "'", "require '" . $data['new_name'] . "'", $content);
        $content = str_replace('require "' . $data['old_name'] . '"', 'require "' . $data['new_name'] . '"', $content);
    }
    
    if ($content !== $originalContent) {
        file_put_contents($file, $content);
        echo "✅ Updated: " . str_replace(__DIR__ . '/', '', $file) . "\n";
    }
}

echo "\nRenaming files...\n";
foreach ($filesToRename as $oldFile => $data) {
    $newFile = dirname($oldFile) . '/' . $data['new_name'];
    if (rename($oldFile, $newFile)) {
        echo "✅ " . $data['old_name'] . " → " . $data['new_name'] . "\n";
    }
}

echo "\nDone!";
?>