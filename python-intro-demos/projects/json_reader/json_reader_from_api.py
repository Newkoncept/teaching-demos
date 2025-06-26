import urllib.request as ur
import json

header = {
    "User-Agent": "Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Mobile Safari/537.36"
}
request = ur.Request("https://dummy.restapiexample.com/api/v1/employees", headers=header)

# urlHandle = ur.urlopen("https://dummy.restapiexample.com/api/v1/employees")
urlHandle = ur.urlopen(request)

jsonHandle = json.load(urlHandle)

datas = jsonHandle["data"]

for data in datas:
    print("id:", data["id"])
    print("name:", data["employee_name"])
    print("salary:", data["employee_salary"])
    print("")
    print("")

