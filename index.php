<h1 style="color:white; text-align:center;">Voice Assistant Modular Adapter</h1>
<body style="background-color:#101020;">
    <div id="observablehq-chart-44d22b90"></div>
    <p>Credit: <a href="https://observablehq.com/@nicholastann/zoomable-sunburst">Zoomable Sunburst by Nick Tann</a></p>
</body>

<script type="module">
    import {Runtime, Inspector} from "https://cdn.jsdelivr.net/npm/@observablehq/runtime@4/dist/runtime.js";
    import define from "https://api.observablehq.com/@nicholastann/zoomable-sunburst.js?v=3";
    new Runtime().module(define, name => {
    if (name === "chart") return new Inspector(document.querySelector("#observablehq-chart-44d22b90"));
    });
</script>


<link rel="stylesheet" href="style.css">