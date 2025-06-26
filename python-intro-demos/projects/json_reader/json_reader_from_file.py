import json

fHandle = open("comments.json")

jsonDatas = json.load(fHandle)

# Printing Individual Comment
# print("id: ", jsonDatas[30]["id"])
# print("name: ", jsonDatas[30]["name"])
# print("email: ", jsonDatas[30]["email"])
# print("body: ", jsonDatas[30]["body"].replace("\n", ""))
# print()


# Printing all the comments
for line in jsonDatas:
    print("id: ", line["id"])
    print("name: ", line["name"])
    print("email: ", line["email"])
    print("body: ", line["body"].replace("\n", ""))
    print()


fHandle.close()