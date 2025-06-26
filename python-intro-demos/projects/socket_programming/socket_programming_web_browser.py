# SIMPLE WEB BROWSER USING SOCKET
# SAMPLE WEBSITE:
# URL1 = http://www.py4inf.com/code/romeo.txt
# URL2 = http://data.pr4e.org/romeo.txt

#
# EXAMPLE 1
#
# using socket with url 1
import socket

socketHandle = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
socketHandle.connect(("www.py4inf.com", 80))
socketHandle.send("GET http://www.py4inf.com/code/romeo.txt HTTP/1.0\r\n\r\n".encode())

while True:
    data = socketHandle.recv(512)
    if len(data) < 1:
        break
    print(data.decode())

socketHandle.close()


print()
print()
print()
print("Example 1 end........................")
print()
print()
print()
print()
print()
print()
#
# EXAMPLE 2
#
# using socket with url 2
import socket

socketHandle = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
socketHandle.connect(("data.pr4e.org", 80))
socketHandle.send("GET http://data.pr4e.org/romeo.txt HTTP/1.0\r\n\r\n".encode())

while True:
    data = socketHandle.recv(512)
    if len(data) < 1:
        break
    print(data.decode())

socketHandle.close()