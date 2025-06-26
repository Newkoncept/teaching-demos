import requests
import re

url = "https://example.com"
response = requests.get(url)
links = re.findall(r'href="(.*?)"', response.text)
print(links)
