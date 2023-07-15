import requests
import json

def sacms(ip, accessToken):
    url = 'https://samdb.eu.org/api/ip?ip=' + ip
    data = {}
    headers = {
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ' + accessToken
    }
    response = requests.post(url, headers=headers, json=data)
    return response.text

accessToken = ''  # Enter your Bearer Token

print(sacms('66.102.0.0', accessToken))
