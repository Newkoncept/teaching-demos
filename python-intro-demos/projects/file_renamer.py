import os

for i, filename in enumerate(os.listdir(".")):
    if filename.endswith(".txt"):
        os.rename(filename, f"file_{i}.txt")
