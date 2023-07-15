import requests
import json

def sacms(id, accessToken):
    url = 'https://samdb.eu.org/api/GDfile?id=' + id
    data = {}
    headers = {
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ' + accessToken
    }
    response = requests.post(url, headers=headers, json=data)
    return response.text

accessToken = ''  # Enter your Bearer Token

print(sacms('1KZ8VW_Pmy0Mbtcc5H_dczFEI3lc4zI5O', accessToken))
