const express = require("express");
const axios = require("axios"); // We'll use Axios for making HTTP requests

const app = express();
const port = 3000; // Choose a port for your proxy server

app.use(express.json());

// Define a route for handling proxy requests
app.get("/proxy", async (req, res) => {
  const url = req.query.url; // Get the URL from the query parameters

  try {
    // Make a request to the external URL
    const response = await axios.get(url);

    // Send the response from the external server to the client
    res.send(response.data);
  } catch (error) {
    console.error("Error:", error);
    res.status(500).send("Error");
  }
});

// Start the proxy server
app.listen(port, () => {
  console.log(`Proxy server is running on port ${port}`);
});
