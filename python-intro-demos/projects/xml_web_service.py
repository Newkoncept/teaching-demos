import xml.etree.ElementTree as ET

data = '''
    <person>
        <name>Chuck</name>
        <phone type="intl">+1234566232</phone>
        <email hide="yes" />
    </person>
'''

xmlTree = ET.fromstring(data)
print(xmlTree.find("name").text)
print(xmlTree.find("phone").text)
print(xmlTree.find("email").get("hide"))

print()
print("======================")
print("NESTED XML ELEMENTS")
print("======================")

data1 = '''
    <students>
        <student>
            <name>Sample 1</name>
            <code>001</code>
        </student>
        <student>
            <name>Sample 2</name>
            <code>002</code>
        </student>
        <student>
            <name>Sample 3</name>
            <code>003</code>
        </student>
        <student>
            <name>Sample 4</name>
            <code>004</code>
        </student>
    </students>
'''

xmlTree = ET.fromstring(data1)
totalStudents = xmlTree.findall("student")
for line in totalStudents:
    print("Name: ", line.find("name").text)
    print("Code: ", line.find("code").text)