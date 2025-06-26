import urllib.request
import re
from bs4 import BeautifulSoup

header = {}
header["User-Agent"] = "Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Mobile Safari/537.36"
request = urllib.request.Request("https://www.britannica.com/animal/python-snake-group", headers=header)

urlHandle = urllib.request.urlopen(request)

for line in urlHandle:
    data = re.findall("http\S+", line.decode())
    if data:
        if len(data) > 1:
            for i in data:
                print(i, end="\n\n")

        else:
            print(data, end="\n\n")