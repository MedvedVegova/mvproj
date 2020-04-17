const http = require('http');

const hostname = '127.0.0.1';
const port = 3000;

const server = http.createServer((req, res) => {  //req: request, res:response
    res.statusCode = 200;
    res.setHeader('Content-Type', 'text/plain'); 
    res.write(req.url+"\n");
    res.end('Hello 0000000000 World\n');
  });
  
server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});