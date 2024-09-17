const http = require("http");

const server = http.createServer(testMethod);
function testMethod(req, res){
    const urlPath = req.url;
    if (urlPath === "/") {
        console.log(res)
        console.log(req)
        res.end('Welcome to the "overview page" of the nginX project');
    } else if (urlPath === "/api") {
        res.writeHead(200, { "Content-Type": "application/json" });
        res.end(
            JSON.stringify({
                product_id: "xyz12u3",
                product_name: "NginX injector",
            })
        );
    } else {
        res.end("Successfully started a server");
    }
}

server.listen(3000, "localhost", () => {
    console.log("Listening for request");
});
