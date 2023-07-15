const https = require('https');

function sacms(id, accessToken) {
  const url = `https://samdb.eu.org/api/imdb?id=${id}`;
  const data = {};
  const postData = JSON.stringify(data);

  const options = {
    hostname: 'samdb.eu.org',
    path: '/api/imdb?id=' + id,
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'Authorization': 'Bearer ' + accessToken
    }
  };

  return new Promise((resolve, reject) => {
    const req = https.request(options, (res) => {
      let responseBody = '';

      res.on('data', (chunk) => {
        responseBody += chunk;
      });

      res.on('end', () => {
        resolve(responseBody);
      });
    });

    req.on('error', (error) => {
      reject(error);
    });

    req.write(postData);
    req.end();
  });
}

const accessToken = ''; // Enter your Bearer Token
sacms('tt1630029', accessToken)
  .then((response) => {
    console.log(response);
  })
  .catch((error) => {
    console.error(error);
  });
