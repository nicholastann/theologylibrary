<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="Theology Library" content="width=device-width, initial-scale=1.0">
    <title>Theology Library</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <script>
      import {Runtime, Library, Inspector} from "./runtime.js";

      export {default} from "./sunburst.js";
      const runtime = new Runtime();
      const main = runtime.module(define, Inspector.into(document.body));


    </script>
  </head>

  <body>
    <div></div>
  </body>
</html>