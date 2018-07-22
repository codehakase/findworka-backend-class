<?php

// check if form was submitted
if (isset($_POST["add_item"])) {
  // run this block...
  $file = file_get_contents("./todo.json");
  $json_content = json_decode($file);
  $todoItem = $_POST["todo_item"];
  //var_dump($json_content, count($json_content->items));
  //return;
  $itemExist = false;
  for ($i = 0; $i < count($json_content->items); $i++) {
    if ($json_content->items[$i]->title == $todoItem) {
      // item exist don')(t save, return
      $itemExist = true;
      break;
    }
  }
  if ($itemExist == false) {
    // item doesn't exist in items array, let's add it
    array_push($json_content->items, [
      "title" => $todoItem,
      "date_created" => date('Y-m-d'),
    ]);
    // update and save file
   file_put_contents("./todo.json", json_encode($json_content));
   echo "<h1>todo Item added!!!</h1>";
  } else {
    header("Location: index.php?err=item_exist");
    return;
  }
}
?>
