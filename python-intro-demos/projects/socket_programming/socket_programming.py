import socket

socketHandle = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
socketHandle.connect(("data.pr4e.org", 80))
socketHandle.send("GET http://data.pr4e.org/romeo.txt HTTP/1.0\r\n\r\n".encode())

while True:
    data = socketHandle.recv(512)
    if len(data) < 1:
        break
    print(data.decode().strip())

