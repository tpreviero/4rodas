const express = require("express");
const path = require("path");
const app = express();

app.set("views", __dirname + "src/views");
app.use(express.static(path.join(__dirname, "dist")));
app.use('/bower_components', express.static(path.join(__dirname, '/bower_components')));

app.get("/*", function(req, res) {
	res.sendFile(path.join(__dirname, "src/views/index.html"));
});

app.listen(3000, function(req, res) {
    console.log("Servidor escutando na porta: " + this.address().port);
});