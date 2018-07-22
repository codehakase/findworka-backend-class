<!Doctype hmtl>
<html>
  <head>
    <title>Sample Todo App</title>
    <style>
      body {
        background: #b0e0e6;
        font-family: "Roboto", sans-serif;
      }

      .wrapper {
        max-width: 300px;
        margin: 0 auto;
        padding: 20px 14px;
        align-content: center;
        background: #fff;
      }
      .tx { text-align: center; }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="tx">
        <h1>Todo App</h1>
        <form action="todo.php" method="POST">
          <input type="text" name="todo_item" placeholder="Enter todo item..." />
          <input type="submit" name="add_item" value="Add Item" />
        </form>
      </div>
      <div class="todo-items">
        <ul>
          <li>Item 1</li>
          <li>Item 1</li>
          <li>Item 1</li>
        </ul>
      </div>
    </div>
  </body>
</html>
