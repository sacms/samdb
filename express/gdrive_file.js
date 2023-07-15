const express = require('express');
const axios = require('axios');

const app = express();

function sacms(id, accessToken) {
  const url = `https://samdb.eu.org/api/GDfile?id=${id}`;
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
  sacms('1KZ8VW_Pmy0Mbtcc5H_dczFEI3lc4zI5O', accessToken)
    .then(response => res.send(response))
    .catch(error => res.status(500).send('An error occurred.'));
});

const port = 3000;
app.listen(port, () => {
  console.log(`Server running on port ${port}`);
});
