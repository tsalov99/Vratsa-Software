<?php

$dir_path = "saved files/";
$options = "";
$firstFile = fopen('saved files/file1', 'r');
$secondFile = fopen('saved files/file2', 'r');

if(is_dir($dir_path))
{
    $files = opendir($dir_path);
    {
        if($files)
        {
          while(($file_name = readdir($files)) !== FALSE)
          {
              if($file_name != '.' && $file_name != '..')
              {
               // select option with files names
               //$options = $options."<option>$file_name</option>";
              }
          }
        }
}
}

$content1 = explode("/n", file_get_contents($dir_path . "file1"));
$content2 = explode("/n", file_get_contents($dir_path . "file2"));
print_r($content1);
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Stanimir Kirilov</title>
    </head>
    
    <body>
        
        <select id="one">
            <?php echo $options;?>
            <option value="file1">file1</option>
            <option value="file2">file2</option>
        </select>

        <div id="one" class="fileContent" style="display: none">
        <?php print_r($content1); ?>
        <table>
        <th>doisjfoisdjfoids</th>
        <?php
        foreach($content1 as $num) {
            echo "<tr></tr>";
            for ($i; $i < 5; $i++){
                echo "<td>$num</td>";
            }
        }
        ?>
        </table>
        </div>

        <select id="two">
            <?php echo $options;?>
            <option value="file1">file1</option>
            <option value="file2">file2</option>
        </select>

        <div id="two" class="fileContent" style="display: none">
        
        </div>
    </body>
</html>