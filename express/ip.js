const express = require('express');
const axios = require('axios');

const app = express();

function sacms(ip, accessToken) {
  const url = `https://samdb.eu.org/api/ip?ip=${ip}`;
  const data = {};

  const headers = {
    'Content-Type': 'application/json',
    'Authorization': `Bearer ${accessToken}`
  };

  return axios.post(url, data, { headers })
    .then(response => response.data)
    .catch(error => {
      console.error(error);
      throw error;
    });
}

const accessToken = ''; // Enter your Bearer Token

app.get('/', (req, res) => {
  sacms('66.102.0.0', accessToken)
    .then(response => res.send(response))
    .catch(error => res.status(500).send('An error occurred.'));
});

const port = 3000;
app.listen(port, () => {
  console.log(`Server running on port ${port}`);
});