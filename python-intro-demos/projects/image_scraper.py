import requests
from bs4 import BeautifulSoup

url = "https://example.com"
soup = BeautifulSoup(requests.get(url).text, "html.parser")
images = [img["src"] for img in soup.find_all("img") if "src" in img.attrs]
print(images)
