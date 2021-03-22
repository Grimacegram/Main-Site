var url = require('url');
var adr = 'http://localhost:8080/default.htm?year=2017&month=february'; //Change
var q = url.parse(adr, true);

console.log(q.host); //returns 'localhost:8080' /*change*/
console.log(q.pathname); //returns '/default.htm' /*change*/
console.log(q.search); //returns '?year=2017&month=february' /*change*/

var qdata = q.query; //returns an object: { year: 2017, month: 'february' } /*change*/
console.log(qdata.month); //returns 'february' /*change*/