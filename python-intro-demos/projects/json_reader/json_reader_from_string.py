import json

jsonFormat = '''{
    "name": "Ayo",
    "age": 19,
    "gender": "male",
    "number": {
        "type": "intl",
        "content": 438572943
    }
}'''

allStudentsFormat ='''[
    {
        "name": "Ayo",
        "age": 19,
        "gender": "male",
        "number": {
            "type": "intl",
            "content": 438572943
        }
    },
    {
        "name": "Ayo",
        "age": 19,
        "gender": "male",
        "number": {
            "type": "intl",
            "content": 438572943
        }
    }
]'''

allStudents = json.loads(allStudentsFormat)

for line in allStudents:
    print(line["name"])
    print(line["number"]["type"])