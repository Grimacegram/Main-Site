var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost", //<===change this
  user: "yourusername", //<===change this
  password: "yourpassword" //<===change this
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  con.query("CREATE DATABASE mydb", function (err, result) { //<===change this
    if (err) throw err;
    console.log("Database created");
  });
});