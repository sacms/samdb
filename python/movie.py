import requests
import json

def sacms(id, accessToken):
    url = 'https://samdb.eu.org/api/imdb?id=' + id
    data = {}
    headers = {
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ' + accessToken
    }
    response = requests.post(url, headers=headers, json=data)
    return response.text

accessToken = ''  # Enter your Bearer Token

print(sacms('tt1630029', accessToken))
